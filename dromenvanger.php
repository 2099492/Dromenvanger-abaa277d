<?php

$array = array();

echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;
$input1 = readline();

if ($input1 != is_numeric($input1)) {
  echo $input1 . "is geen getal";
  exit;
}

for ($i=0; $i <$input1; $i++) {

  $input2 = readline("Wat is jouw naam? ");

   $input3 = readline("Hoeveel dromen ga je opgeven? ");

     $array[$input2] = array();

   for ($f=0; $f <$input3 ; $f++) {
     echo "Wat is jouw droom?";
     $input4 = readline();
     array_push($array[$input2],$input4);
   }
}


foreach ($array as $input2 => $droom) {
  foreach ($droom as $input4) {
       echo ($input2. " heeft dit als droom: " . $input4 . PHP_EOL);
  }
}
 ?>
