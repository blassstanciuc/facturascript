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

namespace FacturaScripts\Plugins\Fami\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

/**
 * Controller to list the items in the Familia model
 *
 * @author Carlos García Gómez           <carlos@facturascripts.com>
 * @author Jose Antonio Cuello Principal <yopli2000@gmail.com>
 */
class ListFamilia extends ListController
{
    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'warehouse';
        $data['title'] = 'Familia';
        $data['icon'] = 'fas fa-sitemap';
        return $data;
        
    }

    protected function createViews()
    {
        $this->createViewsFamilias();
        $this->createViewsSubFamilias();
    }

    protected function createViewsFamilias(string $viewName = 'ListFamilia'): void
    {
        $this->addView($viewName, 'Familia', 'families', 'fas fa-sitemap');
        $this->addSearchFields($viewName, ['descripcion', 'codfamilia', 'madre']);
        $this->addOrderBy($viewName, ['codfamilia'], 'code');
        $this->addOrderBy($viewName, ['descripcion'], 'description');
        $this->addOrderBy($viewName, ['madre'], 'parent');
        $this->addOrderBy($viewName, ['numproductos'], 'products');
        $selectValues = $this->codeModel->all('familias', 'codfamilia', 'descripcion');
        $this->addFilterSelect($viewName, 'madre', 'parent', 'madre', $selectValues);
    }

    protected function createViewsSubFamilias(string $viewName = 'ListSubfamilia'): void
    {
            $this->addView($viewName, 'Subfamilia', 'Subfamilias', 'fas fa-sitemap');
            $this->addSearchFields($viewName, ['descripcion', 'codsubfamilia', 'codfamilia']);
            $this->addOrderBy($viewName, ['codsubfamilia'], 'code');
            $this->addOrderBy($viewName, ['descripcion'], 'description');
            $this->addOrderBy($viewName, ['codfamilia'], 'parent');
            $this->addOrderBy($viewName, ['numproductos'], 'products');
            $selectValues = $this->codeModel->all('subfamilias', 'codsubfamilia', 'descripcion');
            $this->addFilterSelect($viewName, 'codfamilia', 'parent', 'codfamilia', $selectValues);
    
    }

    }
