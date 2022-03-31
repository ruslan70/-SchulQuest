<!--author: Lu / page 05-->
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
                <div class="progress-bar" style="width:33%">33%</div>
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
                    <h1 id="questionTitle">Frage 5 von 15</h1>
                    <!--***question text-->
                    <p id="questionWording">Autos müssen in der Schweiz natürlich auch zugelassen sein.
                        Welchen Status hat ein zugelassenes Auto in der Schweiz?
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
        <form action="question-06.php" method="post" onsubmit="return validateQuestion();">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10" id="answerPanel">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="single-choice-1" name="single-choice" value="0">
                        <label class="form-check-label" for="single-choice-1">
                            <p>Angestellt</p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="single-choice-2" name="single-choice" value="1">
                        <label class="form-check-label" for="single-choice-2">
                            <p>Immatrikuliert</p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="single-choice-3" name="single-choice" value="0">
                        <label class="form-check-label" for="single-choice-3">
                            <p>Geparkt</p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="single-choice-4" name="single-choice" value="0">
                        <label class="form-check-label" for="single-choice-4">
                            <p>Geöffnet</p>
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
                            <input type="hidden" name="lastPageID" value="question-05">
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