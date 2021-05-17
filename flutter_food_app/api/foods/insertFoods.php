<?php
include '../config/config.php';
$title=$_POST['title'];
//  $price=$_POST['price'];
//  $discount=$_POST['discount'];
//  $category_id=$_POST['category'];
// $description=$_POST['description'];
$insert_box="INSERT INTO `foods`(`title`, `price`, `discount`, `description`, `category_id`, `image_path`)
 VALUES('$title',4,6,7,9,' ')";
$run_box=mysqli_query($conn,$insert_box);
?>
		