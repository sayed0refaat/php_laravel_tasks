<?php


$username="moody";
$password="123";


if($username==$_POST['username'] && $password==$_POST['password'] ){
//  setcookie(name, value, expire, path, domain, secure, httponly); path y3ni 3auz el cookie tkon zahra fy kolo wla page mo3ayna
    setcookie('username',$_POST['username'],time()+86400,'/' );

    header("LOCATION:home.php");
}

else{

    header("LOCATION:index.html");
}
