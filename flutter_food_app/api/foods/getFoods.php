<?php
include '../config/config.php';

$result=array();

$queryFood="select * from foods";
$queryResult=mysqli_query($conn,$queryFood);
while ($row=mysqli_fetch_assoc($queryResult)) {
//$result=$row;sssmssscsznznbxs sncsnsnncbxbmcsnsnsssxnxnxmsssssssnssssssssssssssssxnsssxssnsxsssnsnsxnsxsss
array_push($result,$row);
}s
echo json_encode($result);
?>//