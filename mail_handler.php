<?php

    $to         = "sumba@africantraditionalpowers.com"; // this is your Email address
    $from       = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $phone      = $_POST['phone'];
    $subject    = "African Traditional Powers - New Contact";
    $message    = "First Name :".$first_name . " Surname: " . $last_name . " Cell phone: ".$phone. " wrote the following:" . "\n\n" . $_POST['message'];

    $headers    = "From:" . $from;
    mail($to,$subject,$message,$headers);

    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: contact.html');


?>
