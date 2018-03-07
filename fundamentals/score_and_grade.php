<html>
    <?php
    function get_scores() {
        for($i=0; $i<=100; $i++) {
            $score = rand(50,100);
            // $grades = array('D', 'C', 'B', 'A');
            // $grade = 0;
            // switch($score)
            // {
                //     case $score < 70:
                //         $grade = 0;
                //     break;
                //     case $score >= 70 && $score < 80:
                //         $grade = 1;
                //     break;
                //     case $score >= 80 && $score < 90:
                //         $grade = 2;
                //     break;
                //     case $score >= 90 && $score <= 100:
                //         $grade = 3;
                // }
                // echo "<h1>Score: $score</h1><h2>Grade: $grades[$grade]</h2>";
                
                echo "<h1>Score: $score</h1>";
                if($score < 70){
                    echo "<h2>Grade: D</h2>";
                } elseif($score >= 70 && $score < 80){
                    echo "<h2>Grade: C</h2>";
                } elseif($score >= 80 && $score < 90){
                    echo "<h2>Grade: B</h2>";
                } elseif ($score >= 90 && $score <= 100){
                    echo "<h2>Grade: A</h2>";
                }
        }
    }

    echo get_scores();

    ?>
</html>