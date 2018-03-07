<html>
    <?php   
    function get_max_and_min($arr){
        for($i=1; $i<=count($arr)-1; $i++){
            $max = $arr[0];
            $min = $arr[0];
            if ($arr[$i] < $min){
                $min = $arr[$i];
            } else if ($arr[$i] > $max){
                $max = $arr[$i];
            }
        }
        return array("min" => $min, "max" => $max);
        // echo ("min: $min</br>  max: $max");
    }
    $sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 
    $output = get_max_and_min($sample); 
    var_dump($output); 
    ?>
</html>