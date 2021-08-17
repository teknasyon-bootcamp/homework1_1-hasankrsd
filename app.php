<?php
// Yaş aralığı buraya girilir
$age = 25;

// Bu bölümde yukarıda girilen yaşa göre girilen değer bir yaş aralığına atanır.

if ($age >=0 && $age <=14) {
    $group = "Çocuk"; 
    } else if($age >=15 && $age <= 24){
      $group = "Genç";
    }else if($age >=25 && $age <= 64){
      $group = "Yetişkin";
    }else if($age >=65){
      $group = "Yaşlı";
    }
// Burada da atanan yaş aralığı ekrana yazdırılır.

echo $group;
