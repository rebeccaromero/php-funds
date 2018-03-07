<html>
    <?php
    $users = array();
    $users['first_name'] = "Michael";
    $users['last_name'] = "Choi";

    function display_array($arr){
        $length = count($arr);
        echo "<p>There are $length keys in this array: </p>";
        foreach($arr as $key => $value) {
            echo $key . "<br/>";
        }
        foreach($arr as $key => $value){
         echo "The value in the key '$key' is '$value'. <br/>";
        }
    }
    
    echo display_array($users);
    ?>
</html>