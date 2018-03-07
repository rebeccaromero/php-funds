<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<table>
    <tr>
        <th>&nbsp</th>
        <?php  
        for($i=1; $i<=9; $i++){
            echo "<th>$i</th>";
        }
        ?>
    </tr>
    <?php
    for($j=1; $j<=9; $j++){
        if($j%2 != 0){
            $class = "odd-row";
        } else {
            $class = "even-row";
        }
        echo "<tr class=$class><th>$j</th>";
        for($k=1; $k<=9; $k++){
            $product = $j * $k;
            echo "<td>$product</td>";
        };
        echo "</tr>";
    }
    ?>
</table>
</html>