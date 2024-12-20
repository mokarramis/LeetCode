<?php

/*
 Here, I initially converted the integer to a string, 
 split it into an array, and then compared the values 
 from the first half with those from the reversed second half. 
 However, I found that one simplest approach is to avoid converting the number 
 to a string and instead directly compare the first half of the integer 
 with the reversed second half.
*/
class PalindromNumber
{
  public function palindrom(int $palindrom)
  {
    $palindrom = str_split((string)$palindrom, 1);
    $result = [];
    $n = count($palindrom);

    for ($i=0; $i < $n / 2; $i++) { 
      if ($palindrom[$i] == $palindrom[$n - 1 - $i]) {
        array_push($result, 1);
      } else {
        array_push($result, 0);
      }
    }

    if (in_array(0, $result)) {
      return false;
    }

    return true;

  }
}

$palindrom = -121;
$pal = new PalindromNumber();
$pal->palindrom($palindrom);
