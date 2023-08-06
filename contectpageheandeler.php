<?php
    print $_POST['name'];
    $name = $_POST['name'];
     
    $visitior_email =  $_POST['email'];
    $message =  $_POST['message'];

    $email_form = 'dheerajprajapati5396@gmail.com';
    $email_subject = "NEW FORM SUBMISSION";
    $email_body = "User Name : $name. \n".
                    "User Email : $visitor_email. \n".
                        "User Message : $message. \n";


    $to = "dheerajprajapati5782@gmail.com";

    $headers = "Form: $email_form \r \n";

    $headers .= "Repaly-To: $visitor_email \r \n";

    mail($to, $email_subject, $email_body, $headers);

    header("./index2.html");


?>