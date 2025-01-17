<?php

  // $animal = array("Lion","cat","dog","Tiger","Elephant");
  $animal = ["Lion","cat","dog","Tiger","Elephant"];

  echo $animal[3];

  echo "<pre>";
    print_r($animal);
  echo "</pre>";


  echo "<ul>";
  for($i=0 ; $i < 5; $i++){
    echo "<li>$animal[$i]</li>";
  }
  echo "</ul>";




?>