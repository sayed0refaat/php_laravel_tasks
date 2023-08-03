<?php

//first database connection 


// servername, username , password , database_name ;

$connection=mysqli_connect("localhost","root","","profile");


// Check connection

if ($connection) {
    echo "Connected successfully<br />";
  }
  else{
    echo "connection failed<br />";
  }

  var_dump($_POST);
  echo "<br />";


if(isset($_POST['id'])){

    echo " querry <br />"  ;
    
    //var  
    $id=$_POST['id'];
    $username=$_POST['username'];
 
    //$query="INSERT INTO `user` (`username`,`password`,`email`) VALUE ('$username','$password','$email') ";

    // $query="DELETE FROM `user`WHERE `id`=$id " ;

   $query="UPDATE  `user` SET `username`='$username' where id=$id " ;

    mysqli_query($connection," $query ");

    //Return the number of affected rows from different queries:

    echo mysqli_affected_rows($connection) . "<br />";
}


