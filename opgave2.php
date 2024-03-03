<?php

//Opgave A
function  calcAverage($array){
  $newArray = array(); 
  $newArray = findHighestAndLowestNumber($array); //Jeg har prøvet at implementere findHighestAndLowestNumber, men den printer kun 1.
  $sum = 0;
  for($i = 0; $i < count($newArray); $i++){
    $number = intval($newArray[$i]);
    $sum = $sum + $number;
  }
  $average = $sum / count($newArray);
  return $average;
}
$numbers = array(4, 0, 5, 81, 6, 8);
$totalsum = calcAverage($numbers);
//print_r($totalsum);


//Opgave B
//Jeg har lavet en funktion som kan finde det højeste og laveste tal i et array og fjerner dem fra arrayet.
function  findHighestAndLowestNumber($array){
  $newArray = array();
  $newArray = $array;
  sort($newArray);
  array_shift($newArray);
  array_pop($newArray);
  return array($newArray);
}

/* Jeg har prøvet at lave en funktion, som kan finde det højeste og laveste tal, men jeg kan ikke fjerne dem fra arrayet. Jeg har bare ikke kunne implementere den i min calcAverage funktion.
function findHighestAndLowestNumber2($array){
  $highest = $array[0];
  $lowest = $array[0];
  for($i = 0; $i < count($array); $i++){
    if($array[$i] > $highest){
      $highest = $array[$i];
    }
    if($array[$i] < $lowest){
      $lowest = $array[$i];
    }
  }
  return array($highest, $lowest);
}
*/
$numberOpgaveC = array(4, 5, 6, 8);
//Opgave C
function  calcAverageOpGaveC($array){ 
  $sum = 0;
  for($i = 0; $i < count($array); $i++){
    $number = intval($array[$i]);
    $sum = $sum + $number;
  }
  $average = $sum / count($array);
  $averageRound = round($average,1);
  return $averageRound;
}
$x = calcAverageOpGaveC($numberOpgaveC);
print_r($x);
?>