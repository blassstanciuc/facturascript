<?php
namespace FacturaScripts\Plugins\PermisosUsuarios\Controller;
use FacturaScripts\Core\Model\Fabricante;
use FacturaScripts\Plugins\PermisosUsuarios\Model\PermisosMarca;


class EditPermisosMarca extends \FacturaScripts\Core\Lib\ExtendedController\EditController
{
    const ITEM_SELECT_LIMIT = 500;
    public $codpermisosmarca;
    public $nick;
    public $codfabricantes;

    protected function createViews()
    {
        $this->setTemplate('EditPermisosMarca');
    }



    public function getModelClassName(): string {
        return "PermisosMarca";
    }

    public function getPageData(): array {
        $data = parent::getPageData();
        $data["title"] = "Permisos Marca";
        $data["icon"] = "fas fa-search";
       

        $fabricanteModel = new Fabricante();
        $fabricante = $fabricanteModel->all();
        $data["fabricantes"] = $fabricante; 
        return $data;
    }

    public function privateCore(&$response, $user, $permissions)
    {
        parent::privateCore($response, $user, $permissions);
        $action = $this->request->get('action', '');
        if($action === 'savePermisosMarca'){
            $this->savePermisosMarca();
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
    

    public function savePermisosMarca()
    {   

        $this->codpermisosmarca = $_POST['codpermisosmarca'];
        $this->nick = $_POST['nick'];
        $this->codfabricantes = $_POST['codfabricante'];
        // var_dump($this->codpermiso);
        // var_dump($this->nick);
        // var_dump($this->codfamilia);
        // exit;
        // Crear una instancia del modelo "PermisosFamilia" y guardar los datos
        $permisosFamilia = new PermisosMarca();
        $permisosFamilia->codpermisosmarca = $this->codpermisosmarca;
        $permisosFamilia->idusuario = $this->nick;
        $permisosFamilia->idmarca = $this->codfabricantes;
        $permisosFamilia->save();
    }
}
