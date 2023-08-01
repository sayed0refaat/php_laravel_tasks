<?php


if(isset($_COOKIE['username']))
{
    echo"welcome to home ".$_COOKIE['username'];
}
else{
    echo"welcome to home without cookie";
}

