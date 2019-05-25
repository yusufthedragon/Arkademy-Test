<?php
/**
 * Print a pattern based on its width.
 *
 * @param  integer  $width
 * @return string
 */
function cetakGambar($width) {
    if ($width % 2 == 0) exit();
    $middle = round($width / 2);
    $result = '';

    for ($i = 1; $i <= $width; $i++) {
        for ($j = 1; $j <= $width; $j++) {
            $print = $i == 1 || $j == $middle || $i == $width ? 'x' : '=';
            $result .= $print.'&emsp;';
        }

        $result .= '<br>';
    }

    return $result;
}

echo cetakGambar(5);