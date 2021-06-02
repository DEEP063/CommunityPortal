<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login Page</title>
    <?php include 'links.php' ?>

</head>

<body><br><br><br>
    <h2 class="text-center"> User Login</h2>
    <br>
    <div class="container">
        <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="POST">

            <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password">
            </div>
            <br>
            <input type="submit" class="btn btn-success" name="login" value="Login">
            <br><br>
            <p class="inline-block">Not Have An Account Click Here :-</p>
            <a href="userdetails.php" class="btn btn-primary" >Create New User</a>

        </form>
    </div>




</body>

</html>