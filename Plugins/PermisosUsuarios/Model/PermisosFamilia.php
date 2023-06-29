<?php
namespace FacturaScripts\Plugins\PermisosUsuarios\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;
use FacturaScripts\Core\Base\DataBase;
use Closure;
class PermisosFamilia extends ModelClass
{
    
    use ModelTrait;

    public $codpermisos;
    public $idusuario;
    public $idfamilia = null;


    public static function primaryColumn(): string {
        return "codpermisos";
    }

    public static function tableName(): string {
        return "permisosfacmilias";
    }

    public function save()
    {
        $idusu = $this->idusuario;
        $idfamiliaArray = $this->idfamilia;
        $codpermisos = $this->codpermisos;

        $pdo = new DataBase();
        foreach ($idfamiliaArray as $idfamilia) {
            $idfamilia = intval($idfamilia); // Convertir a entero
          
            $codpermisos = intval($codpermisos);
           
            $pdo->exec("INSERT INTO permisosfacmilias (codpermisos, idusuario, idfamilia) VALUES ('" . $codpermisos . "', '" . $idusu . "', '" . $idfamilia . "')");

        }
        $this->toolBox()->i18nLog()->notice('record-updated-correctly');
        return;
    }
    
}

?>
