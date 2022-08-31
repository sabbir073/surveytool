<?php
$conn = mysqli_connect('localhost','root','','newsur');

$sql= "SELECT * FROM `survey` WHERE 1";
$res= mysqli_query($conn,$sql);
$count= mysqli_num_rows($res);

echo json_encode($count);

?>