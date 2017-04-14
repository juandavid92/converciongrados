<?php
 class CalculaTemp{
 
 public $convercion;
 public $cent;
 public $far;
 
 public function ConvertirCentigrados($far){
 
 $this->convercion = ($far * 9 / 5) + 32;
 return $this->convercion;
 }
 
 public function ConvertirFarenheit($cent){
 $this->convercion = 5 / 9 * ($cent - 32);
 return $this->convercion;
 }
 }
?>