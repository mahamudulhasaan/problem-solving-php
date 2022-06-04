<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Problm slove</title>
</head>

<body>

    <!-- answare 1 -->
    <?php
    echo "<h3> ===========> Ans..01 =========><h3/>";
    $valu = 56;
    echo "Your valu is : $valu <br>";
    echo "<h3> ===========> Ans..02 =========><h3/>";
    $revers = "Bangladesh freedome country";
    echo strrev($revers);

    echo "<h3> ===========> Ans..03 =========><h3/>";
    $replece = "CIT";
    echo str_replace("Hallo", "CIT", "Hallo Bangladesh");

    // echo "<h3>Ans..04 <h3/>";

    echo "<h3> ===========> Ans..05 =========><h3/>";
    $num1 = 54;
    $num2 = 38;

    echo $num1 + $num2 . "<br>";
    echo $num1 * $num2 . "<br>";
    echo $num1 / $num2 . "<br>";
    echo $num1 - $num2  . "<br>";

    echo "<h3> ===========> Ans..06 =========> <h3/>";
    $remaider = 43;
    $divison = 5;
    $remainder = $remaider % $divison;
    echo "Remainder is valu : $remainder";

    echo "<h3> ===========> Ans..07 =========> <h3/>";

    $chalee = "Male";
    $mheya = "Female";

    if ($chalee == "Male") {
        echo "You are a male";
    } elseif ($mheya == "Female") {
        echo " You are female";
    } else {
        echo "Something else";
    }

    echo "<h3> ===========> Ans..08 =========> <h3/>";


    $myNum = 38;

    if ($myNum % 2 == 0) {
        echo "This is evan number :  $myNum";
    } elseif ($myNum % 2 == 1) {
        echo "This is odd number :  $myNum";
    } else {
        echo "Somthing else";
    }

    echo "<h3> ===========> Ans..09 =========> <h3/>";

    $ami = 1;
    while ($ami <= 10) {
        echo " $ami |";
        $ami++;
    }

    echo "<h3> ===========> Ans..10 =========> <h3/>";
    $vowel = "a";
    switch ($vowel) {
        case "a":
            echo "$vowel your input is vowel";
            break;
        case "e":
            echo "$vowel your input is vowel";
            break;
        case "i":
            echo "$vowel your input is vowel";
            break;
        case "o":
            echo "$vowel your input is vowel";
            break;
        case "u":
            echo "$vowel your input is vowel";
            break;
        default:
            echo "your input is consonent ( $vowel )";
    }

    echo "<h3> ===========> Ans..11 =========> <h3/>";

    for ($x = 2; $x <= 10; $x += 2) {
        echo "The evan number is: $x@ <br>";
    }

    echo "<h3> ===========> Ans..12 =========> <h3/>";
    for ($x = 1; $x <= 9; $x += 2) {
        echo "$x <br>";
    }

    echo "<h3> ===========> Ans..13 =========> <h3/>";

    $ghun = 18;
    for ($h = 1; $h <= 10; $h++) {
        $namta = $ghun * $h ;
        echo "$ghun * $h = $namta <br>";
    }


    ?>


</body>

</html>