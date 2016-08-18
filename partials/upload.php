<?php
/**
 * Created by PhpStorm.
 * User: nastia
 * Date: 18/08/16
 * Time: 11:57
 */
$to  = "anastasiia.dragich@gmail.com";

$subject = "Birthday Reminders for August";

$message = ' 
<html> 
    <head> 
        <title>Birthday Reminders for August</title> 
    </head> 
    <body> 
        <p>Here are the birthdays upcoming in August!</p> 
    </body> 
</html>';

$headers  = "Content-type: text/html; charset=windows-1251 \r\n";
$headers .= "From: Birthday Reminder <birthday@example.com>\r\n";
$headers .= "Bcc: birthday-archive@example.com\r\n";

mail($to, $subject, $message, $headers);
