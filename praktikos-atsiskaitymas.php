<?php

////1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas)
//   $numbers = [
//       15,
//       55,
//       66,
//       91,
//       100,
//       995,
//       17,
//       550,
//   ];
//
//   $evenNumbers = [];
//   foreach ($numbers as $key => $value){
//       if ($value % 2 === 0){
//           $evenNumbers[] = $value;
//       }
//   };
//
//   $sumOfEvenNumbers = array_sum($evenNumbers);
//   echo $sumOfEvenNumbers;


////2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas)
//   $numbers = [
//       [1, 3, 5],
//       [55, 87, 100],
//       [12],
//       [],
//   ];
//
//   $nonMultidimensionalNumbers = [];
//
//   foreach ($numbers as $key => $value){
//       foreach ($value as $subKey => $subValue){
//           $nonMultidimensionalNumbers[] = $subValue;
//       }
//   };
//
//   $product = array_product($nonMultidimensionalNumbers);
//   echo $product;

//3.     Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
//Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
//      Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (3 balai)
//
//      Destination "Paris".
//Titles: "Romantic Paris", "Hidden Paris"
//      Total: 99500
//************
//      Destination "New York"
//      ...

   $holidays = [
       [
           'title' => 'Romantic Paris',
           'destination' => 'Paris',
           'price' => 1500,
           'tourists' => 55,
       ],
       [
           'title' => 'Amazing New York',
           'destination' => 'New York',
           'price' => 2699,
           'tourists' => 21,
       ],
       [
           'title' => 'Spectacular Sydey',
           'destination' => 'Sydey',
           'price' => 4130,
           'tourists' => 9,
       ],
       [
           'title' => 'Hidden Paris',
           'destination' => 'Paris',
           'price' => 1700,
           'tourists' => 10,
       ],
       [
           'title' => 'Emperors of the past',
           'destination' => 'Beijing',
           'price' => null,
           'tourists' => 10,
       ],
   ];

    foreach ($holidays as $key => $value) {
        foreach ($value as $subKey => $subValue) {
            if ($subValue === null) {
               unset($holidays[$key]);
            }
        }
    }

$forDuplicateCities = [];
    foreach ($holidays as $key => $value) {
        $forDuplicateCities[] = $value['destination'];
        $duplicateCities = array_diff_assoc($forDuplicateCities, array_unique($forDuplicateCities));
        $duplicateCities = array_unique($duplicateCities);
    }

$forDuplicateCalculations = [];
$forTitleManipulation = [];

    foreach ($duplicateCities as $city) {
        foreach ($holidays as $key => $value) {
            if ($value['destination'] === $city) {
                unset($holidays[$key]);
                $forTitleManipulation[] = $value['title'];
                $titles = implode(',', $forTitleManipulation);
                $titlesOutput = '"' . str_replace(',', '", "', $titles) . '"';

                $destination = $value['destination'];

                $forDuplicateCalculations[] = $value;

                $total = array_reduce($forDuplicateCalculations,
                    function (float $number, array $price) {
                    $priceTotal = $price['price'] * $price['tourists'];
                    return $number + $priceTotal;
                }, 0);
            }

        }
    }
    echo 'Destination ' . '"' . $destination . '"' . PHP_EOL . 'Titles: ' . $titlesOutput .
        PHP_EOL . 'Total: ' . $total . PHP_EOL . '************' . PHP_EOL;


   if (!empty($holidays)) {
       foreach ($holidays as $key => $value) {
        $titleHolidays = $value['title'];
        $destination = $value['destination'];
        $total = $value['price'] * $value['tourists'];
        echo 'Destination ' . '"' . $destination . '"' . PHP_EOL . 'Titles: ' . $titleHolidays .
            PHP_EOL . 'Total: ' . $total . PHP_EOL . '************' . PHP_EOL;
        }
   };

