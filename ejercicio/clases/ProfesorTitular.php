<?php
require_once('clases/Profesor.php');
/**
 *
 */
class ProfesorTitular extends Profesor
{
  private $especialidad;




  



   public function getEspecilidad() : String
 {
     return $this->especialidad;
 }


   public function setEspecilidad(string $especialidad)
   {
       $this->especialidad = $especialidad;
   }


}
