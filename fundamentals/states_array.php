<html>
    <select name="state" id="state-select">
        <?php   
        $states = array('CA', 'WA', 'VA', 'UT', 'AZ');
        foreach($states as $key => $value){
            echo "<option value=$value>$value</option>";
        }
        ?>
    </select>
    <select name="state" id="state-select">
        <?php   
        $states = array('CA', 'WA', 'VA', 'UT', 'AZ');
        for($i=0; $i<=count($states)-1; $i++) {
            echo "<option value=$states[$i]>$states[$i]</option>";
        }
        ?>
    </select>
    <select name="state" id="state-select">
        <?php   
        $states = array('CA', 'WA', 'VA', 'UT', 'AZ');
        array_push($states,'NJ', 'NY', 'DE');
        for($i=0; $i<=count($states)-1; $i++) {
            echo "<option value=$states[$i]>$states[$i]</option>";
        }
        ?>
    </select>
</html>