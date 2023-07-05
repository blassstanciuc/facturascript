<?php
namespace FacturaScripts\Plugins\Marca\Controller;
use FacturaScripts\Core\Lib\ExtendedController\ListController;
use FacturaScripts\Core\Session;
use Closure;

class ListFabricante extends ListController
{
    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'warehouse';
        $data['title'] = 'Marca';
        $data['icon'] = 'fas fa-industry';
        return $data;
    }

    /**
     * Load views
     */
    protected function createViews()
    {
      $this->createViewsMarca();
      $this->createViewsModedelo();

    }

    protected function createViewsMarca(string $viewName = 'ListFabricante')
    {
      $this->addView($viewName, 'Fabricante', 'Marca', 'fas fa-industry');
      $this->addSearchFields($viewName, ['nombre', 'codfabricante']);
      $this->addOrderBy($viewName, ['codfabricante'], 'code');
      $this->addOrderBy($viewName, ['nombre'], 'name');
      $this->addOrderBy($viewName, ['numproductos'], 'products');
    }

    protected function createViewsModedelo(string $viewName = 'ListMarcaModelo')
    {
      $this->addView($viewName, 'MarcaModelo', 'Modelo', 'fas fa-industry');
      $this->addSearchFields($viewName, ['descripcion', 'id']);
      $this->addOrderBy($viewName, ['id'], 'code');
      $this->addOrderBy($viewName, ['descripcion'], 'description');
    }

}
