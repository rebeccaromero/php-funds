<html>
<?php
$numbers = [1, 2, 5, 10, 255, 3];
$sum = 0;

for ($i=0; $i<= count($numbers)-1; $i++) {
    $sum += $numbers[$i];
};

$average = $sum / count($numbers);
echo $average;
?>
</html>