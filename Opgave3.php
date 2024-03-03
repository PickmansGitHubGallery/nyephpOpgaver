<?php
// Opgave A
function isPrime($number){
  if($number <= 1){
    return false;
  }
  for($i = 2; $i < $number; $i++){
    if($number % $i == 0){
      return false;
    }
  }
  return true;
  }

$boolNumber = isPrime(6);

if($boolNumber == true){
  echo "The number is prime";
} else {
  echo "The number is not prime";
}

//Opgave B
// Jeg kan ikke gennemskue hvor optimering kan være.
?>