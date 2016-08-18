<?php
/**
 * Created by PhpStorm.
 * User: nastia
 * Date: 18/08/16
 * Time: 11:57
 */
//$to  = "anastasiia.dragich@gmail.com";
//
//$subject = "Birthday Reminders for August";
//
//$message = '
//<html>
//    <head>
//        <title>Birthday Reminders for August</title>
//    </head>
//    <body>
//        <p>Here are the birthdays upcoming in August!</p>
//    </body>
//</html>';
//
//$headers  = "Content-type: text/html; charset=windows-1251 \r\n";
//$headers .= "From: Birthday Reminder <birthday@example.com>\r\n";
//$headers .= "Bcc: birthday-archive@example.com\r\n";
//
//mail($to, $subject, $message, $headers);


$uploaddir = '/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

echo 'Некоторая отладочная информация:';
print_r($_FILES);

print "</pre>";

?>