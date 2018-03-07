<html>
    <?php  
    function draw_stars($arr){
        for($i=0; $i<count($arr); $i++){
            if(is_int($arr[$i])){
                $stars = "";
                for($j=0; $j<$arr[$i]; $j++){
                    $stars .= "*";
                }
                echo "$stars</br>";
            } else if(is_string($arr[$i])){
                $char = "";
                for($k=0; $k<strlen($arr[$i]); $k++){
                    $char .= $arr[$i][0];
                }
                echo "$char</br>";
            }

        }
    }
    $x = array(4, 6, 1, 3, 5, 7, 25);
    $y = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
    draw_stars($y);
    ?>
</html>