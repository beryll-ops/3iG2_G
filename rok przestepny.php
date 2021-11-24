<?php
$rok=2024;
if ($rok%4==0 && $rok%100!=0 || $rok%400==0) {
  echo "rok jest przestepny";
}
else {
  echo "rok nie jest przestepny";
}
 ?>
