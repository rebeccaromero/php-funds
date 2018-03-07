<html>
<?php
$A = array(2,4,10,16);
function multiply($arr, $factor)
{
  for($i=0; $i< count($arr); $i++) {
      $arr[$i] *= $factor;
  }
  return $arr;
}
$B = multiply($A, 5);
var_dump($B);
?>
</html>

<!-- part 1
$A = array(2,4,10,16);
function multiply($arr)
{
  for($i=0; $i< count($arr); $i++) {
      $arr[$i] *= 5;
  }
  return $arr;
}
$B = multiply($A);
var_dump($B); // [10,20,50,80] -->