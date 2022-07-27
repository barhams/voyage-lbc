<?php 

    $con = new mysqli('localhost', 'root', '', 'lbc');

    if(!$con){
        die(mysqli_error($con)); 
    }


?>