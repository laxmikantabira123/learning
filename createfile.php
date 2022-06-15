<?php

function myfunction(){
$veg='onion';
$colour='red';


echo"the vegitable is ".$veg."</br>";
echo"the colour is ".$colour."</br>";
}myfunction();

$veg='onion';
$colour='red';
//print in php
print"the vegitable is ".$veg."</br>";
print"the colour is ".$colour."</br>";


//variables
$name='the lal world';
$game='the cricket for';

echo $name."</br>";
echo $game."</br>";
//intiger
$x=5;
$y=10;
echo $x+$y;
echo $x;
echo $x+$y."</br>";
//float
$x=(10.5);


echo $x."</br>";
//arry data type
$cars=array("bmw","rrt","volba");
var_dump($cars);

echo "</br>";
// null data type

$x = "Hello world!";
$x = null;
var_dump($x);

// string in php

echo strlen("the beautiful world");
echo "</br>";
echo str_word_count("the beautiful world");
echo "</br>";
echo strrev("the beautiful world");
echo "</br>";
echo str_replace("beautiful","wonderful","the beautiful world");

echo "</br>";

//number in php

//intiger

 $x=45896;
 
 var_dump($x);
 
 echo "</br>";

 $x=400.10;
  
  var_dump(is_int($x));
  echo "</br>";
  $x=400;
  
  var_dump(is_int($x));

//float
echo "</br>";
$x=45.10;

var_dump(is_float($x));
echo "</br>";
$x=4588;

var_dump(is_float($x));
echo "</br>";

echo(min("88","77","99","55")) ;
echo "</br>";
echo (max("88","77","99","55"));
echo "</br>";
echo (round(789.550));
echo "</br>";
echo (sqrt(64));
echo "</br>";
echo (abs("-77"));
echo "</br>";

echo (pi());
echo "</br>";
//echo (rand(789.550));
echo "</br>";

//Arithmetic operators

$x=56;
$y=89;
echo $x+$y;
echo "</br>";
$x=56;
$y=89;
echo $x*$y;
echo "</br>";
$x=560;
$y=89;
echo $x-$y;
echo "</br>";
//Assignment operators

$x=5;
$x+=10;
echo $x;
echo "</br>";
$x=15;
$x-=10;
echo $x;
echo "</br>";

for($i=0;$i<10;$i++){
    echo $i;
    echo "</br>";
}

echo "</br>";

for($i=10;$i>0;$i--){
    echo $i;
    echo "</br>";
}
echo "</br>";
$i=0;
while($i<5){
  echo"the world is beautiful";
  $i++;
  echo "</br>";
}
$i=10;
while($i>0){
    echo $i;
    $i--;
    echo "</br>";

}
$i=0;
do{
    echo"the world is beautiful";
    $i++;
    echo "</br>";
}while($i<5);
$i=10;
do{
    echo $i;
    $i--;
    echo "</br>";
}while($i>0);
$x=5;
$y=10;
if(($x==5)&&($y==10) ){
    echo "the assignment id is correct";
}
else{
    echo"that is wrong";
};
echo "</br>";
$x=5;
$y=10;
if(($x==5)&&($y==100) ){
    echo "the assignment id is correct";
}
else{
    echo"that is wrong";
};
echo "</br>";
$x=5;
$y=10;
if(($x==5)||($y==100) ){
    echo "the assignment id is correct";
}
else{
    echo"that is wrong";
};
echo "</br>";
$x=10;
$y=100;
if(($x==11)||($y==101)){
    echo "the assignment id is correct";
}
else{
    echo"that is wrong";
};
echo "</br>";
$x=5;
$y=10;
if(($x==5)||($y==100) ){
    echo "the assignment id is correct";
    
}
echo "</br>";
$colour="while";

switch($colour){
    case "green":
    echo"the colour is green";
    break;

    case "red":
    echo"the colour is red";
    break;
    case "blue":
    echo"the colour is blue";
    break;
    default:
    echo "Your  color is neither red, blue, nor green!";
};
echo "</br>";
$number=array("7","8","9","5","6");
foreach($number as $array){
    echo $array."</br>";
   
}

echo "</br>";
for($i=0;$i<5;$i++){
    if($i==3){
       break;
    }
    echo $i."</br>";
};
echo "</br>";
for($i=0;$i<10;$i++){
    if($i==3){
        continue;
    }
    echo"the number is:$i </br>";
}
echo "</br>";
$colours=array("red","green","blue","pink");
foreach($colours as $array){
    echo $array."</br>";
};
echo "</br>";

$x=10;
$x--;
echo $x;
echo "</br>"; 
$x=10;
$x++;
echo $x; 
echo "</br>";

$cars=array("valvo","maruti","hundai");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++){
    echo$cars[$x];
    echo"</br>";
}


function  realnums($num1){
    $num1=8;

    if ($num1==even){

        echo"this is an even number";
    }
         else if($num1==odd) {
            echo"this is an odd number";
        } else {
            echo"not a number";
        }
        

}


?>
