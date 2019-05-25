<?php

/**
 * Return Biodata based on its parameters.
 *
 * @param  string  $name
 * @param  string  $address
 * @param  array  $hobbies
 * @param  boolean  $is_married
 * @param  array  $school
 * @param  array  $skills
 * @return void
 */
function returnBiodata($name, $address, $hobbies, $is_married, $school, $skills)
{
    return json_encode([
        'name' => $name,
        'address' => $address,
        'hobbies' => $hobbies,
        'is_married' => $is_married,
        'school' => $school,
        'skills' => $skills
    ]);
}

$name = 'Yusuf Ardi Bachtiar';
$address = 'Depok';
$hobbies = ['Do good.', 'Do great.', 'Do best.'];
$is_married = false;
$school = ['highschool' => 'SMK Setia Negara', 'University' => 'Gunadarma University'];
$skills = [
    [
        'name' => 'PHP',
        'score' => '60'
    ],
    [
        'name' => 'Javascript',
        'score' => '50'
    ],
    [
        'name' => 'MySQL',
        'score' => '40'
    ]
];

echo returnBiodata($name, $address, $hobbies, $is_married, $school, $skills);
