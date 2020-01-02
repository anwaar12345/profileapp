<?php
session_start();
$name = $_SESSION['name'];
echo $name;
echo "<a href='../logout.php'>logout</a>";
?>