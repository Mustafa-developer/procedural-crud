<?php 


include('connection/connection.php');


if(isset($_POST['register'])){
    
    $uname = $_POST['u-name'];
    $email = $_POST['u-email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = md5($_POST['password']);
    
    
    
    $sqlquery = "INSERT INTO user_tb(u_name, email, phone,address, password) 
    VALUES ('$uname','$email','$phone','$address','$password')";
    echo $sqlquery;
    
    
    $insert = mysqli_query($con,$sqlquery);
 
    if($sqlquery){
        header('location:index.php?Record_Successfull');
    }else{
         header('location:index.php?Record_UnSuccessfull');
    }
        
    
    
}





?>

