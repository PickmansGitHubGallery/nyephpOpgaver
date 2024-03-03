<?php
//Opgave A
//Jeg har lavet en funktion som bruger strrev til at vende en string om og derefter sammenligner den med den originale string.
function isPalindrome($string){
  $reveresedString = strrev($string);
  if($string == $reveresedString){
    echo "The string is a palindrome";
  }else{ 
    echo "The string is not a palindrome";
  }
}

//isPalindrome("otto");
//echo "<br>";
//isPalindrome("test");


//Jeg har lavet en funktion som bruger substr til at vende en string om og derefter sammenligner den med den originale string.
function isPalindrome2($string){
  $reveresedString = "";
  for ($i = strlen($string); $i > -1; $i--){
    $reveresedString = $reveresedString . substr($string, $i, 1);
  }
  if($string == $reveresedString){
    echo "The string is a palindrome";
  }
  else{ 
    echo "The string is not a palindrome";
  }
}
//isPalindrome2("otto");
//echo "<br>";
//isPalindrome2("test");

//Opgave B
function isPalindromeLowerCase($string){
  $stringLowerCase = strtolower($string);
  $reveresedString = strrev($stringLowerCase);
  if($stringLowerCase == $reveresedString){
    echo "The string is a palindrome";
  }else{ 
    echo "The string is not a palindrome";
  }
}
//isPalindromeLowerCase("Otto");
//echo "<br>";
//isPalindromeLowerCase("Test");

//Opgave C
//Jeg bruger str_replace til at fjerne kommaer, punktummer og mellemrum fra en string og derefter sammenligner den med den originale string.
function isPalindromeWithCommaDotWhitSpace($string){
  $stringLowerCase = strtolower($string);
  $specialChars = array(",", " ", " ", ".");
  $stringWithoutSpecialChars = str_replace($specialChars, "", $stringLowerCase);
  $reveresedString = strrev($stringWithoutSpecialChars);
  if($stringWithoutSpecialChars == $reveresedString){
    echo "The string is a palindrome";
  }else{ 
    echo "The string is not a palindrome";
  }
}
//isPalindromeWithCommaDotWhitSpace("En af dem, der red med fane.");


/*
function isPalindromeWithCommaDotWhitSpace2($string){
  for ($i = 0; $i < strlen($string); $i++){
    if($string[$i] == "," || $string[$i] == " " || $string[$i] == "."){
    str_replace($string[$i], "", $string); // Jeg skal have samlet denne string.
    }
  }
  $reveresedString = strrev($string);
  if($string == $reveresedString){
    echo "The string is a palindrome";
  }else{ 
    echo "The string is not a palindrome";
    echo $string;
  }
}
isPalindromeWithCommaDotWhitSpace2("En af dem, der red med fane.");
*/


?>