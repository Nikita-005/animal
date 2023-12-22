<?php
  class Wolf extends Predator{
    public function sayAboutMe(){
       parent::sayAboutMe();
       echo "Охочусь стаей".'<br>';
    }
  }  
