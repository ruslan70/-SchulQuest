<!-- ruslan-->

<?php include "includes/head.php"; ?>

<?php include "includes/header.php";?>


<main>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="progress">
                    <div class="progress-bar" style="width:100%">100<%</div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>   
    </div>   
    <!-- Hier kommt noch der Data-Collector-->
    <?php
        include "includes/data-collector.php";
    ?>
    <div>
        <div class="container-fluid bg-warning text-dark mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <h1 id="questionTitle">Frage 15 von 15</h1>
                        <p id="questionWording">Zum Schluss verabschiedest du dich noch von Herrmann. Was sagst du?<p>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="result.php" method="post" onsubmit="return validateQuestion();">       
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10" id="answerPanel">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-1" name="single-choice" value="0">
                            <label class="form-check-label" for="single-choice-1"><p>Arri!</p></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-2"name="single-choice"value="0">
                            <label class="form-check-label" for="single-choice-2"><p>Grüeza!</p></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-3" name="single-choice" value="1">
                            <label class="form-check-label" for="single-choice-3"><p>Ade!</p></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-4" name="single-choice" value="0">
                            <label class="form-check-label" for="single-choice-4"><p>Salut!</p></label>
                        </div>
                        </div> 
                        <div class="col-1"></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div>
                                    <input type="hidden" name="lastPageID" value="question-15">
                                    <input type="hidden" id="achievedPoints" name="achievedPoints">
                                    <p id="validation-warning" class="warning"></p>
                                    <button type="submit" class="btn btn-outline-danger buttons">Weiter</button>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include "includes/footer.php"; ?>