<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ( $strings as $string ) {
    $vowelCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    for ( $i = 0; $i < strlen( $string ); $i++ ) {
        if ( in_array( $string[$i], $vowels ) ) {
            $vowelCount++;
        }
    }

    $reversedString = strrev( $string );

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}