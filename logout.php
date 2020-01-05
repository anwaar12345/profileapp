<?php

session_start();
session_destroy();
setcookie('name',"",time()-123);
header("location:signin.php");

?>