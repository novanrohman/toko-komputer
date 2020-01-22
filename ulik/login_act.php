<?php
session_start();
include 'dist/config.php';
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysql_query("select * from admin where uname='$username' and pass='$password'")or die(mysql_error());
if(mysql_num_rows($query)==1){
    $_SESSION['uname']=$username;
    header("location:dist/index.php");
}else{
    header("location:index.php?pesan=gagal")or die(mysql_error());
}
?>