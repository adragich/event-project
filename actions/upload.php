<?php
/**
 * Created by PhpStorm.
 * User: nastia
 * Date: 18/08/16
 * Time: 11:57
 */

$uploaddir = '/home/www/event-project.myhomezy.com/web/uploads/';

if($_FILES["file"]["size"] > 1024*3*1024)
{
    echo ("Limit size exceeded");
    exit;
}

if(is_uploaded_file($_FILES["file"]["tmp_name"]))
{
    move_uploaded_file($_FILES["file"]["tmp_name"], $uploaddir.$_FILES["file"]["name"]);
    return $_FILES["file"]["name"];
} else {
    echo("Error");
}

?>
