<?php
include "includes/head.php";
?>

<body>

    <?php
    include "includes/header.php";
    ?>
    <div class="container pt-3 col-12">
        <h5>Frage 15 von 15</h5>
        <h3>Zum Schluss verabschiedest du dich noch von Herrmann. Was sagst du?</h3>

                    <p class="spacer"></p>
                </div>
    

            <div class="d-grid gap-2 col-6 mx-auto mt-5">
            <div class="container-fluid p-2 my-2">
        <div class="container col-9">
            
        <form action="result.php" method="post" onsubmit="return validateQuestion('single-choice-0', 'single-choice');">
                <div class="form-check">
                <input type="radio" class="form-check-input" id="single-choice-1" name="single-choice" value="1">
                <label class="form-check-label" for="single-choice-1"><h3>Arri!</h3></label>
                </div>

                <div class="form-check">
                <input type="radio" class="form-check-input" id="single-choice-2"name="single-choice"value="0">
                <label class="form-check-label" for="single-choice-2"><h3>Grüeza!</h3></label>
                </div>

                <div class="form-check">
                <input type="radio" class="form-check-input" id="single-choice-3" name="single-choice" value="0">
                <label class="form-check-label" for="single-choice-3"><h3>Ade!</h3></label>
                
                </div>

                <div class="form-check">
                <input type="radio" class="form-check-input" id="single-choice-4" name="single-choice" value="0">
                <label class="form-check-label" for="single-choice-4"><h3>Salut!</h3></label>
                
                </div>
                
            </form>

            <button type="button" class="btn btn-outline-danger">Weiter ></button>
            </div>
        </div>
    </div>

    <?php
    include "includes/footer.php";
    ?>

</body>

</html>