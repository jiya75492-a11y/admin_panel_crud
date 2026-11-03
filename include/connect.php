<?php 

$obj = new mysqli("localhost","root","","student_projects");

if($obj->connect_errno !=0){
	echo $obj->connect_error();
	
}
?>