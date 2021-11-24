<?php
  $suma=0;
  $a=0;
  $b=0;
  $c=0;
  $liczba=0;
  for ($i=1; $i<=1000; $i++) {
    $liczba=rand(1,10);
    $suma=$suma+$liczba;

    if ($i=1) {
      $a=$liczba;
    }
    if ($i=2) {
      $b=$liczba;
    }
  }
  echo $b;

  echo "suma wylosowanych liczb: ".$suma."<br>";
 ?>
