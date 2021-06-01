<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Details</title>
    <?php include 'links.php' ?>

</head>

<body><br><br><br>
    <h2 class="text-center"> Role</h2>
    <br>
    <div class="container">
        <form class="text-center" action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="POST">
        
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio">NDI Administrator
                </label>
            </div>

            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio">Administrator
                </label>
            </div>

            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio">Developer
                </label>
            </div>
            
            

         </form>
    </div>




</body>

</html>
