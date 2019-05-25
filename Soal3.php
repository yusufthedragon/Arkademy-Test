<?php
/**
 * Count vowels in a string.
 *
 * @param  string  $string
 * @return integer
 */
function countVowels($string) {
    $a = substr_count($string, 'a');
    $i = substr_count($string, 'i');
    $u = substr_count($string, 'u');
    $e = substr_count($string, 'e');
    $o = substr_count($string, 'o');

    return $a + $i + $u + $e + $o;
}

echo countVowels('Programmer');