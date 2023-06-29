<?php
namespace FacturaScripts\Plugins\PermisosUsuarios\Controller;

use FacturaScripts\Core\Model\Familia;
use FacturaScripts\Plugins\PermisosUsuarios\Model\PermisosFamilia;
use Symfony\Component\HttpFoundation\Request;
use FacturaScripts\Core\Base\Controller;

// Imprimir los valores capturados para depuración

class EditPermisosFamilia extends \FacturaScripts\Core\Lib\ExtendedController\EditController
{   
    const ITEM_SELECT_LIMIT = 500;
    public $codpermiso;
    public $nick;
    public$codfamilia;

    protected function createViews()
    {
        $this->setTemplate('EditPermisosFamilia');
    }

    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data["title"] = "PermisosFamilia";
        $data["icon"] = "fas fa-search";

        // Obtener la colección de datos de la tabla "familia"
        $familiaModel = new Familia();
        $familias = $familiaModel->all();
        $data["familias"] = $familias;

        return $data;
    }

    public function getModelClassName(): string {
        return "PermisosFamilia";
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
        if($action === 'savePermisosFamilia'){
            $this->savePermisosFamilia();
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
    

    public function savePermisosFamilia()
    {   

        $this->codpermiso = $_POST['codpermiso'];
        $this->nick = $_POST['nick'];
        $this->codfamilia = $_POST['codfamilia'];
        // var_dump($this->codpermiso);
        // var_dump($this->nick);
        // var_dump($this->codfamilia);
        // exit;
        // Crear una instancia del modelo "PermisosFamilia" y guardar los datos
        $permisosFamilia = new PermisosFamilia();
        $permisosFamilia->codpermisos = $this->codpermiso;
        $permisosFamilia->idusuario = $this->nick;
        $permisosFamilia->idfamilia = $this->codfamilia;
        $permisosFamilia->save();
    }
}

