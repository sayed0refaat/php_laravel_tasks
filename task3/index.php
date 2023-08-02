<?php

//first database connection 


// servername, username , password , database_name ;

$connection=mysqli_connect("localhost","root","","profile");


// Check connection

if ($connection) {
    echo "Connected successfully";
  }
  else{
    echo "connection failed";
  }


if(isset($_POST['username'] )){

    echo" querry "  ;
    //var  
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];



    $query="INSERT INTO `user` (`username`,`password`,`email`) VALUE ('$username','$password','$email') ";

    mysqli_query($connection," $query ");
}


