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


$uploaddir = '/home/www/event-project.myhomezy.com/web/uploads/';
echo $uploaddir;
if($_FILES["file"]["size"] > 1024*3*1024)
{
    echo ("Размер файла превышает три мегабайта");
    exit;
}
// Проверяем загружен ли файл
if(is_uploaded_file($_FILES["file"]["tmp_name"]))
{
    // Если файл загружен успешно, перемещаем его
    // из временной директории в конечную
    move_uploaded_file($_FILES["file"]["tmp_name"], $uploaddir.$_FILES["file"]["name"]);
} else {
    echo("Ошибка загрузки файла");
}
?>
