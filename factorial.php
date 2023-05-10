<?php
  function factorial($n) {
    if($n <= 1) {
      return 1;
    } else {
      return $n * factorial($n-1);
    }
  }
  //todo test to
  // TODO: Ticket Num 12345
  $number = 5;
  echo "Die Fakultät von " . $number . " ist " . factorial($number) . ".";
?>
