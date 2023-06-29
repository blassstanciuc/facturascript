<?php
namespace FacturaScripts\Plugins\PermisosUsuarios\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;
use FacturaScripts\Core\Base\DataBase;

class PermisosMarca extends ModelClass
{
    use ModelTrait;

    
    public $codpermisosmarca;

    public $idusuario;

    public $idmarca;
    
    
    public function clear() {
        parent::clear();
    }

    public static function primaryColumn(): string {
        return "codpermisosmarca";
    }

    public static function tableName(): string {
        return "permisosmarca";
    }

    public function save()
    {
        $idusuario = $this->idusuario;
        $idmarcaArray = $this->idmarca;
        $codpermisosmarca = $this->codpermisosmarca;

        $pdo = new DataBase();
    
        foreach ($idmarcaArray as $idmarca) {
            // Convertir a entero
            $idmarca = intval($idmarca); 
            $codpermisos = intval($codpermisosmarca);
            
            $pdo->exec("INSERT INTO permisosmarca (codpermisosmarca,idusuariomarca, idmarca) VALUES ('" . $codpermisos . "', '" . $idusuario . "', '" . $idmarca . "')");
        }
        $this->toolBox()->i18nLog()->notice('record-updated-correctly');
        return;
    }
}



