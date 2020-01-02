<?php

session_start();
session_destroy();
setcookie('email',"",time()-123);
header("location:signin.php");

?>