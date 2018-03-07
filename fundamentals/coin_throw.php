<html>
    <?php   
    $heads = 0;
    $tails = 0;
    for($i=1; $i<=5000; $i++) {
        $odds= mt_rand(1,50);
        if($odds <= 25){
            $heads += 1;
            echo "<p>Attempt #$i: Throwing a coin... It's a head! Got ($heads) heads so far and ($tails) tails so far.</p>";
        } else if ($odds >= 26) {
            $tails += 1;
            echo "<p>Attempt #$i: Throwing a coin... It's a tail! Got ($heads) heads so far and ($tails) tails so far.</p>";
        }
    }
    echo "<p>Ending the program - Thank you!</p>";
    ?>
</html>