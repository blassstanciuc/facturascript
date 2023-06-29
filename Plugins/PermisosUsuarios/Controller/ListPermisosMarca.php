<?php
namespace FacturaScripts\Plugins\PermisosUsuarios\Controller;
use FacturaScripts\Core\Session;
use FacturaScripts\Core\Lib\ExtendedController\ListController;

use Closure;

class ListPermisosMarca extends ListController
{

  public $user;


    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'admin';
        $data['title'] = 'Permisos de usuarios';
        $data['icon'] = 'fas fa-users-cog';
        return $data;
    }

    /**
     * Load views
     *
     */
    
    protected function createViews()
    {
      
      $this->createPermisosFamilia();
      $this->createPermisosMarca();
    }

    protected function createPermisosMarca(string $viewName = 'ListPermisosMarca')
    {
      $this->addView($viewName, 'Join\modelJoinMarca', 'Permisos Marca', 'fas fa-users-cog');
      $this->addSearchFields($viewName, ['idusuariomarca']);
      $this->addOrderBy($viewName, ['codpermisosmarca'], 'code');
      $this->addOrderBy($viewName, ['idusuariomarca'], 'user');
    }
        protected function createPermisosFamilia(string $viewName = 'ListPermisosFamilia')
    {
      $this->addView($viewName, 'Join\modelJoin', 'Permisos Familia', 'fas fa-users-cog');
      $this->addSearchFields($viewName, ['idusuario']);
      $this->addOrderBy($viewName, ['codpermisos'], 'code');
      $this->addOrderBy($viewName, ['idusuario'], 'user');
    }
    
}