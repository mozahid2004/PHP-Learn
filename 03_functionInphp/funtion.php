<?php

// 1. Normal function***************

function myName()
{
  echo "Mozahid<br/>";
}

myName();

// 2. Funtion with ParaMeters**********
function sum($a, $b)
{
  echo "$a + $b <br/>";
}

sum(100, 99);
// second Example
// function showName($name, $last)
// {
//   echo "your name is $name <br/>  your Last name is $last";
// }

// showName("SAHIL", "Khan");


// 3.Function with Returning Value*****
function showName($name, $last)
{
  return "your name is $name <br/>  your Last name is $last <br/>";
}

$printName = showName("SAHIL", "Khan");
echo $printName;
// Another Example;

function sumMarks($math, $sci, $polity){

  $sum = $math + $sci + $polity;

  return $sum;
}

$printMarks = sumMarks(100,20,100);

function Percentage($printMarks){
    $per = $printMarks/3;
    return $per;
    // echo $per;
}

$perReturn = Percentage($printMarks);
echo $perReturn."%<br/>";
echo $printMarks."<br/>";


// 4.Function Argument By refRence*****

function first($num){
  $num += 5;
}

function second(&$num){
  //it take the refrance and change the original value;
  $num += 9;
}

$number = 10;

first($number);
echo "Oriinal Value is $number<br/>";

second($number);
echo "Oriinal Value is $number<br/>";

// 5. Variable Function***************

function wow(){
  echo "PHP Folder<br/>";

}

$func = "wow";
$func(); // we can passs argument like other funtion


//Annomymous fuction are same like this

// 6.Recursive Funtion **************

 function display($n){
  // echo $n."<br/>";
  if($n==0){
    return 1;
  }else{
    return($n * display($n - 1));
  }
 }

 echo display(10);

?>