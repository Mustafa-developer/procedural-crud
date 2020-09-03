<?php 
include('connection/connection.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crud</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>


    <section class="my-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="myform">
                        <form action="insert.php" method="POST">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="u-name">
                            </div>
                            <div class="from-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="u-email">
                            </div>

                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="phone" class="form-control" placeholder="Phone" name="phone">
                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="Password" class="form-control" placeholder="Password" name="password">
                            </div>

                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea class="form-control" id="" cols="30" rows="10" name="address"></textarea>
                            </div>
                            <div class="my-button">
                                <button name="register" class="btn btn-warning">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <hr>
    <h2 class="text-center">Show The Record</h2>
    <hr> <br>

   
   <?php 
    
    $query = "select * from user_tb";
    
    $pass = mysqli_query($con , $query);
    
   
    
    ?>
   
    <section class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="mytable">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>                                    
                                    <th>Address</th>
                                    <th>Password</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                                
                               
                                <?php 
                                
                                while( $row = mysqli_fetch_assoc($pass)){ ?>
                                    
                                    <tr>
                                        <td><?php echo $row['u_id'] ?></td>
                                        <td><?php echo $row['u_name'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['phone'] ?></td>
                                        <td><?php echo $row['address'] ?></td>
                                        <td><?php echo $row['password'] ?></td>
                                        <td><a href="edit.php?uid=<?php echo $row['u_id'] ?>">Edit</a></td>
                                        <td><a href="delete.php?uid=<?php echo $row['u_id'] ?>">Delete</a></td>
                                    </tr>
                                    
                                    
                                    
                               <?php } ?>
                                
                               
                                  

                            </thead>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
