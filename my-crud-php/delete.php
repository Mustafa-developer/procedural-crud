<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>


<?php  

if(isset($_GET['uid'])){
    $uid = $_GET['uid']

?>

<h2>Are you Sure, want to delete this profile... </h2>
<form action="delete.php" method="get" class="p-2">
    <input  type="hidden" name="d-id" value="<?php echo $uid ?>">
    <input class="btn btn-primary" type="submit" name="yes" value="yes">
    <a href="index.php" class="btn btn-warning">No</a>
</form>

<?php
}elseif(isset($_GET['yes'])){
    include("connection/connection.php");
    $uid = $_GET['d-id'];
    
    $query = mysqli_query($con , "DELETE FROM `user_tb` WHERE user_tb.u_id = $uid");
    
    if($query == 'true'){
        header('location:index.php');
    }else{
        echo "query error";
    }
}


?>