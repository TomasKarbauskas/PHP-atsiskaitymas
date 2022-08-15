<?php

//1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas)
   $numbers = [
       15,
       55,
       66,
       91,
       100,
       995,
       17,
       550,
   ];

   $evenNumbers = [];
   foreach ($numbers as $key => $value){
       if ($value % 2 === 0){
           $evenNumbers[] = $value;
       }
   };

   $sumOfEvenNumbers = array_sum($evenNumbers);
   echo $sumOfEvenNumbers;
