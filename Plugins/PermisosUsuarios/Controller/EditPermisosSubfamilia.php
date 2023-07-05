<?php
namespace FacturaScripts\Plugins\PermisosUsuarios\Controller;

use FacturaScripts\Plugins\Familias\Model\Subfamilia;
use FacturaScripts\Plugins\PermisosUsuarios\Model\PermisosSubfamilia;
use Symfony\Component\HttpFoundation\Request;
use FacturaScripts\Core\Base\Controller;

// Imprimir los valores capturados para depuración

class EditPermisosSubfamilia extends \FacturaScripts\Core\Lib\ExtendedController\EditController
{   
    const ITEM_SELECT_LIMIT = 500;
    public $codpermisossubfamilia;
    public $nick;
    public$codsubfamilia;

    protected function createViews()
    {
        $this->setTemplate('EditPermisosSubfamilia');
    }

    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data["title"] = "PermisosFamilia";
        $data["icon"] = "fas fa-search";

        // Obtener la colección de datos de la tabla "familia"
        $familiaModel = new Subfamilia();
        $familias = $familiaModel->all();
        $data["subfamilias"] = $familias;

        return $data;
    }

    public function getModelClassName(): string {
        return "PermisosSubfamilia";
    }

/**
     * Runs the controller's private logic.
     *
     * @param Response $response
     * @param Model\User $user
     * @param ControllerPermissions $permissions
     */
    public function privateCore(&$response, $user, $permissions)
    {
        parent::privateCore($response, $user, $permissions);
        $action = $this->request->get('action', '');
        if($action === 'savePermisosSubfamilia'){
            $this->savePermisosSubfamilia();
        }
        
    }



    public function getSelectValues(string $modelName, bool $addEmpty = false, string $descriptionColumn = 'nombre'): array
    {
        $values = $addEmpty ? ['' => '------'] : [];
        $modelName = '\\FacturaScripts\\Dinamic\\Model\\' . $modelName;
        $model = new $modelName();
    
        $order = [$descriptionColumn => 'ASC'];
        foreach ($model->all([], $order, 0, self::ITEM_SELECT_LIMIT) as $newModel) {
            $values[$newModel->primaryColumnValue()] = $newModel->$descriptionColumn;
        }
    
        return $values;
    }
    

    public function savePermisosSubfamilia()
    {   

        $this->codpermisossubfamilia = $_POST['codpermisossubfamilia'];
        $this->nick = $_POST['nick'];
        $this->codsubfamilia = $_POST['codsubfamilia'];
        // var_dump($this->codpermiso);
        // var_dump($this->nick);
        // var_dump($this->codfamilia);
        // exit;
        // Crear una instancia del modelo "PermisosFamilia" y guardar los datos
        $permisosFamilia = new PermisosSubfamilia();
        $permisosFamilia->codpermisossubfamilia = $this->codpermisossubfamilia;
        $permisosFamilia->idusuariosubfamilia = $this->nick;
        $permisosFamilia->idsubfamilia = $this->codsubfamilia;
        $permisosFamilia->save();
    }
}

