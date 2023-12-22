<?php  
class Animal
  {
    
    private $name;
    private $age;
    public function  __construct($name, $age){
       $this->name= $name;
       $this->age= $age;
    }
    public function sayAboutMe(){
      echo("Я $this->name. Мне $this->age лет.".'<br>');
    }
    public function getName(){
      return $this->name; 
    }
    public function getAge(){
      return $this->age; 
    }
    public function setName($name){
      if($this->isNameCorrect($name)){
        $this->name= $name;
        return true;
      }
      else return false; 
    }
    public function setAge($age){
      $this->age = $age; 
    }
    private  function isNameCorrect($name){
      if(strlen($name)>100) return false;
      else return true; 
    }

  }
