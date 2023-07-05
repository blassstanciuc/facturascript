<?php
namespace FacturaScripts\Plugins\Marca\Controller;

class EditMarcaModelo extends \FacturaScripts\Core\Lib\ExtendedController\EditController
{
    public function getModelClassName(): string {
        return "MarcaModelo";
    }

    public function getPageData(): array {
        $data = parent::getPageData();
        $data["title"] = "MarcaModelo";
        $data["icon"] = "fas fa-search";
        return $data;
    }
}
