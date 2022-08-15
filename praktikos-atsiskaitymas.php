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

////4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1.5 balas)
//
//   $holidays = [
//       [
//           'title' => 'Romantic Paris',
//           'destination' => 'Paris',
//           'price' => 1500,
//           'tourists' => 55,
//       ],
//       [
//           'title' => 'Amazing New York',
//           'destination' => 'New York',
//           'price' => 2699,
//           'tourists' => 21,
//       ],
//       [
//           'title' => 'Spectacular Sydney',
//           'destination' => 'Sydney',
//           'price' => 4130,
//           'tourists' => 9,
//       ],
//       [
//           'title' => 'Hidden Paris',
//           'destination' => 'Paris',
//           'price' => 1700,
//           'tourists' => 10,
//       ],
//       [
//           'title' => 'Emperors of the past',
//           'destination' => 'Beijing',
//           'price' => null,
//           'tourists' => 10,
//       ],
//   ];
//
//    foreach ($holidays as $key => $value) {
//        foreach ($value as $subKey => $subValue) {
//            if ($subValue === null) {
//               unset($holidays[$key]);
//            }
//        }
//    }
//
//$forDuplicateCities = [];
//    foreach ($holidays as $key => $value) {
//        $forDuplicateCities[] = $value['destination'];
//        $duplicateCities = array_diff_assoc($forDuplicateCities, array_unique($forDuplicateCities));
//        $duplicateCities = array_unique($duplicateCities);
//    }
//
//$forDuplicateCalculations = [];
//$forTitleManipulation = [];
//$forOutput = [];
//
//    foreach ($duplicateCities as $city) {
//        foreach ($holidays as $key => $value) {
//            if ($value['destination'] === $city) {
//                unset($holidays[$key]);
//                $forTitleManipulation[] = $value['title'];
//                $titles = implode(',', $forTitleManipulation);
//                $titlesOutput = '"' . str_replace(',', '", "', $titles) . '"';
//
//                $destination = $value['destination'];
//
//                $forDuplicateCalculations[] = $value;
//
//                $total = array_reduce($forDuplicateCalculations,
//                    function (float $number, array $price) {
//                    $priceTotal = $price['price'] * $price['tourists'];
//                    return $number + $priceTotal;
//                }, 0);
//            }
//
//        }
//    }
//    $outputDoublesValue = 'Destination ' . '"' . $destination . '"' . PHP_EOL . 'Titles: ' . $titlesOutput .
//        PHP_EOL . 'Total: ' . $total . PHP_EOL . '************' . PHP_EOL;
//    $forOutput[] = $outputDoublesValue;
//
//
//   if (!empty($holidays)) {
//       foreach ($holidays as $key => $value) {
//        $titleHolidays = $value['title'];
//        $destination = $value['destination'];
//        $total = $value['price'] * $value['tourists'];
//        $outputValue = 'Destination ' . '"' . $destination . '"' . PHP_EOL . 'Titles: ' . $titleHolidays .
//            PHP_EOL . 'Total: ' . $total . PHP_EOL . '************' . PHP_EOL;
//        $forOutput[] = $outputValue;
//        }
//   };
//
//file_put_contents('PHP-atsiskaitymas/output-from-task-4.txt', $forOutput);


//5. Parašykite programą, kuri Jūsų susigalvotus duomenis paimtų iš failo ir atspausdintų terminale. (1.5 balas)
// sugalvoti duomenis = task4. output

//echo file_get_contents('PHP-atsiskaitymas/output-from-task-4.txt');


//6. Parašykite programą, kuri per argumentų padavimą terminale paleidžiant funkciją
//juos priimtų ir juos sudaugintų tarpusavyje ir pakeltu kvadratu.
//Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius,
//reikia, kad terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)

//simulated readline function
if(!function_exists("readline")) {
    function readline($prompt = null){
        if($prompt){
            echo $prompt;
        }
        $fp = fopen("php://stdin","r");
        $line = rtrim(fgets($fp, 1024));
        return $line;
    }
}

$valueOne = readline('Enter value one: ');
$valueTwo = readline('Enter value two: ');

$numberOne = intval($valueOne);
$numberTwo = intval($valueTwo);

function value_calculation (int $nOne, int $nTwo): int
{
    return ($nOne * $nTwo) ** 2;
};

if($numberOne === 0 || $numberTwo === 0){
    echo 'Error! value must be number greater than 0';
} else {
    echo value_calculation($valueOne, $valueTwo);
};

