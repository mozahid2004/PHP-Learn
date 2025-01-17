<?php

$x = 100;
$y = 60;
function test()
{
  // $x = 100;
  global $x, $y;
  echo "Variable x inside funtion $x <br/>";
  $x = $x + $y;
  echo "Variable x inside funtion after addition $x <br/>";
}

test();
echo "Variable x outside funtion " . $x;

?>