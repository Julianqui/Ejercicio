<?php

/**
 *
 */
class Adjunto extends Profesor
{
  private $cantHojas;




  public function __construct( int $cantHojas )
   {
       $this->setCantHojas($cantHojas);
   }



   public function getCantHojas() : int
 {
     return $this->cantHojas;
 }


   public function setCantHojas(int $cantHojas)
   {
       $this->cantHojas = $cantHojas;
   }


}
