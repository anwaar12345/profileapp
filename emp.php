<?php

include('empdetail.inc');
echo "<h1>Employee Details are:</h1><br>";
$empdetail = new empdetail();
$empdetail->enteremp(1,"Shah","Karachi");
echo $empdetail->eid,"<br>";
echo $empdetail->ename."<br>";
echo $empdetail->ecity,"<br>";


?>

