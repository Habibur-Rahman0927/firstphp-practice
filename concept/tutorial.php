<?php

/* $str = "Hello & Welcome php";
$num = 5;
$float = 7.8;

echo  $str ;
echo "<h1>" . $num . "</h1>";
echo "<h1>" . $float . "</h1>"; */

/* $laptop_brand = array("HP", 'Lenovo','Asus', 'Dell');
echo var_dump($laptop_brand[1]); */

/* define("laptops", "Hp, Lenovo and Asus");
echo laptops; */

/* define("laptops", ["Hp", "Lenovo and"," Asus"]);
echo laptops[2]; */

/* 
$var = 4;
if($var % 2 === 0 && $var % 3 === 0){
    echo "Divisible by both";
}elseif($var % 2 == 0){
    echo "Divisible by 2";
}else{
    echo "The condition did not meet";
} */
/* 
$level = 3;
switch ($level) {
    case 1:
        # code...
        echo "You are playing at EASY level";
        break;
    case 2:
        # code...
        echo "You are playing at MODERATE level";
        break;
    case 3:
        # code...
        echo "You are playing at HARD level";
        break;
    case 4:
        # code...
        echo "You are playing at EXTREME level";
        break;
    
    default:
        # code...
        echo "Invalid Input";
        break;
}
 */

/* $var = 2;
 while ($var <= 10) {
     # code...
     echo "Number: $var <br>";
     $var++;
 }
 */

/* $var = 2;
 do{
     echo "Number : $var  <br>";
     $var++;
 }while($var <= 10);
 */
/* 
 for ($var=1; $var < 6; $var++) { 
    echo "Number : $var <br>";
 }
 */

 function name(){
     echo "My name is Habib <br>";
 }
 name();

 function looping(){
     for ($i=0; $i < 9; $i++) { 
         echo "Number : $i <br>";
     }
 }

 looping();
?>