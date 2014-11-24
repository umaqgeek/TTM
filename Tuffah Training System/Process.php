<?php

$username = $_POST['username'];
$password = $_POST['password'];
    
    //sufi  sufi123
    
if($username == 'sufi' AND $password == 'sufi123'){
        echo "You Are Successfully Logged In";
    }
 else {
        echo "You Are Not Logged In, username or password Incorrect";        
}
?>