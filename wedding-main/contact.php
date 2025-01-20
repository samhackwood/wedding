<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail']; // fix here
    $message = $_POST['message'];

    $mailTo = "samandanaiswedding@gmail.com, s.hackwood@hotmail.co.uk";
    $headers = "From: ".$mailFrom;
    $txt = "You have a message " . $name . ".\n\n" . $message;

    mail($mailTo, $name, $txt, $headers);

    header("Location: recieved.html?MessageSent");
    
}
?>