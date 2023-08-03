<?php

//first database connection 


// servername, username , password , database_name ;

$connection=mysqli_connect("localhost","root","","profile");





$query="SELECT *FROM  `user` " ;

$result=mysqli_query($connection," $query ");


//this function get rows of data and while to loop on all rows

while($o=mysqli_fetch_assoc($result)){

    echo '<pre>';

    print_r($o);

};






