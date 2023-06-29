<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2023 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace FacturaScripts\Core\Controller;

use FacturaScripts\Core\DataSrc\Empresas;
use FacturaScripts\Core\Lib\ExtendedController\ListController;

/**
 * Controller to list the items in the FormaPago model
 *
 * @author Carlos García Gómez           <carlos@facturascripts.com>
 * @author Jose Antonio Cuello Principal <yopli2000@gmail.com>
 */
class ListFormaPago extends ListController
{
    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'accounting';
        $data['title'] = 'payment-methods';
        $data['icon'] = 'fas fa-credit-card';
        return $data;
    }

    /**
     * Load views
     */
    protected function createViews()
    {
        $this->createViewsPaymentMethods();
        $this->createViewsBankAccounts();
    }

    protected function createViewsBankAccounts(string $viewName = 'ListCuentaBanco')
    {
        $this->addView($viewName, 'CuentaBanco', 'bank-accounts', 'fas fa-piggy-bank');
        $this->addSearchFields($viewName, ['descripcion', 'codcuenta']);
        $this->addOrderBy($viewName, ['codcuenta'], 'code');
        $this->addOrderBy($viewName, ['descripcion'], 'description');

        // filters
        $this->addFilterSelect('ListCuentaBanco', 'idempresa', 'company', 'idempresa', Empresas::codeModel());
    }

    protected function createViewsPaymentMethods(string $viewName = 'ListFormaPago')
    {
        $this->addView($viewName, 'FormaPago', 'payment-methods', 'fas fa-credit-card');
        $this->addSearchFields($viewName, ['descripcion', 'codpago']);
        $this->addOrderBy($viewName, ['codpago', 'idempresa'], 'code');
        $this->addOrderBy($viewName, ['descripcion'], 'description');
        $this->addOrderBy($viewName, ['idempresa', 'codpago'], 'company');

        // filters
        $this->addFilterSelect($viewName, 'idempresa', 'company', 'idempresa', Empresas::codeModel());
        $this->addFilterCheckbox($viewName, 'pagado', 'paid', 'pagado');
        $this->addFilterCheckbox($viewName, 'domiciliado', 'domiciled', 'domiciliado');
    }
}
