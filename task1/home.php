<?php

session_start();


if( empty($_SESSION['userdata']) ){
    header("LOCATION:index.html");
}
else{
    echo"welcome to home";
    echo " <a href='logout.php'> logout </a> ";
}
