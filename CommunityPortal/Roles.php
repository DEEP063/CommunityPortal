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
               <a href="ndiadministratorlogin.php" class="btn btn-primary">NDI Administrator</a>
                    
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
               <a href="administratorlogin.php" class="btn btn-dark"> Administrator</a>
                    
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
               <a href="developerlogin.php" class="btn btn-info">Developer</a>
                    
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
               <a href="userlogin.php" class="btn btn-success">User &nbsp;&nbsp;</a>
                    
                </label>
            </div>


         </form>
    </div>




</body>

</html>
