<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <?php include'links.php' ?>
</head>

<body>
    <div class="container-fluid">
        <div class="main-div">
            <h2 class="text-center">List of Candidates</h2>
            <div class="center-div">
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Degree</th>
                            <th>Refer</th>
                            <th>Language</th>
                            <th colspan="2" >Operation</th>
                        </thead>
                        <tbody>
                        <?php 
                        
                        include 'dbcon.php';
                         

                        $selectquery = " select * from registration ";
                        $query = mysqli_query($con,$selectquery);
                        
                        while($result = mysqli_fetch_assoc($query)){
                            ?>
                        
                        <tr>
                        <td><?php echo $result['id'] ?></td>
                        <td><?php echo $result['name'] ?></td>
                        <td><?php echo $result['email'] ?></td>
                        <td><?php echo $result['mobile'] ?></td>
                        <td><?php echo $result['degree'] ?></td>
                        <td><?php echo $result['refer'] ?></td>
                        <td><?php echo $result['language'] ?></td>
                     
                        <td><a href="update.php?id=<?php echo $result['id'] ?>"><i class="fas fa-edit"></i></a></td>
                        <td><a href="delete.php?idd=<?php echo $result['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
<?php
                    }

                    ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>

</body>

</html>