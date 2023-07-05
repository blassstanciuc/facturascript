<?php
namespace FacturaScripts\Plugins\Familias\Controller;

class ListSubfamilia extends \FacturaScripts\Core\Lib\ExtendedController\ListController
{
    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data["title"] = "Subfamilias";
        $data["menu"] = "hijodedputa";
        $data["icon"] = "fas fa-search";
        return $data;
    }

    protected function createViews()
    {
        $this->createViewsSubfamilia();
    }

    protected function createViewsSubfamilia(string $viewName = "ListSubfamilia")
    {
        $this->addView($viewName, "Subfamilia", "");
        $this->addSearchFields($viewName, ['descripcion', 'id']);
        $this->addOrderBy($viewName, ['id'], 'code');
        $this->addOrderBy($viewName, ['descripcion'], 'description');

    }
}
