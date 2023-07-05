<?php

namespace FacturaScripts\Plugins\Articulos\Extension\Model;

use FacturaScripts\Core\Session;
use FacturaScripts\Core\Model\Base\ModelTrait;
use FacturaScripts\Core\Base\DataBase;
use Closure;
use FacturaScripts\Core\Controller\EditProducto;

class Producto
{      
   
   public $codfamilia;
   public $codfabricante;
   public $codsubfamilia;
   public $us;
   public $column;
   public function clear(): Closure
   {
      return function () {
         //Recupero el usuario actual
         $this->us = Session::user()->nick;
         //genero una nueva conexion con mi db
         $con = new DataBase();
         $pdoMarca = new DataBase();
         $pdoSubfamilia = new DataBase();

         $usuario = $this->us;
         if($usuario != 'admin'){
            $results = $con->select("SELECT * FROM familias f INNER JOIN permisosfacmilias p ON p.idfamilia = f.codfamilia WHERE p.idusuario = '" . $usuario . "'");
            $resultsMarca = $pdoMarca->select("SELECT * FROM fabricantes f INNER JOIN permisosmarca p ON p.idmarca = f.codfabricante WHERE p.idusuariomarca = '" . $usuario . "'");
            $resultsSubfamilia = $pdoSubfamilia->select("SELECT * FROM subfamilias f INNER JOIN permisossubfamilia p ON p.idsubfamilia = f.id WHERE p.idusuariosubfamilia = '" . $usuario . "'");
         }else{
            $results = $con->select("SELECT * FROM familias");
            $resultsMarca = $pdoMarca->select("SELECT * FROM fabricantes");
            $resultsSubfamilia = $pdoSubfamilia->select("SELECT * FROM subfamilias ");
         }
         
         $options = '';
         $opcionsMarca = '';
         $opcionsSubfamilia = '';

         foreach ($results as $result) {
             $descripcion = $result['descripcion'];
             $codigo = $result['codfamilia'];
             $options .= "<option value='$codigo'>$descripcion</option>";
         }
     
         $this->codfamilia = $options;

         foreach ($resultsMarca as $result) {
            $descripcion = $result['nombre'];
            $codigo = $result['codfabricante'];
            $opcionsMarca .= "<option value='$codigo'>$descripcion</option>";
        }

        $this->codfabricante = $opcionsMarca;

        foreach ($resultsSubfamilia as $result) {
         $descripcion = $result['descripcion'];
         $codigo = $result['id'];
         $opcionsSubfamilia .= "<option fieldcode='$codigo' fieldfilter='padre'>$descripcion</option>";
         }
         $this->codsubfamilia = $opcionsSubfamilia;
         //$columna = $this->getViewModelValue('EditProducto', 'codfamilia');
   
     };
      if (isset($_POST['codfamilia'])) {
      $codigofamilia = $_POST['codfamilia'];
   } else {
      $codigofamilia = ''; // Valor por defecto si no se selecciona nada
   }
         var_dump($codigofamilia);
         
     
   } 
}