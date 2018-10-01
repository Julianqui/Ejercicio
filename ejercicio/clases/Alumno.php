<?php
 /**
  *
  */
 class Alumno
 {
   private $nombre;
   private $apellido;
   private $codigo;



   public function __construct( string $nombre, string $apellido, int $codigo )
    {
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setCodigo($codigo);
    }



    public function geTNombre() : String
  {
      return $this->nombre;
  }

  public function getApellido() : String
  {
      return $this->apellido;
  }

  public function getCodigo() : int
  {
      $this-> $codigos;
  }




    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido(string $apellido)
    {
        $this->apellido = $apellido;
    }

    public function setCodigo(int $codigo)
    {
        $this->codigo = $codigo;
    }



  }
