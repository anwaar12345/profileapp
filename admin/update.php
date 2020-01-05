<?php
include("header.php");
if(isset($_GET['id'])){
$gid = $_GET['id'];
$btn="Update";
$q = mysqli_query($conn,"SELECT * FROM `tbluser` where id = '$gid'");
while($row=mysqli_fetch_array($q)){
$fname = $row[1];
$lstn = $row[2];
$email = $row[3];
$gender = $row[4];
$city = $row[5];
$country = $row[6];
$password = $row[7];
$image = $row[9];
    }
}else{
  $btn = "insert";
    $gid = "";
$fname = "";
$lstn = "";
$email = "";
$gender = "";
$city = "";
$country = "";
$password = "";
$image = "";
}
?>
    
    
    <div class="col-md-6" style="margin:100px;">
    <div class="card">
    <header class="card-header">
        <a href="../signin.php" class="float-right btn btn-primary btn-block">Log in</a>
        <h4 class="card-title mt-2"><?php echo $btn; ?></h4>
    </header>
    <article class="card-body">
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col form-group">
                <label>First name </label>   
                  <input type="text" class="form-control" name="fname" value="<?php echo $fname ;?>">
            </div> <!-- form-group end.// -->
            
                  <input type="hidden"  name="uid" value="<?php echo $gid;?>">
    
            <div class="col form-group">
                <label>Last name</label>
                  <input type="text" class="form-control" name="lstname" value="<?php echo $lstn ;?>">
            </div> <!-- form-group end.// -->
        </div> <!-- form-row end.// -->
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="" name="email" value="<?php echo $email ;?>">
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div> <!-- form-group end.// -->
        <div class="form-group">
                <label class="form-check form-check-inline">

              <input class="form-check-input" type="radio" name="gender" value="male" <?php if($gender == "male") echo "checked";?>>
              <span class="form-check-label"> Male </span>
            </label>
            <label class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" value="female" <?php if($gender == "female") echo "checked";?>>
              <span class="form-check-label"> Female</span>
            </label>
        </div> <!-- form-group end.// -->
        <div class="form-row">
            <div class="form-group col-md-6">
              <label>City</label>
              <input type="text" class="form-control" name="city"  value="<?php echo $city; ?>">
            </div> <!-- form-group end.// -->
            <div class="form-group col-md-6">
              <label>Country</label>
              <select id="inputState" class="form-control" name="country">
                  <option value="Pakistan" <?php if($country == "Pakistan") echo "selected";?>>Pakistan</option>
                  <option value="Russia" <?php if($country == "Russia") echo "selected";?>>Russia</option>
                  <option value="USA" <?php if($country == "USA") echo "selected";?> >United States</option>
                  <option value="Uzbekistan" <?php if($country == "Uzbekistan") echo "selected";?>>Uzbekistan</option>
                  <option value="Turkey" <?php if($country == "Turkey") echo "selected";?>>Turkey</option>
              </select>
            </div> <!-- form-group end.// -->
        </div> <!-- form-row.// -->
        <div class="form-group">
            <label>Create password</label>
            <input class="form-control" type="password" name="password" value="<?php echo $password; ?>">
        </div> <!-- form-group end.// -->  
<div class="form-group">
            <label>Upload Picture</label>
            <?php echo "<img src='../upload/$image' height='100px' width='100px'>";?>
            <input class="form-control" type="file" name="image" value="$image">
        </div> 
        <div class="form-group">
  <input type="submit" class="btn btn-primary btn-block" name="btnu" value="<?php echo $btn; ?>">
        </div> <!-- form-group// -->      
        
   
    </form>
    <?php
    
if(isset($_POST['btnu'])){
      $fname = $_POST['fname'];
      $uid = $_POST['uid'];
      $lstn = $_POST['lstname'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $city = $_POST['city'];
      $country = $_POST['country'];
      $password =md5($_POST['password']);
      $image = $_FILES['image']['name'];
      $image_move = $_FILES['image']['tmp_name'];

    // echo $fname;
    // echo $gender;
      //  $u = mysqli_query($conn,"UPDATE `tbluser` SET `first_name`='$_POST[fname]',`last_name`='$_POST[lstname]',`email`='$_POST[email]',`gender`='$_POST[gender]',`city`='$_POST[city]',`country`='$_POST[country]',`password`='$_POST[password]' WHERE id = $gid "); 
        //if($u){
            //header("location:show.php");
        //}else{
          //  echo "Failed";
       // }
    
if($_POST['uid']=="")
{
    move_uploaded_file($image_move, "../upload/".$image);

   $result = mysqli_query($conn,"INSERT INTO `tbluser`(`first_name`, `last_name`, `email`, `gender`, `city`, `country`, `password`,`image`) VALUES ('$fname','$lstn','$email','$gender','$city','$country','$password','$image')");
  
  if($result){
      echo "inserted";
      header("location:show.php");
  }else{
      echo "failed";
  }
    
}
else
{
$u;
if(empty($image)){

$u = "UPDATE `tbluser` SET `first_name`='$fname',`last_name`='$lstn',`email`='$email',`gender`='$gender',`city`='$city',`country`='$country',`password`='$password' WHERE id = $uid"; 
       
}else{

  move_uploaded_file($image_move, "../upload/".$image);  
$u = "UPDATE `tbluser` SET `first_name`='$fname',`last_name`='$lstn',`email`='$email',`gender`='$gender',`city`='$city',`country`='$country',`password`='$password',`image`='$image' WHERE id = $uid "; 
        
}


if(mysqli_query($conn,$u)){

           echo "<script>alert('Updated');window.location.href='show.php';</script>";
        }else{
           echo "Failed";
        }

}
}

    ?>
    </article> <!-- card-body end .// -->

    
</div> <!-- card.// -->
    </div> <!-- col.//-->
    
    
    
    <?php 
    include('footer.php');
    ?>