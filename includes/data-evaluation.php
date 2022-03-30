
<?php //author: Chantal Genoud 

// Hier wird die Variable totalPoints mit einem Ausgangswert von 0 definiert
$totalPoints = 0;

// Hier holen wir den Wert aus der Frage 1 (Achtung, wie sind die Files beschriftet!)
$post = $_SESSION['question-01'];
$valueQuestion1 = $post['single-choice']; // Hier kommt die NAME, die sollte gleich sein!

//Der Wert wid hier angezeigt, bei uns ist es 0 oder 1
echo "der Wert aus Frage eins ist $valueQuestion1. ";

if ($valueQuestion1 == "1") {
    $totalPoints += 1;
}

?>
