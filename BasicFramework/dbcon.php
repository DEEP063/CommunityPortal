<?php

$server="localhost";
$user="root";
$password="";
$db="curddb";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
    <script>
    alert('Connection Successfull');
    </script>
    <?php
}else{
    ?>
    <script>
    alert('Connection Fail');
    </script>
    <?php
}
?>