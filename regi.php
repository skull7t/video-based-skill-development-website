<?php
session_start();
header("refresh:2; url=login.html");
$con=mysqli_connect('localhost','root');
if($con){
    echo "connection successful";

}else{
    echo "no connection";
}

mysqli_select_db($con,'new');
if(isset($_POST['emailid'])){
    $email=$_POST['emailid'];
}
if(isset($_POST['passwordid'])){
    $pass=$_POST['passwordid'];
}
$q="select * from login where email='$email' && password='$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num == 1){
   echo '<script>alert("ACCOUNT ALREADY CREATED(pls login)")</script>';
   header("refresh:2; url=login.html");
}else{
    $qy="insert into login(email,password) values ('$email' , '$pass')";
    mysqli_query($con,$qy);
    echo '<script>alert("ACCOUNT CREATED SUCCESSFULLY")</script>';
}

?>