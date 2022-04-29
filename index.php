<?php

$T = Null;
$G = Null;
$O = Null;

$line = Null;

while (!(1<= $T and $T<=100000)) {
  $T = readline('Number of Test Cases: ');
}

foreach (range(0, $T-1) as $key => $value) {
  $N = Null;
  $G=Null;
  $O=Null;
  $G_count = Null;
  $O_count = Null;
  $G_powers = Null;
  $O_powers = Null;
  
  while ( $T != Null and  $N == Null or( !(1<= $N and $N<=100000))) {
    $N =  readline('Number of members per team: ');
  }
  while(($G==Null) or ($G_count != $N or $G_count == Null)){
    $G = readline('Power of Beyblades of team G-Revolution seperated by spaces: ');
    $G_powers = explode(' ', $G);
    $G_count = count($G_powers);
    sort($G_powers);
  }
  
  while(($O==Null) or ($O_count != $N or $O_count == Null)){
    $O = readline('Power of Beyblades of team Opponent seperated by spaces: ');
    $O_powers = explode(' ', $O);
    $O_count = count($O_powers);
    sort($O_powers);
  }
  if ($G_count!=$O_count) {
    echo "Both team members should be of equal count";
  }
  
  $win_count = 0;
  
  foreach (range(0, $G_count - 1) as $value) {
    if ($G_powers[$value] > $O_powers[$value]) {
      $win_count += 1;
    }
  }
  
  echo ('G-Revolution Wins '.$win_count ?? '0'.' matches');
}

?>