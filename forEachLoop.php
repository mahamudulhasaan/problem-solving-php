
<?php

$person = [
    'Bangla ' => 66,
    'Eng ' => 88,
    'Math ' => 77,
    'Islam ' => 80,
    'ICT ' => 52,
];

echo '<pre>';
echo var_dump($person);
echo '</pre>';

foreach ($person as $sub => $person) {
    echo 'In ' . $sub . 'You got ' . $person . '<br>';

    if ($person >= 80 && $person <= 100) {
        echo "Your GPA (A+)" . '<br>';
    } elseif ($person >= 70 && $person <= 79) {
        echo 'Your GPA (A)'  . '<br>';
    } elseif ($person >= 50 && $person <= 69) {
        echo 'Your GPA (B)'  . '<br>';
    } elseif ($person >= 34 && $person <= 50) {
        echo 'Your GPA (C)'  . '<br>';
    } elseif ($person >= 0 && $person <= 33) {
        echo 'Your GPA (F)'  . '<br>';
    } elseif ($person >= 100) {
        echo 'Your Valu is wrong'  . '<br>';
    } elseif ($person <= -1) {
        echo 'Your Valu is wrong'  . '<br>';
    } else {
        echo 'Input you valu first...';
    }
}


?>