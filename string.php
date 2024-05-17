<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string) {
    //Original String store in a $originalString; 
    $originalString = $string;

    //reversed string store in a $reversedString by using strrev()
    $reversedString = strrev($originalString);

    //A vowel count is calculated by checking each character in the original string against an array of vowels.
    $vowels = array('a', 'e', 'i', 'o', 'u');
    $vowelCount = 0;
    $stringLength = strlen($originalString);
    for($i = 0; $i <$stringLength; $i++) {
        if(in_array($originalString[$i], $vowels)) {
            $vowelCount++;
        }
    }
   //The result is displayed using echo.
    echo "Original String: {$originalString}, Vowel Count: {$vowelCount}, Reversed String: {$reversedString}","\n";
}

?>
