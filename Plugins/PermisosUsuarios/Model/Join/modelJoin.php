<?php

namespace FacturaScripts\Plugins\PermisosUsuarios\Model\Join;


use FacturaScripts\Plugins\PermisosUsuarios\Model\PermisosFamilia as DinPermisosFamilia;
class modelJoin extends \FacturaScripts\Core\Model\Base\JoinModel
{
    public function __construct($data = array()) {
        parent::__construct($data);
        $this->setMasterModel( new DinPermisosFamilia() );
    }

    protected function getFields(): array
    {
        
            return [
                'codpermisos'=>'MAX(permisosfacmilias.codpermisos)',
                'usuario' => 'permisosfacmilias.idusuario',
                'familias' => "GROUP_CONCAT(DISTINCT familias.descripcion SEPARATOR ', ') ",

            ];

    }

    protected function getSQLFrom(): string
    {
        return 'permisosfacmilias INNER JOIN familias ON permisosfacmilias.idfamilia = familias.codfamilia';
    }
    
    protected function getGroupFields(): string
{
    return 'permisosfacmilias.idusuario';
}

    protected function getTables(): array
    {
        return ['permisosfacmilias', 'familias'];
    }


}
