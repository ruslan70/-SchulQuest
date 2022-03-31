<?php

$questionPageNames = [
    
    "question-13",
    "question-14",
    "question-15",
    
];

$totalPoints = 0;
$pageNum = count($questionPageNames);

for ($i = 0; $i < $pageNum; $i++) {
    $lastPageID = $questionPageNames[$i];

    if (isset($_SESSION[$lastPageID])) {
        // Wir holen die Daten zu $lastPageID aus $_SESSION.
        // data-collector.php: $_SESSION[$lastPageID] = $_POST;
        $pageData = $_SESSION[$lastPageID];
        $achievedPoints = $pageData["achievedPoints"];

        // zu $totalPoints zusammenrechnen.
        $totalPoints = $totalPoints + intval($achievedPoints);
    }
}

    // DEVONLY
    echo "\ totalPoints = $totalPoints<br>";
    
    
    
     /* 
    "question-01",
    "question-02",
    "question-03",
    "question-04",
    "question-05",
    "question-06",
    "question-07",
    "question-08",
    "question-09",
    "question-10",
    "question-11",
    "question-12",

    */












/*

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

}*/

?>