<?php
include('db.php');
$fname = $_POST['fname'];
$lstn = $_POST['lstname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$country = $_POST['country'];
$password =md5($_POST['password']);
$image = $_FILES['image']['name'];
$image_move = $_FILES['image']['tmp_name'];
if (move_uploaded_file($image_move, 'upload/$image')) {
	$result = mysqli_query($conn,"INSERT INTO `tbluser`(`first_name`, `last_name`, `email`, `gender`, `city`, `country`, `password`,`image`) VALUES ('$fname','$lstn','$email','$gender','$city','$country','$password','$image')");
if($result){
    echo "inserted";
    header("location:show.php");
}else{
    echo "failed";
}


}



?>