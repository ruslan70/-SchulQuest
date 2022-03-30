<?php


function printResult() {
    
    evaluateQ1();
    evaluateQ2();
    evaluateQ3();
    evaluateQ4();
    evaluateQ5();
    evaluateQ6();
    evaluateQ7();
    evaluateQ8();
    evaluateQ9();
    evaluateQ10();
   

    if ($totalPoints > 5) {
        echo "<h3>" . "Deine Gesundheit ist im guten Zustand. Weiter so." ."</h3>";

    }
    else {
        echo "<h3>" . "Du sollst deine Lebesweise überdenken, um deine Gesundheit zu verbessern." ."</3>";
 
    }

}

?>