<?php

    $name = $_POST["name"];
    $mbl = $_POST["mobile"];
    $email = $_POST["email"];
    $msg = $_POST["Message"];

    // $email_from = "simritathapa45@gmail.com";
    // $email_subject = "New Form Submission";
    // $email_body = "user name: " . $name . "\n". "user mobile number:" . $mbl . "\n" . "user email:" . $email . "\n" . "user message :" . $msg ;

    // $email_to = "simran.ghimire07@gmail.com";
    // $header = "from" . $email_from . "\r\n";
    // $header = "reply to:" . $email . "\r\n";

    // mail($email_to, $email_subject, $email_body, $header);

    
    header("location: http://localhost/Rayehit-main/contactform/contactform.php")
?>