<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2013-2022 Carlos Garcia Gomez <carlos@facturascripts.com>
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

namespace FacturaScripts\Plugins\Fami\Model;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Dinamic\Model\Subcuenta as DinSubcuenta;
use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;
/**
 * A family of products.
 *
 * @author Carlos García Gómez  <carlos@facturascripts.com>
 * @author Jose Antonio Cuello Principal <yopli2000@gmail.com>
 */
class Subfamilia extends ModelClass
{

    use ModelTrait;

    /**
     * Primary key.
     *
     * @var string
     */
    public $codsubfamilia;

    /**

    /**
     * Family's description.
     *
     * @var string
     */
    public $descripcion;

    /**
     * Mother family code.
     *
     * @var string
     */
    public $codfamilia;

    /**
     * Number of products
     *
     * @var int
     */
    public $numproductos;

    public function clear()
    {
        parent::clear();
        $this->numproductos = 0;
    }

    public static function primaryColumn(): string
    {
        return 'codsubfamilia';
    }

    public static function tableName(): string
    {
        return 'subfamilia';
    }
    /**
     * Get the accounting account for irpf purchases.
     *
     * @param string $code
     *
     * @return string
     */


    /**
     * Get the accounting account for purchases.
     *
     * @param string $code
     *
     * @return string
     */

    /**
     * Get the accounting account for sales.
     *
     * @param string $code
     *
     * @return string
     */

    public function test(): bool
    {
        // comprobamos codfamilia
        $utils = $this->toolBox()->utils();
        $this->codsubfamilia = $utils->noHtml($this->codsubfamilia);
        $this->descripcion = $utils->noHtml($this->descripcion);

        if ($this->codsubfamilia && 1 !== preg_match('/^[A-Z0-9_\+\.\-]{1,8}$/i', $this->codsubfamilia)) {
            $this->toolBox()->i18nLog()->error(
                'invalid-alphanumeric-code',
                ['%value%' => $this->codsubfamilia, '%column%' => 'codsubfamilia', '%min%' => '1', '%max%' => '8']
            );
            return false;
        }
        // comprobamos descripción
    
        if (empty($this->descripcion) || strlen($this->descripcion) > 100) {
            $this->toolBox()->i18nLog()->warning(
                'invalid-column-lenght',
                ['%column%' => 'descripcion', '%min%' => '1', '%max%' => '100']
            );
            return false;
        }

        return parent::test();
    }


    protected function saveInsert(array $values = []): bool
    {
        if (empty($this->codsubfamilia)) {
            $this->codsubfamilia = $this->newCode();
        }

        return parent::saveInsert($values);
    }



    private static function getSubaccountFromFamily(?string $code, string $field, Subfamilia $model = null): string
    {
        if (empty($code)) {
            return '';
        }

        if (!isset($model)) {
            $model = new Subfamilia();
        }

        if (false === $model->loadFromCode($code)) {
            return '';
        }

    }




    protected function testLoops(): bool
    {
        if (empty($this->codfamilia)) {
            return true;
        }

        // comprobamos que la familia no sea su propia madre
        if ($this->codfamilia === $this->codsubfamilia) {
            $this->codfamilia = null;
            return true;
        }

        // recorremos los ancestros de esta familia, si repetimos ancestro es que hay un bucle, y eso es un problema
        $ancestros = [$this->codsubfamilia];
        $fam = new static();
        $fam->codfamilia = $this->codfamilia;
        while ($fam->codfamilia && $fam->loadFromCode($fam->codfamilia)) {
            if (in_array($fam->codsubfamilia, $ancestros)) {
                return false;
            }
            $ancestros[] = $fam->codsubfamilia;
        }

        return true;
    }
}
