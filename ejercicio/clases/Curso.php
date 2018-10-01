<?php
require_once 'Profesor.php';
/**
 *
 */
class Curso
{
  private $nombreCurso;
  private $codigoCurso;

  private $titular;
  private $adjunto;
  private $cupMax;
  private $alumnos= [];


  public function __construct( string $nombreCurso, int $codigoCurso )
   {
       $this->setNombreCurso($nombreCurso);
       $this->setCodigoCurso($codigoCurso);
   }


   public function geTNombreCurso() : String
 {
     return $this->nombreCurso;
 }

 public function getCodigoCurso() : int
 {
     $this-> $codigosCurso;
 }
 public function getTitular() : int
 {
     $this-> $titular;
 }
 public function getAdjunto() : int
 {
     $this-> $adjuntoo;
 }
 public function getCupMax() : int
 {
     $this-> $cupMax;
 }
 public function getAlumnos() : int
 {
     $this-> alumnos[]="Juan";
 }

 public function setTitular(string $titular)
 {
       $this->titular = $titular;
  }

 public function setAdjunto(int $adjunto)
{
       $this->adjunto = $adjunto;
}
public function setCupMax(int $cupMax)
{
       $this->cupMax = $cupMax;
}
public function setAlumnos(int $alumnos)
{
       $this->alumnos[] = $alumnos[0];
}
}
