<?php

namespace FacturaScripts\Plugins\PermisosUsuarios\Model\Join;


use FacturaScripts\Plugins\PermisosUsuarios\Model\PermisosSubfamilia as DinPermisosSubfamilia;
class modelJoinSubfamilia extends \FacturaScripts\Core\Model\Base\JoinModel
{
    public function __construct($data = array()) {
        parent::__construct($data);
        $this->setMasterModel( new DinPermisosSubfamilia() );
    }

    protected function getFields(): array
    {
        
            return [
                'codpermisossubfamilia'=>'MAX(permisossubfamilia.codpermisossubfamilia)',
                'usuarios' => 'permisossubfamilia.idusuariosubfamilia',
                'subfamilias' => "GROUP_CONCAT(DISTINCT subfamilias.descripcion SEPARATOR ', ') ",

            ];

    }

    protected function getSQLFrom(): string
    {
        return 'permisossubfamilia INNER JOIN subfamilias ON permisossubfamilia.idsubfamilia = subfamilias.id';
    }
    
    protected function getGroupFields(): string
{
    return 'permisossubfamilia.idusuariosubfamilia';
}

    protected function getTables(): array
    {
        return ['permisossubfamilia', 'subfamilias'];
    }


}
