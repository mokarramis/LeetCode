<?php

class TwoSum
{
    public function twosum(array $twoSum, int $target)
    {
        $result = [];
        foreach ($twoSum as $key => $value) {
            if (array_key_exists($target - $value, $result)) {
              return [$key, $result[$target - $value]];
            }
            $result[$value] = $key;
        }

        return false;
    }
}

$arr = [2, 9, 11, 7];
$target = 9;
$twoSum = new TwoSum();
print_r($twoSum->twosum($arr, $target));
