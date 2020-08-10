<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'nafees.akhand@yahoo.com';
    $email_submission = "Website Feedback";
    $email_body = "User Name: $name.\n"
                  "User Email: $visitor_email.\n"
                  "User Message: $message.\n";  

    to: 'nafees0416@gmail.com';
    $headers: "From: $email_from \r\n";    
    $headers: "Reply-To: $visitor_email \r\n";
    mail($to, $email_submission, $email_body, $headers);  
    header("Location: contact.html");        
    

?>