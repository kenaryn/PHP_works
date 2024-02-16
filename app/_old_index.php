<?php
$age = 29;
  $age += 10;
  echo '<p>I am ' . $age . ' year old.</p>';

try {
  $res_err = intdiv(50, 0);
  echo '<p>50 / 0 = ' . $res_err . '</p>';
  
} catch (DivisionByZeroError $e) {
  echo '"Division by zero" error has been caught.';
}

try {
  $res_good = intdiv(50, 3);
  $remainder = 50 % 3;
  echo '<p>50 / 3 = ' . $res_good . ', rest = '. $remainder . '</p>';
  
} catch (DivisionByZeroError $e) {
  echo 'Caught division by zero error.';
}

$x = 5;
$y = 10;
if ($x > $y) {
  echo '<p>x is greater than y.</p>';
} else {
  echo '<p>x is less than y.</p>';
}

try {
  $result = add_integers(12, 9);
  echo $result;

} catch (Exception $e) {
  echo ('Exception raised:\n'. $e);
  
} finally {
  echo '<p>Using FOR loop:</p>';
  echo '<ul>';
  for ($i = 0; $i <= 16; $i++) {
    echo '<li>2 ^ ' . $i . ' = ' . pow(2, $i) . '</li>';
  }
  echo '</ul>';
  
  echo '<p>Using WHILE loop:</p>';
  echo '<ul>';
  $i = 0;
  while ($i <= 16) {
    echo '<li>2 ^ ' . $i . ' = ' . pow(2, $i) . '</li>';
    $i++;
  }
  echo '</ul>';
}
  
function add_integers(int $x, int $y): int {
  return $x + $y;
}

// Exercice 5 - Duration
$duration = 6700;

function convert_seconds_into_duration (int $duration): array {
  $hours = intdiv($duration, 3600);
  $minutes = intdiv(($duration % 3600), 60);
  $seconds = $duration % 60;
  return [$hours, $minutes, $seconds];
}

?>
<p><?=gmdate("H:i:s", $duration);?></p>
<?php [$h, $m, $s] = convert_seconds_into_duration($duration) ?>
<p><?=$h?>h<?=$m?>m<?=$s?>s</p>'
  
<?php
if (isset($_GET['nb'])) {
  $_GET['nb'];
}


$arr1 = [];
$arr1[] = 3;
array_push($arr1, 9, 27, 81, 243);
// foreach ($arr1 as $key => $val) {
  foreach ($arr1 as $val) {
    echo '<p>'.$val.'</p>';
  }
  
?>