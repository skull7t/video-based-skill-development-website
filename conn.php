<?php
session_start();
$conn=mysqli_connect('localhost','root','','new');
$sql="SELECT title FROM webinar WHERE id='1'"
$result = mysqli_query($conn,$sql);
echo $result['title'];
?>