<?php
namespace FacturaScripts\Plugins\Familias\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;
use FacturaScripts\Dinamic\Model\Familia as DinFamilia;

class Subfamilia extends ModelClass
{
    use ModelTrait;

    
    public $id;

    public $descripcion;

    public $padre;
    
    
    public function clear() {
        parent::clear();
    }

    public static function primaryColumn(): string {
        return "id";
    }

    public static function tableName(): string {
        return "subfamilias";
    }
}
