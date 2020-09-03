<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
   <?php 
    
    include('connection/connection.php');
    
    $uid = $_GET['uid'];
   
    
   $pass_query = "select * from user_tb where user_tb.u_id = $uid ";
   
    $retreive_query =mysqli_query($con,$pass_query);

    $rows = mysqli_fetch_assoc($retreive_query);
  
   
    ?>
   <section class="my-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="myform">
                        <form action="edit-process.php" method="POST">
                            <div class="form-group">
                               <input type="hidden" name="uid" value="<?php echo $rows['u_id'] ?>" >
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="" value="<?php echo $rows['u_name']  ?>" name="user-name">
                            </div>
                            <div class="from-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="" value="<?php echo $rows['email'] ?>" name="user-email">
                            </div>

                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="phone" class="form-control" placeholder="Phone" value="<?php echo $rows['phone'] ?>" name="user-phone">
                            </div>
                            
                            <div class="form-group">
                                <label for="">Address</label>
                               <textarea name="user-address" class="form-control" id="" cols="20" rows="5" type="input"><?php  print $rows['address']; ?> </textarea>
                            </div>

                            
                             
                            <div class="my-button">
                                <button name="update" class="btn btn-warning">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    
</body>
</html>