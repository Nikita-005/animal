<?php
class Herbivor extends Animal
{
   public function sayAboutMe(){
     parent::sayAboutMe();
     echo "Я питаюсь травой (вегетарианец)".'<br>';
  }
}  
