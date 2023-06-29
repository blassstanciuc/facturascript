<?php

namespace FacturaScripts\Plugins\Articulos\Extension\Model;

use FacturaScripts\Core\Session;
use FacturaScripts\Core\Model\Base\ModelTrait;
use FacturaScripts\Core\Base\DataBase;
use Closure;

class Producto
{      
   public $codfamilia;
   public $codfabricante;
   public $us;
   public function clear(): Closure
   {
      return function () {
         //Recupero el usuario actual
         $this->us = Session::user()->nick;
         //genero una nueva conexion con mi db
         $con = new DataBase();
         $pdoMarca = new DataBase();
         
         $usuario = $this->us;
         $results = $con->select("SELECT * FROM familias f INNER JOIN permisosfacmilias p ON p.idfamilia = f.codfamilia WHERE p.idusuario = '" . $usuario . "'");
         $resultsMarca = $pdoMarca->select("SELECT * FROM fabricantes f INNER JOIN permisosmarca p ON p.idmarca = f.codfabricante WHERE p.idusuariomarca = '" . $usuario . "'");

         $options = '';
         $opcionsMarca = '';

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
     };
     
     
   } 
}