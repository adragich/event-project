<?php
/**
 * Created by PhpStorm.
 * User: nastia
 * Date: 18/08/16
 * Time: 12:25
 */
//TODO: change this script

$message = '
<html>
    <head>
        <title>Application</title>
    </head>
    <body>
        <p>name</p>
    </body>
</html>';

$headers  = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: Application Application@example.com>\r\n";
$headers .= "Bcc: Application@example.com\r\n";

mail($feedback_email, $feedback_subject, $message, $headers);

echo $_POST['name'];