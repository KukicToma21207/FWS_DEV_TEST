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
        // If number is null, undefined, empty in any means it is 0 so we skip it
        if(empty($number))
        {
            continue;
        }

        // If number is actually an array of numbers lets count for all of them
        if(is_array($number))
        {
            foreach($number as $subNumber)
            {
                $result += intval($subNumber);
            }

            continue;
        }

        // For regular values just add them to the sum
        $result += intval($number);
    }

    return $result;
}
