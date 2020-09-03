<?php  

include('connection/connection.php');

if(isset($_POST['update'])){
    $uid = $_POST['uid'];
    $user_name = $_POST['user-name'];
    $user_email = $_POST['user-email'];
    $user_phone = $_POST['user-phone'];
    $user_address = $_POST['user-address'];
    
    
    $query = mysqli_query($con , "UPDATE `user_tb` SET `u_name`= '$user_name',`email`='$user_email',
    `phone`='$user_phone',`address`= '$user_address' WHERE user_tb.u_id = $uid");
    
    if($query == 'true'){
        header('location:index.php');
    }else{
        echo "no";
    }
}

?>