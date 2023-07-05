<?php
namespace FacturaScripts\Plugins\Familias\Controller;

class EditSubfamilia extends \FacturaScripts\Core\Lib\ExtendedController\EditController
{
    public function getModelClassName(): string {
        return "Subfamilia";
    }

    public function getPageData(): array {
        $data = parent::getPageData();
        $data["title"] = "Subfamilia";
        $data["icon"] = "fas fa-search";
        return $data;
    }
}
