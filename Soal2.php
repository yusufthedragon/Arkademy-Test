<?php
/**
 * Get dates between two dates.
 *
 * @param  string  $firstDate
 * @param  string  $secondDate
 * @return string
 */
function betweenDates($firstDate, $secondDate)
{
    $firstDate = new DateTime($firstDate);
    $secondDate = new DateTime($secondDate);
    $dates = array();
    
    while ($firstDate <= $secondDate) {
        $dates[] = $firstDate->format('Y-m-d');
        $firstDate->add(new DateInterval('P1D'));
    }

    return implode(', ', $dates);
}

echo betweenDates('2019-11-01', '2019-11-05');
