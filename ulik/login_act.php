<?php
session_start();
include 'dist/config.php';
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysql_query("select * from admin where uname='$username' and pass='$password'")or die(mysql_error());
if(empty($username) && empty($password)){
    header("location:index.php?empty_all");
}elseif (empty($username) && ! empty($password)){
    header("location:index.php?empty_email");
}elseif(! empty($username) && empty($password)){
    header("location:index.php?empty_password");
}elseif(mysql_num_rows($query)==1){
    $_SESSION['uname']=$username;
    header("location:dist/index.php");
}else{
    echo ("<script>alert 'Username dan Passeord salah'</script>");
    header("location:index.php?pesan=gagal")or die(mysql_error());
}
?>