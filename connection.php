<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "db";  
    $_conn = "";
    try{
        $conn = new mysqli($servername, $username, $password, $db_name, 3307);
    }
    catch(mysqli_sql_exception){
        echo "Couldnot connect";
    }
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
    
    ?>