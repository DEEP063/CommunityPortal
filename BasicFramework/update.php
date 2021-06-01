<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <?php include 'links.php' ?>

</head>

<body><br><br><br>
    <h2 class="text-center">Update Page</h2>
    <br>
    <div class="container">
        <form action="" method="POST">

        <?php

include 'dbcon.php';
$id=$_GET['id'];
$selectquery = " select * from registration where  id= $id";
$query = mysqli_query($con,$selectquery);
$result = mysqli_fetch_assoc($query);
if(isset($_POST['submit'])){

    $id=$_GET['id'];
    $name = mysqli_real_escape_string($con,$_POST['user']);
    $degree = mysqli_real_escape_string($con,$_POST['degree']);
    $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $refer = mysqli_real_escape_string($con,$_POST['refer']);
    $lang = mysqli_real_escape_string($con,$_POST['lang']);
    

    // $insertquery = " insert into registration(name,email,mobile,degree,refer,language) values('$name' ,'$email','$mobile','$degree','$refer','$lang')";
    $updatequery = " update registration set id=$id , name='$name', email='$email',mobile='$mobile',degree='$degree',refer='$refer', language='$lang' where id=$id";
    $qurey = mysqli_query($con,$updatequery);

    if($qurey){
        ?>
        <script>
        alert('Updated Successfull');
        </script>
        <?php
    }else{
        ?>
        <script>
        alert('Updated Fail');
        </script>
        <?php
    }

}

?>
            <div class="form-group">
                <label for="user">Name:</label>
                <input type="text" class="form-control" name="user" value="<?php echo $result['name'] ?>">
            </div>

            <div class="form-group">
                <label for="qualification">Qualification:</label>
                <input type="text" class="form-control" name="degree" value="<?php echo $result['degree'] ?>">
            </div>

            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="number" class="form-control " name="mobile" value="<?php echo $result['mobile'] ?>">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="<?php echo $result['email'] ?>">
            </div>

            <div class="form-group">
                <label for="reference">Reference:</label>
                <input type="text" class="form-control" name="refer" value="<?php echo $result['refer'] ?>">
            </div>

            <div class="form-group">
                <label for="language">Language:</label>
                <input type="text" class="form-control" name="lang" value="<?php echo $result['language'] ?>">
            </div>

            <input type="submit" class="btn btn-success" name="submit" value="Update">
            <a href="select.php" class="btn btn-primary float-right">Check Form</a>

        </form>
    </div>




</body>

</html>
