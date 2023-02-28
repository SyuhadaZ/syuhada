<html>
    <head><title></title></head>
    <body>
<?php

/*
 * Simple example of using ifelse, elseif and Ternary operator
 */
$hour = date('G');
$year = date('Y');
//date_default_timezone_set('Asia/Kuala_Lumpur');

if($hour >= 5 && $hour < 12){
    echo "<h1>Good Morning</h1>";
}elseif ($hour >= 12 && $hour < 18){
    echo "<h1>Good Afternoon</h1>";
}elseif ($hour >= 18 && $hour < 22){
    echo "<h1>Good Evening</h1>";
}else{
    echo "<h1>Good Night</h1>";
}

$leapYear = false;

if((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)){
  $leapYear = true;    
}

echo "<p>Did you know that $year is " . ($leapYear ? " " : " not ") . "a leap year?</p>";
?>

</body>
</html>
