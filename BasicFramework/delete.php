<?php

include 'dbcon.php';
        
$id = $_GET['idd'];

$deletequery = "delete from registration where id= $id";

$query =  mysqli_query($con ,$deletequery);


if($query){
    ?>
    <script>
    alert('Deleted Successfull');
    </script>
    <?php
    header('location:select.php');
}else{
    ?>
    <script>
    alert('Deleted Fail');
    </script>
    <?php
}


?>