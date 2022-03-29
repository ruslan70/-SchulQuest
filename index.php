<!--Autor: Lu-->
<?php
include "includes/head.php";
?>

<!-- Author: Chantal just the section php -->
<?php session_start();
session_destroy(); //um den cache zu leeren
?>
<!-- Ende Author: Chantal -->



<body>

    <?php
    include "includes/header.php";
    ?>

    <div class=".container-fluid p-0.5 my-0.5 mb-5">
        <div class="container col-9">

            <h1> Einführung</h1>
            <p>
                In diesem Quest wird dein Wissen in Dialekt vs.
                Hochdeutsch geprüft. Für Schweizer werden die Fragen
                einfach zu lösen sein, während nur Deutschsprechende etwas
                an ihre Grenzen kommen und Deutschlernende wohl ins Schwitzen.
                Der Quest beinhaltet 15 Fragen und dauert 10 bis 15 Minuten.
                Danach kommt gleich dein Ergebnis.
                <br><br>
                Sprichst du Dialekt?
                <br>
                Teste dich jetzt.
            </p>
                <form action="question-01.php" method="post">
                    <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" id=startButton class="btn btn-outline-danger">Start</button>
                    </div>
                </form>  
            <div>
        </div>
    </div>

    <?php
    include "includes/footer.php";
    ?>

</body>

</html>