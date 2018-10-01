<?php
require_once 'Adjunto.php';
 /**
  *
  */
 class Profesor
 {
   private $nombreProfesor;
   private $apellidoProfesor;
   private $antiguedad;
   private $codigoProfesor;



   public function __construct( string $nombreProfesor, string $apellidoProfesor, int $antiguedad, int $codigoProfesor )
    {
        $this->setNombreProfesor($nombreProfesor);
        $this->setApellidoProfesor($apellidoProfesor);
        $this->setAntiguedad($antiguedad);
        $this->setCodigoProfesor($codigoProfesor);
    }



    public function geTNombreProfesor() : String
  {
      return $this->nombreProfesor;
  }

  public function getApellidoProfesor() : String
  {
      return $this->apellidoProfesor;
  }

  public function getCodigoProfesor() : int
  {
      $this-> $codigosProfesor;
  }




    public function setNombreProfesor(string $nombreProfesor)
    {
        $this->nombreProfesor = $nombreProfesor;
    }

    public function setApellidoProfesor(string $apellidoProfesor)
    {
        $this->apellidoProfesor = $apellidoProfesor;
    }

    public function setAntiguedad(string $antiguedad)
    {
        $this->antiguedad = $antiguedad;
    }


    public function setCodigoProfesor(int $codigoProfesor)
    {
        $this->codigoProfesor = $codigoProfesor;
    }



  }
