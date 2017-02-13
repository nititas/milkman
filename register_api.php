<?php 
    $cus_username = $_POST["username"];  
    $cus_email = $_POST["email"];
    $cus_phone = $_POST["phone"];
    $cus_password = $_POST["password"];

    include "config.php";



    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
     else{

        $sql = "INSERT INTO customer(cus_username,cus_email,cus_phone,cus_password,cus_date) VALUES ('".$cus_username."','".$cus_email."','".$cus_phone."','".$cus_password."',now());";


            if ($conn->query($sql)==TRUE) {

                
            
                header("Location: login.php");
            

            }
            else{
                    echo "try again";
                }
            $conn->close();

    
    }

            

?>