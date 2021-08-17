<?php

$age = 25;


if ($age >=0 && $age <=14) {
    $group = "Çocuk"; 
    } else if($age >=15 && $age <= 24){
      $group = "Genç";
    }else if($age >=25 && $age <= 64){
      $group = "Yetişkin";
    }else if($age >=65){
      $group = "Yaşlı";
    }

echo $group;
