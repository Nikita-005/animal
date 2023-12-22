<?php

class Predator extends Animal{
    private $teethLength;
    public function __construct($name, $age,$teethLengt){
      parent::__construct($name, $age);
      $this ->teethLength = $teethLengt;
   }
   public function sayAboutMe(){
    parent::sayAboutMe();
    echo "Мои зубы $this->teethLength мм.".'<br>';
   }
  }
