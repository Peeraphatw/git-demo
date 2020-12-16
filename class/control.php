<?php
    $con = new mysqli('localhost','root','','dbname');
    
    if($con->connect_error)
    {
        die("Connnetion failed:".$con->connect_error);
    }
    echo "connected successfully";