<?php
include_once '../db.inc.php';
?><?php

if(mysqli_connect_errno()){
    die("field ".mysqli_connect_errno());
}
$username=mysqli_real_escape_string($connect,$_POST['username']);
$password=mysqli_real_escape_string($connect,$_POST['password']);
session_start();
$result= mysqli_query($connect, "SELECT password FROM `login` WHERE `username` = '$username'");
$count= mysqli_num_rows($result);
if($count==1){
    $data=mysqli_fetch_array($result);
    if(password_verify($password,$data['password'])){
        $_SESSION['log']=1;
        $_SESSION['username']=$username;
        header("location:controlpanel.php");
    }else{
        echo'Password incorrect!';



        header("refresh:1;url=../login.php");
    }

}else{
    echo'wrong';
    header("refresh:1;url=../login.php");
}

    mysqli_close($connect);
?>