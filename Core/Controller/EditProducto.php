<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2022 Carlos Garcia Gomez <carlos@facturascripts.com>
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

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\DataSrc\Almacenes;
use FacturaScripts\Core\Lib\ExtendedController\BaseView;
use FacturaScripts\Core\Lib\ExtendedController\EditController;
use FacturaScripts\Core\Lib\ExtendedController\ProductImagesTrait;
use FacturaScripts\Dinamic\Model\Atributo;
use FacturaScripts\Core\Session;
use FacturaScripts\Core\Base\DataBase;
/**
 * Controller to edit a single item from the EditProducto model
 *
 * @author Carlos García Gómez          <carlos@facturascripts.com>
 * @author Jose Antonio Cuello Principal <yopli2000@gmail.com>
 * @author Fco. Antonio Moreno Pérez    <famphuelva@gmail.com>
 */
class EditProducto extends EditController
{
    use ProductImagesTrait;
    public $us;
 

    public function getModelClassName(): string
    {
        return 'Producto';
    }

    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'warehouse';
        $data['title'] = 'product';
        $data['icon'] = 'fas fa-cube';
        return $data;
    }

    /**
     * Load views
     */
    protected function createViews()
    {
        parent::createViews();
        $this->createViewsVariants();
        $this->createViewsProductImages();
        $this->createViewsStock();
        $this->createViewsSuppliers();
        $this->cargaDeSelectMarca();
        $this->cargaDeSelectFamilia();
        $this->cargaDeSelectSubfamilia();
    }

    protected function createViewsStock(string $viewName = 'EditStock')
    {
        $this->addEditListView($viewName, 'Stock', 'stock', 'fas fa-dolly');

        // si solamente hay un almacén, ocultamos la columna
        if (count(Almacenes::all()) <= 1) {
            $this->views[$viewName]->disableColumn('warehouse');
        }
    }

    protected function createViewsSuppliers(string $viewName = 'EditProductoProveedor')
    {
        $this->addEditListView($viewName, 'ProductoProveedor', 'suppliers', 'fas fa-users');
    }

    protected function createViewsVariants(string $viewName = 'EditVariante')
    {

        $this->addEditListView($viewName, 'Variante', 'variants', 'fas fa-project-diagram');

        $attribute = new Atributo();
        $attCount = $attribute->count();
        if ($attCount < 4) {
            $this->views[$viewName]->disableColumn('attribute-value-4');
        }
        if ($attCount < 3) {
            $this->views[$viewName]->disableColumn('attribute-value-3');
        }
        if ($attCount < 2) {
            $this->views[$viewName]->disableColumn('attribute-value-2');
        }
        if ($attCount < 1) {
            $this->views[$viewName]->disableColumn('attribute-value-1');
        }
    }

    /**
     * Run the actions that alter data before reading it.
     *
     * @param string $action
     * @return bool
     */
    protected function execPreviousAction($action)
    {
        switch ($action) {
            case 'add-image':
                return $this->addImageAction();

            case 'delete-image':
                return $this->deleteImageAction();
        }

        return parent::execPreviousAction($action);
    }

    /**
     * @return bool
     */
    protected function insertAction()
    {
        if (parent::insertAction()) {
            return true;
        }

        if ($this->active === 'EditProducto') {
            $this->views['EditProducto']->disableColumn('reference', false, 'false');
        }

        return false;
    }

    protected function loadCustomAttributeWidgets(string $viewName)
    {
        $values = $this->codeModel->all('AtributoValor', 'id', '');
        foreach (['attribute-value-1', 'attribute-value-2', 'attribute-value-3', 'attribute-value-4'] as $colName) {
            $column = $this->views[$viewName]->columnForName($colName);
            if ($column && $column->widget->getType() === 'select') {
                $column->widget->setValuesFromCodeModel($values);
            }
        }
    }

    protected function loadCustomReferenceWidget(string $viewName)
    {
        $references = [];
        $idproducto = $this->getViewModelValue('EditProducto', 'idproducto');
        $where = [new DataBaseWhere('idproducto', $idproducto)];
        foreach ($this->codeModel->all('variantes', 'referencia', 'referencia', false, $where) as $code) {
            $references[] = ['value' => $code->code, 'title' => $code->description];
        }

        $column = $this->views[$viewName]->columnForName('reference');
        if ($column && $column->widget->getType() === 'select') {
            $column->widget->setValuesFromArray($references, false);
        }
    }

    /**
     * Load view data procedure
     *
     * @param string $viewName
     * @param BaseView $view
     */
    protected function loadData($viewName, $view)
    {
        
        
        $idproducto = $this->getViewModelValue('EditProducto', 'idproducto');
        $where = [new DataBaseWhere('idproducto', $idproducto)];

        switch ($viewName) {
            case $this->getMainViewName():
                parent::loadData($viewName, $view);
                if (empty($view->model->primaryColumnValue())) {
                    $view->disableColumn('stock');
                }
                $this->loadCustomReferenceWidget('EditProductoProveedor');
                if ($view->model->nostock) {
                    $this->setSettings('EditStock', 'active', false);
                    break;
                }
                $this->loadCustomReferenceWidget('EditStock');
                break;

            case 'EditProductoImagen':
                $where = [new DataBaseWhere('idproducto', $idproducto)];
                $orderBy = ['referencia' => 'ASC', 'id' => 'ASC'];
                $view->loadData('', $where, $orderBy);
                break;

            case 'EditVariante':
                $view->loadData('', $where, ['idvariante' => 'DESC']);
                $this->loadCustomAttributeWidgets($viewName);
                break;

            case 'EditStock':
                $view->loadData('', $where, ['idstock' => 'DESC']);
                break;

            case 'EditProductoProveedor':
                $view->loadData('', $where, ['id' => 'DESC']);
                break;
        }

    }

    protected function cargaDeSelectMarca(string $viewName='EditProducto')
    {
        $this->us = Session::user()->level;
       
        $usuario = $this->us;
        $pdoMarca = new DataBase();
        $column = $this->views[$viewName]->columnForName('Marca');
        $opcionsMarca = [''];

        if($usuario != 99){
            $resultsMarca = $pdoMarca->select("SELECT * FROM fabricantes f INNER JOIN permisosmarca p ON p.idmarca = f.codfabricante WHERE p.idusuariomarca = '" . $usuario . "'");
        }else{
            $resultsMarca = $pdoMarca->select("SELECT * FROM fabricantes");
         }

         foreach ($resultsMarca as $result) {
            $descripcion = $result['nombre'];
            $codigo = $result['codfabricante'];

            array_push($opcionsMarca, ['value'=>$codigo, 'title'=>$descripcion]);
        }

        if($column && $column->widget->getType() === 'select') {

            $column->widget->setValuesFromArray($opcionsMarca);
        }
    }

    protected function cargaDeSelectFamilia(string $viewName='EditProducto')
    {
        $this->us = Session::user()->nick;

        $usuario = $this->us;
        $con = new DataBase();
        $column = $this->views[$viewName]->columnForName('Familia');
        $options = [''];

        if($usuario != 'admin'){
            $results = $con->select("SELECT * FROM familias f INNER JOIN permisosfacmilias p ON p.idfamilia = f.codfamilia WHERE p.idusuario = '" . $usuario . "'");
         }else{
            $results = $con->select("SELECT * FROM familias");
         }
         
         foreach ($results as $result) {
            $descripcion = $result['descripcion'];
            $codigo = $result['codfamilia'];

            array_push($options, ['value'=>$codigo, 'title'=>$descripcion]);
        }

        if($column && $column->widget->getType() === 'select') {

            $column->widget->setValuesFromArray($options);
        }
    }

    protected function cargaDeSelectSubfamilia(string $viewName='EditProducto')
    {
        $this->us = Session::user()->nick;
        
        $usuario = $this->us;
        $pdoSubfamilia = new DataBase();
        $column = $this->views[$viewName]->columnForName('Subfamilia');
        $opcionsSubfamilia  = [''];

        if($usuario != 'admin'){
            $resultsSubfamilia = $pdoSubfamilia->select("SELECT * FROM subfamilias f INNER JOIN permisossubfamilia p ON p.idsubfamilia = f.id WHERE p.idusuariosubfamilia = '" . $usuario . "'");
         }else{
            $resultsSubfamilia = $pdoSubfamilia->select("SELECT * FROM subfamilias ");
         }
         
         foreach ($resultsSubfamilia as $result) {
            $descripcion = $result['descripcion'];
            $codigo = $result['id'];

            array_push($opcionsSubfamilia, ['value'=>$codigo, 'title'=>$descripcion, 'data-fieldfilter'=>'padre', 'parent'=>'codfamilia']);
        }

        if($column && $column->widget->getType() === 'select') {

            $column->widget->setValuesFromArray($opcionsSubfamilia );
        }
    }
}
