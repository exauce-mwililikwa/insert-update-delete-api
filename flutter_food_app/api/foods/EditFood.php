   
<?php
include '../config/config.php';
		$id=$_POST['id'];
		$title=$_POST['title'];
		
		$insert_cat="update foods set title='$title' where id=$id";
		$run_cat=mysqli_query($conn,$insert_cat);
		
	
?>


