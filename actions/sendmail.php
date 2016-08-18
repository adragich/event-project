<?php
/**
 * Created by PhpStorm.
 * User: nastia
 * Date: 18/08/16
 * Time: 12:25
 */
$to  = "anastasiia.dragich@gmail.com";

$subject = "Application";

$message = '
<html>
    <head>
        <title>Application</title>
    </head>
    <body>
        <p>Application!</p>
    </body>
</html>';

$headers  = "Content-type: text/html; charset=windows-1251 \r\n";
$headers .= "From: Application Application@example.com>\r\n";
$headers .= "Bcc: Application@example.com\r\n";

mail($to, $subject, $message, $headers);

echo 'done';