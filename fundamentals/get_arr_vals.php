<html>
    <ul>
    <?php

    function print_lists($arr){
        for($i=0; $i< count($arr); $i++) {
            echo "<li>$arr[$i]</li>";
        }
    }
    $A = array(2,3,'hello');
    echo print_lists($A);
    ?>
    </ul>
</html>