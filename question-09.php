<?php include "includes/head.php";?>
<?php include "includes/header.php";?>

<!-- Hier kommt noch der Data-Collector-->

<!--author: chantal.genoud-->

<form action="question-09.php" method="post" onsubmit="return validateQuestion('single-choice-0', 'single-choice');">       
    <div class="container-fluid  bg-warning text-dark">
        <div class="container pt-3 col-12">
            <h1>Frage 9</h1>
            <p>Auf dein Brötchen schmierst du ein bisschen Butter. Was sagen die Schweizer dazu?<p>
        </div>
    </div>

    <div class = "container">
                <!--<div class=".container-fluid p-0.5 my-0.5 mb-5">-->
        <div class="row">
            <div class="col-9">
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="single-choice-1" name="single-choice" value="0">
                    <label class="form-check-label" for="single-choice-1"><h3>Kopfhörer</h3></label>
                </div>

                <div class="form-check">
                    <input type="radio" class="form-check-input" id="single-choice-2"name="single-choice"value="1">
                    <label class="form-check-label" for="single-choice-2"><h3>Hausschuhe</h3></label>
                </div>

                <div class="form-check">
                    <input type="radio" class="form-check-input" id="single-choice-3" name="single-choice" value="0">
                    <label class="form-check-label" for="single-choice-3"><h3>Kontaktlinsen</h3></label>
                </div>

                <div class="form-check">
                    <input type="radio" class="form-check-input" id="single-choice-4" name="single-choice" value="0">
                    <label class="form-check-label" for="single-choice-4"><h3>Handschuhe</h3></label>
                </div>
            </div>  

            <div class="col-3">
                <input type="hidden" name="lastPageID" value="question-9">
                <p id="validation-warning" class="warning"></p>              

            <!-- <div class="d-grid gap-2 col-3 mx-auto"> -->
                <button type="submit" id=startButton class="btn btn-outline-danger">Start</button>
            </div>  
        </div>
    </div>
</form>



<?php include "includes/footer.php"; ?>