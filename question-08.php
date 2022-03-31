<!--author: Lu / page 08-->
<?php include "includes/head.php"; ?>

<!-- data collection-->
<?php include "includes/data-collector.php"; ?>

<!--header-->
<?php include "includes/header.php"; ?>

<!--progress bar-->
<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="progress">
                <!--***progression % / done with calculator-->
                <div class="progress-bar" style="width:53%">53%</div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</div>
<div>
    <div class="container-fluid bg-warning text-dark mt-3">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <!--***question title-->
                    <h1 id="questionTitle">Frage 8 von 15</h1>
                    <!--***question text-->
                    <p id="questionWording">Nach dem Umtrunk mit deinen Nachbarn überkommt dich der Hunger – ein Glück: Hast du noch ein Mutschli Zuhause! Doch was ist das überhaupt?
                    <p>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
    <!-- form-->
    <div class="container">
        <!--***form action question page - assign next-->
        <!--**value 0 or 1 - assing 1 for corretc answer-->
        <form action="question-09.php" method="post" onsubmit="return validateQuestion();">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10" id="answerPanel">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="single-choice-1" name="single-choice" value="0">
                        <label class="form-check-label" for="single-choice-1">
                            <p>Eine Suppe</p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="single-choice-2" name="single-choice" value="1">
                        <label class="form-check-label" for="single-choice-2">
                            <p>Ein Brötchen</p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="single-choice-3" name="single-choice" value="0">
                        <label class="form-check-label" for="single-choice-3">
                            <p>Ein Müsliriegel</p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="single-choice-4" name="single-choice" value="0">
                        <label class="form-check-label" for="single-choice-4">
                            <p>Eine Brezel</p>
                        </label>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div>
                            <!--***hidden info button - assign current page-->
                            <input type="hidden" name="lastPageID" value="question-08">
                            <input type="hidden" id="achievedPoints" name="achievedPoints">
                            <p id="validation-warning" class="warning"></p>
                            <button type="submit" class="btn btn-outline-danger buttons">Weiter</button>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include "includes/footer.php"; ?>