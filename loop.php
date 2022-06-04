<?php 
$mark = [
    'Math ' => 81 ,
    'Eng ' => 69 ,
    'Bang ' => 55 ,
    'ICT ' => 60 ,
    'Islm ' => -1 ,
] ;
echo '<pre>';
var_dump ($mark) . '<br>';
echo '</pre>' ;

foreach ( $mark as $subject => $mark ) {
    echo 'In ' . $subject . 'You have got = ' . $mark . '<br>';

    if ( $mark > 79 && $mark <= 100) {
          echo  'You have got ' . 'A+ in ' . $subject . '<br>' . '<br>' ;
    } elseif ($mark >= 69 && $mark <= 80 ){
     echo  'You have got ' . 'A in ' . $subject . '<br>' . '<br>' ;
    } elseif ( $mark >= 49 && $mark <= 60  ) {
        echo  'You have got ' . 'B in ' . $subject . '<br>' . '<br>' ;
    } elseif ( $mark >= 34 && $mark <= 40){
        echo  'You have got ' . 'C in ' . $subject . '<br>' . '<br>' ;
    } elseif ( $mark >= 100 || $mark <= -1) {
         echo "Ivalid valu here pleace input valid valu " ;
    }
     else{
        echo 'You are fail' ;
    }
    
}


?>