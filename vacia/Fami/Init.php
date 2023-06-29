<?php
namespace FacturaScripts\Plugins\Fami;

use FacturaScripts\Core\Base\InitClass;

class Init extends InitClass
{
    public function init()
    {
        // se ejecuta cada vez que carga FacturaScripts (si este plugin está activado).
        $this->loadExtension(new Extension\Controller\ListFamilia('ListSubfamilia'));
    }

    public function update()
    {
        // se ejecuta cada vez que se instala o actualiza el plugin.
    }
}