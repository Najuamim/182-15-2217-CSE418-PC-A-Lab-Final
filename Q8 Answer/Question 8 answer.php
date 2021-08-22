<?php
function Palindrome($string) {
  $revString = strrev($string);
  if ($revString == $string){
    echo $string." is a Palindrome string.\n";
  } else {
    echo $string." is not a Palindrome string.\n";
  }
}

Palindrome("level");
Palindrome("radar");
Palindrome("najua");
?>