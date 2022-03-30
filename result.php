<!-- ruslan-->

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
                    
               
                        
                        

                            <input type="hidden" name="lastPageID" value="question-15">
                            <input type="hidden" id="achivedPoints" name="achivePoints">
                            <p id="validation-warning" class="warning"></p>
                            <button type="submit" class="btn btn-outline-danger">Weiter ></button>  
                        
                

           
            </div>
        </div>
    </div>

    <?php
    include "includes/footer.php";
    include 'includes/data-collector.php';
    ?>

</body>

</html>