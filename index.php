<?php

    $cars = array(
        array("BMW", "Germany", 200),
        array("Ferrari", "Italy", 999),
        array("Golf 2", "Holand", 2)
    );

    echo $cars[0][0] . " :Origjina:". $cars[0][1]. "Kosto: ". $cars[0][2]. ".<br>";
    echo $cars[1][0] . " :Origjina:". $cars[1][1]. "Kosto: ". $cars[1][2]. ".<br>";
    echo $cars[2][0] . " :Origjina:". $cars[2][1]. "Kosto: ". $cars[2][2]. ".<br>";

    for($row=0; $row<3; $row++){
        echo "<p><b> Row number $row </b></p>";
        echo "<ul>";
        for($col = 0; $col<3; $col++){
            echo "<li>". $cars[$row][$col]. "</li>";
        }
        echo "</ul>";
    }
    
    $tabelarr = array(
        array(1,2,3),
        array(1,2,3),
        array(1,2,3)
    );

    for($i=1; $i<4; $i++){
        for($j=1; $j<4; $j++){
            echo "Array: $i Element: $j <br>"; 
            }
            echo "<br>";
    }


    for($i=1; $i<5; $i++){
        for($j=1;$j<$i; $j++){
            echo " *";
        }
        echo "<br>";
    }

    $notat = array(
        "Matematike" => "5",
        "Fizik" => "5",
        "BIO" => "3",
        "Kimi" => "4",
    );

    foreach($notat as $landa => $nota){
        echo "Landa".$landa. ", Nota:". $nota;
        echo "<br>";
    }
?>