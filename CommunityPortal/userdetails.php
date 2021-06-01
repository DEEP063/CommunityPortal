<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <?php include 'links.php' ?>

</head>

<body><br><br><br>
    <h2 class="text-center"> User Details</h2>
    <br>
    <div class="container">
        <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" class="form-control" name="username">
            </div>

            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" class="form-control" name="surname">
            </div>

            <div class="form-group">
                <label for="mobile">Date Of Birth</label>
                <input type="number" class="form-control " name="mobile">
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group">
                <label for="reference">Reference:</label>
                <input type="text" class="form-control" name="refer">
            </div>

            <div class="form-group">
                <label for="language">Language:</label>
                <input type="text" class="form-control" name="lang">
            </div>

            <input type="submit" class="btn btn-success" name="submit" value="Registor">
            <a href="select.php" class="btn btn-primary float-right">Check Form</a>

        </form>
    </div>




</body>

</html>
<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con,$_POST['user']);
    $degree = mysqli_real_escape_string($con,$_POST['degree']);
    $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $refer = mysqli_real_escape_string($con,$_POST['refer']);
    $lang = mysqli_real_escape_string($con,$_POST['lang']);
    

    $insertquery = " insert into registration(name,email,mobile,degree,refer,language) values('$name' ,'$email','$mobile','$degree','$refer','$lang')";

    $qurey = mysqli_query($con,$insertquery);

    if($qurey){
        ?>
<script>
    alert('Inserted Successfull');
</script>
<?php
    }else{
        ?>
<script>
    alert('Inserted Fail');
</script>
<?php
    }

}

?>