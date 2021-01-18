<?php
session_start();

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
    $_SESSION['email']=$email;
    echo '<script>alert("LOGGED IN SUCCESSFULLY")</script>';
    header("refresh:2; url=index.php");
}else{
    echo '<script>alert("INVALID EMAIL OR PASSWORD")</script>';
    header("refresh:1; url=login.html");
}
?>