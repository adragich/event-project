<?php
session_start();
    include 'swiftmailer/lib/swift_required.php';

echo $_POST['name'];
//data
if(isset($_POST['name']) && !empty($_POST['name'])){
    $name = $_POST['name'];
}
else{
    $name = "User";
}

if(isset($_POST['email']) && !empty($_POST['email'])){
    $email = $_POST['email'];
}
else{
    $email = "user@aa.com";
}

if(isset($_POST['phone']) && !empty($_POST['phone'])){
    $phone = $_POST['phone'];
}
else{
    $phone = '';
}
if(isset($_POST['portfolio']) && !empty($_POST['portfolio'])){
    $portfolio = $_POST['portfolio'];
}
else{
    $portfolio = '';
}
if(isset($_POST['address']) && !empty($_POST['address'])){
    $onlinePortfolio = 'Link for online portfolio'.$_POST['addredd'];
}
else{
    $onlinePortfolio = '';
}

if(isset($_POST['team']) && !empty($_POST['team'])){
    $team = $_POST['team'];
}
else{
    $team = '';
}

// Create the Transport
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance('Application')
        ->setFrom(array($email => $name))
        ->setTo(array('anastasiia.dragich@gmail.com' => 'Admin'));
    $message->setBody("<html>
                        <body>
                            <h2>Application!</h2><br><br>
                            ".$name." sent an application.<br>
                            <p>".$email."</p>
                            <p>".$phone."</p>
                            <p>".$portfolio."</p>
                            <p>".$onlinePortfolio."</p>
                            <p>".$team."</p>
                            <p>
                                Watch <a href='http://event-project.myhomezy.com/uploads/pdfurl-guide.pdf'>portfolio</a>
                            </p>
                            Best regards,<br>
                            Event-project
                        </body>
                    </html>", 'text/html')
        ->attach(Swift_Attachment::fromPath('../uploads/pdfurl-guide.pdf'));;
    if (!$mailer->send($message, $errors))
    {
        $_SESSION['message'] = 'fail';
        echo "Error:";
        print_r($errors);
    }
    else{
        $_SESSION['message'] = 'success';
        echo 'Message has been sent';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

?>