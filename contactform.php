<?php

// if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $email_from = $mailFrom;
    $email_subject = "New eMail from PatrickMcKellar.com";
    $mailTo = "patrickmckellar@patrickmckellar.com";

    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from: $name.\n".
            "Email: $mailFrom.\n".
            "Message: $message.\n";

    mail($mailTo, $email_subject, $txt, $headers);
    header("Location: contact.php?mailsend");
// }

?>