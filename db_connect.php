<?php 
    //connect to database
    $conn = mysqli_connect('localhost','randikachathuranga','ra12ndika','ninja_pizza');

    //check connection
    if(!$conn){
        echo "connection error" .mysqli_connect_error();
    }
?>