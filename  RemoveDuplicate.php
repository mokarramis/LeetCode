<?php

class RemoveDuplicate
{
  public function removeDuplicate(&$nums)
  {
    $count = count($nums);
    $k = 1;
    
    for ($i = 1; $i < $count; $i++) {
        if ($nums[$i] !== $nums[$i - 1]) {
            $nums[$k] = $nums[$i];
            $k++;
        }            
    }
    
    return $k;
  }
}

$k = [1, 1, 2, 4, 4];
$test = new RemoveDuplicate();
print_r($test->removeDuplicate($k));