<?php
include '../config/config.php';
		$id=$_POST['id'];
		
		
		$insert_cat="delete from foods where id=$id";
		$run_cat=mysqli_query($conn,$insert_cat);
		
	
?>
