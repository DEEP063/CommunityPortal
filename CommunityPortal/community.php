<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Details</title>
    <?php include 'links.php' ?>

</head>

<body><br><br><br>
    <h2 class="text-center"> Role </h2>
    <br>
    <div class="container">
        <form  action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="POST">

            <div class="form-group">
                <label for="communityname" >Community Name:</label>
                <input type="text" class="form-control" name="communityname">
            </div>
            <div class="form-group">
                <label for="communitydescription">Community Description</label>
                <textarea class="form-control" id="communitydescription" rows="5"></textarea>
            </div>


        </form>
    </div>




</body>

</html>