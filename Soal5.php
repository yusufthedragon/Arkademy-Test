<?php
/**
 * Change character on string with the new one.
 *
 * @param  string  $string
 * @param  string  $oldChar
 * @param  string  $newChar
 * @return string
 */
function changeWord($string, $oldChar, $newChar) {
    $result = '';

    for ($i = 0; $i < strlen($string); $i++) {
        $result .= $string[$i] == $oldChar ? $newChar : $string[$i];
    }

    return $result;
}

echo changeWord("purwakarta", 'a', 'o');