<?php

session_start();

$_SESSION['name']="Anwar Shah";

$name = $_SESSION['name'];

echo "<h1>Hello $name</h1>";

echo "<a href='logout.php'>Logout</a>";

?>