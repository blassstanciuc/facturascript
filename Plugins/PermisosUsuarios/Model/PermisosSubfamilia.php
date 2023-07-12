<?php
namespace FacturaScripts\Plugins\PermisosUsuarios\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;
use FacturaScripts\Core\Base\DataBase;
use Closure;
class PermisosSubfamilia extends ModelClass
{
    
    use ModelTrait;

    public $codpermisossubfamilia;
    public $idusuariosubfamilia;
    public $idsubfamilia = null;


    public static function primaryColumn(): string {
        return "codpermisossubfamilia";
    }

    public static function tableName(): string {
        return "permisossubfamilia";
    }

    public function save()
    {
        $idusu = $this->idusuariosubfamilia;
        $idsubfamiliaArray = $this->idsubfamilia;
        $codpermisos = $this->codpermisossubfamilia;

        $pdo = new DataBase();

        $allusers = $pdo->select("SELECT idsubfamilia FROM permisossubfamilia");
        var_dump($allusers);
        exit;
        foreach ($idsubfamiliaArray as $idfamilia) {
            $idfamilia = intval($idfamilia); // Convertir a entero
          
            $codpermisos = intval($codpermisos);
           
            $pdo->exec("INSERT INTO permisossubfamilia (codpermisossubfamilia, idusuariosubfamilia, idsubfamilia) VALUES ('" . $codpermisos . "', '" . $idusu . "', '" . $idfamilia . "')");

        }
        
        $this->toolBox()->i18nLog()->notice('record-updated-correctly');
        return;
    }

}

?>
