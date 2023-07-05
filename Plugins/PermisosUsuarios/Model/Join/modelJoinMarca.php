<?php

namespace FacturaScripts\Plugins\PermisosUsuarios\Model\Join;

use FacturaScripts\Plugins\PermisosUsuarios\Model\PermisosMarca as DinPermisosMarca;

class modelJoinMarca extends \FacturaScripts\Core\Model\Base\JoinModel
{
    public function __construct($data = array()) {
        parent::__construct($data);
        $this->setMasterModel( new DinPermisosMarca() );
    } 

    protected function getFields(): array
    {
            return [
                'codpermisosmarca'=>'MAX(permisosmarca.codpermisosmarca)',
                'usuarios' => 'permisosmarca.idusuariomarca',
                'marcas' => "GROUP_CONCAT(DISTINCT fabricantes.nombre SEPARATOR ', ') ",
            ];
    }

    protected function getSQLFrom(): string
    {
        return 'permisosmarca INNER JOIN fabricantes ON permisosmarca.idmarca = fabricantes.codfabricante';
    }
    
    protected function getGroupFields(): string
    {
        return 'permisosmarca.idusuariomarca';
    }

    protected function getTables(): array
    {
        return ['permisosmarca', 'fabricantes'];
    }


}
