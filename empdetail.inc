<?php

class empdetail{
	var $eid;
	var $ename;
	var $ecity;
	var $edept;
	var $edesign;
	function enteremp($id, $name, $city){

	$this->eid = $id;
	$this->ename = $name; 
	$this->ecity = $city;
	}
function enterdetail($dept,$design){
	$this->edept = $dept;
	$this->edesign = $design;
}

}

?>