<?php
namespace FacturaScripts\Plugins\Familias\Extension\Controller;

use Closure;

class ListFamilia 
{
   public function createViews(): Closure
   {
      return function(string $viewName = 'ListSubfamilia') {
           $this->addView($viewName, 'Subfamilia', 'Sub Familias', 'fas fa-sitemap');
           $this->addSearchFields($viewName, ['descripcion', 'id']);
           $this->addOrderBy($viewName, ['id'], 'code');
           $this->addOrderBy($viewName, ['descripcion'], 'description');
       
      };
   }
}
