<?php
error_reporting(0);
include('db.php');
session_start();
if($_SESSION['name']!=""){

    echo "<script>alert('welcome backe');window.location.href='admin/dashboard.php'</script>";
}
if(isset($_COOKIE['name'])){
    $_SESSION['name'] = $_COOKIE['name'];
    echo "<script>alert('welcome backe');window.location.href='admin/dashboard.php'</script>";
}
if (isset($_POST['btns'])) {
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$remember = $_POST['remember'];

$q = mysqli_query($conn,"SELECT * FROM tbluser where email = '$email' and password = '$password' and role = '$role'");
$check = mysqli_num_rows($q);
$row = mysqli_fetch_array($q);
if ($check > 0) {
    $u_role= $row['role'];
    if(isset($remember)){
        setcookie('name',$row['first_name'],time()+60*60*2);
    }
    
     session_start();
     $_SESSION['name'] = $row['first_name'];
 if($u_role==1){
    header("location:admin/dashboard.php");
 }elseif ($u_role==2) {
      header("location:admin/new.php");
 }   
}else{
    header("location:signin.php?error_msg");
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>
<body>

    
<div class="container">
    <hr>
    
    
    <div class="row justify-content-center">
    <div class="col-md-6">
    <div class="card">
    <header class="card-header">
        <a href="signup.html" class="float-right btn btn-outline-primary mt-1">Register</a>
        <h4 class="card-title mt-2">Login</h4>
    </header>
    <article class="card-body">
    <form method="POST" action="">
      
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="" name="email">
            
        </div> <!-- form-group end.// -->
       
    
        <div class="form-group">
            <label>Create password</label>
            <input class="form-control" type="password" name="password">
        </div> <!-- form-group end.// -->  
        <div class="form-group">
            <input type="checkbox" name="remember" value="remember"> Remember Me
        </div>
        <div class="form-group">
            <input type="radio" name="role" value="1">&nbsp; admin &nbsp; 
            <input type="radio" name="role" value="2"> user
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-block" name="btns">Login</button>
        </div> <!-- form-group// -->      
        
   
    </form>
    </article> <!-- card-body end .// -->

    
</div> <!-- card.// -->
    </div> <!-- col.//-->
    
    </div> <!-- row.//-->
    
    
    </div> 
    <!--container end.//-->
    
    
</body>
</html>






