<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $array1 = (int)implode('', $digitsOfNumber1);
        $array2 = (int)implode('', $digitsOfNumber2);
        
        return $array1 + $array2;
    }

    public function isPalindrome(int $number): bool
    {
        $reverseInt = (string)$number;
        return $reverseInt === strrev($number);
    }

    public function validate(string $input): string
    {
        if($input === ""){
            return 'Required field';
        } elseif((int)$input <= 0){
            return 'Must be a whole number larger than 0';
        } else {
            return '';
        }
    }
}
