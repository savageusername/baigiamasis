<?php
    if(isset($_POST['submit'])) { 
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
   
    if(!empty($name) && !empty($email)) 
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            include_once 'db.php';
            echo "<script>alert('You are successfully registered for the draft!')</script>";
        }  
    } 

    
