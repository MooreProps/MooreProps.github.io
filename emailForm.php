<?php
    
if(isset($_POST['submit'])){
    $to = "mrsideshowjack@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $comment = $_POST['message'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " Telephone:". $tel. " wrote the following:" . "\n\n" . $comment;
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $comment;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
   // echo "Mail Sent. Thank you " . $name . ", we will contact you shortly. <br>" . $comment . "<br>" . $tel . "<br>"  . $to;
    header("Location: contact.html");
    }
?>