<?php 
    //$connection = mysqli_connect('dbserver','user','password','dbname');
    $connection = mysqli_connect('localhost','root','','chatapp');

    //mysqli_connect_errno();  mysqli_connect_error();

    //checking the connection 
    if (mysqli_connect_errno()){
        die('Database connection failed! ' . mysqli_connect_error());
    }else{
        // echo "Connection successful.";
    }
?>