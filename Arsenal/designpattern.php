<?php
   class Automobile {
      private $bikeMake;
      private $bikeModel;
      
      public function __construct($make, $model) {
         $this->bikeMake = $make;
         $this->bikeModel = $model;
      }
      
      public function getMakeAndModel() {
         return $this->bikeMake . ' ' . $this->bikeModel;
      }
   }
   
   class AutomobileFactory {
      public static function create($make, $model) {
         return new Automobile($make, $model);
      }
   }
   
   $pulsar = AutomobileFactory::create('ktm', 'pulsar');
   print_r($pulsar->getMakeAndModel());
    
?>