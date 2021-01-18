<?php
session_start();
$con=mysqli_connect('localhost','root');
if($con){
    echo "connection sucessful";

}else{
    echo "no connection";
}

mysqli_select_db($con,'new');
if(isset($_POST['name'])){
    $name=$_POST['name'];
}
if(isset($_POST['email'])){
    $email=$_POST['email'];
}
if(isset($_POST['message'])){
    $message=$_POST['message'];
}
$q="select * from cntcus where name='$name' && email='$email' && message='$message'";
$qy="insert into cntcus(name,email,message) values ('$name' , '$email','$message')";
    mysqli_query($con,$qy);
    echo '<script>alert("MESSAGE SUCCESSFULLY SENT")</script>';
    header("refresh:1; url=index.php");
?>