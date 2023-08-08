<?php 

/**
 * addNumbers
 * 
 * Function will read and summarize all given argument
 * 
 * @numbers Number Any number of arguments
 * 
 * @return Number Result of the arguments sum
 * 
 * - Giving 0 argument will return 0
 * - Giving any other type of data will be translated to integer value and added to the final result
 * - NULL, undefined and any other value will be treated as 0
 */
function addNumbers(...$numbers)
{
    $result = 0;

    foreach($numbers as $number) 
    {
        $subNumber = empty($number) ? 0 : intval($number);
        $result += $subNumber;
    }

    return $result;
}
