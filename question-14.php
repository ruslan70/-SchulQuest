<!-- ruslan-->

<?php
include "includes/head.php";
?>

<body>

    <?php
    include "includes/header.php";
    
    ?>
    <div class="container">
                
                <div class="progress">
                    <div class="progress-bar" style="width:93%">93%</div>
                </div>
    </div>

    <div class="container pt-3 col-12">
    <h5>Frage 14 von 15</h5>
                    <h3>Während des Gesprächs sagt dein Freund: "Los emau!" Wozu fordert Herrmann dich damit auf?</h3>

                    <p class="spacer"></p>
                </div>
    

            <div class="d-grid gap-2 col-6 mx-auto mt-5">
            <div class="container-fluid p-2 my-2">
        <div class="container col-9">
            
        <form action="question-15.php" method="post" onsubmit="return validateQuestion();">
                <div class="form-check">
                <input type="radio" class="form-check-input" id="single-choice-1" name="single-choice" value="1">
                <label class="form-check-label" for="single-choice-1"><h3>Hör mir zu!</h3></label>
                </div>

                <div class="form-check">
                <input type="radio" class="form-check-input" id="single-choice-2"name="single-choice"value="0">
                <label class="form-check-label" for="single-choice-2"><h3>Schau dir das an!</h3></label>
                </div>

                <div class="form-check">
                <input type="radio" class="form-check-input" id="single-choice-3" name="single-choice" value="0">
                <label class="form-check-label" for="single-choice-3"><h3>Geh jetzt bitte!</h3></label>
                
                </div>

                <div class="form-check">
                <input type="radio" class="form-check-input" id="single-choice-4" name="single-choice" value="0">
                <label class="form-check-label" for="single-choice-4"><h3>Steh auf!</h3></label>
                
                </div>

            <input type="hidden" name="lastPageID" value="question-14">
            <input type="hidden" id="achivedPoints" name="achivePoints">
            <p id="validation-warning" class="warning"></p>
            <button type="submit" class="btn btn-outline-danger">Weiter ></button>  
                
            </form>

            
            </div>
        </div>
    </div>

    <?php
    include "includes/footer.php";
    include 'includes/data-collector.php';
    ?>

</body>

</html>