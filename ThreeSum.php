<?php

class ThreeSum
{
  public function threeSum(array $threeSum)
  {
    $result = [];
    $length = count($threeSum);
    
    if ($length < 3) {
        return $result; 
    }
    
    sort($threeSum); 
    
    for ($i = 0; $i < $length - 2; $i++) {
        if ($i > 0 && $threeSum[$i] === $threeSum[$i - 1]) {
            continue;
        }
        
        $left = $i + 1;
        $right = $length - 1;
        
        while ($left < $right) {
            $sum = $threeSum[$i] + $threeSum[$left] + $threeSum[$right];
            
            if ($sum === 0) {
                $result[] = [$threeSum[$i], $threeSum[$left], $threeSum[$right]];
                
                while ($left < $right && $threeSum[$left] === $threeSum[$left + 1]) {
                    $left++;
                }
                while ($left < $right && $threeSum[$right] === $threeSum[$right - 1]) {
                    $right--;
                }
                
                $left++;
                $right--;
            } elseif ($sum < 0) {
                $left++;
            } else {
                $right--;
            }
        }
    }
    
    return $result;

  }
}

$three = new ThreeSum();
print_r($three->threeSum([-1,0,1,2,-1,-4]));