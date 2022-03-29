<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="/js/validation.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Seite 05</title>
</head>

<body>
    <?php include 'inc/data-collector.php'; ?>

    <form action="question-06.php" method="post" onsubmit="return validateQuestion('single-choice-0', 'single-choice');">
        <div class="container-fluid  bg-warning text-center text-dark">

            <div class="container mt-3">
                <h2>Progress Bar With Label</h2>
                <div class="progress">
                    <div class="progress-bar" style="width:833,3%">33,3%</div>
                </div>
            </div>

            <div class="container pt-3 col-12">
                <h5>Frage 5 von 15</h5>
                <h3>Autos müssen in der Schweiz natürlich auch zugelassen sein. Welchen Status hat ein
                    zugelassenes Auto in der Schweiz?
                </h3>
                <p class="spacer"></p>
            </div>

        </div>

        <div class="container-fluid bg-primary text-center text-warning">
            <div class="container pt-5 col-12">

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="0">
                    <label class="form-check-label" for="single-choice-1">
                        <h3>Angestellt</h3>
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="single-choice" id="single-choice-2" value="1">
                    <label class="form-check-label" for="single-choice-2">
                        <h3>Immatrikuliert</h3>
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="single-choice" id="single-choice-3" value="0">
                    <label class="form-check-label" for="single-choice-3">
                        <h3>Geparkt</h3>
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="single-choice" id="single-choice-4" value="0">
                    <label class="form-check-label" for="single-choice-4">
                        <h3>Geöffnet</h3>
                    </label>
                </div>


            </div>
            <input type="hidden" name="lastPageID" value="question-05">
            <p id="validation-warning" class="warning"></p>

            <a class="btn btn-warning" href="index.php" role="button">❮ Zurück</a>
            <input class="btn btn-warning" type="submit" value="Weiter ❯">
            <p class="spacer"></p>

        </div>
    </form>
</body>

</html>