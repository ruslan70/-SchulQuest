<!--Autor: Lu-->
<?php
include "includes/head.php";
?>

<body>

    <?php
    include "includes/header.php";
    ?>

    <div class=".container-fluid p-2 my-2">
        <div class="container col-9">
            <p style='text-align: left;'>
            <h5>Ergebnisse</h5>
                   
                    <h3>Vielen Dahk fürs Mitmachen</h3>
                <br><br>
                <?php
                   
                    printResult();
                    
                ?>
            </p>
            <div class="d-grid gap-2 col-6 mx-auto mt-5">
            <button type="button" class="btn btn-outline-danger">Start</button>
            </div>
        </div>
    </div>

    <?php
    include "includes/footer.php";
    ?>

</body>

</html>