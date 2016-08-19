<?php
    include 'swiftmailer/lib/swift_required.php';

echo $_POST['name'];
//data
$name = $_POST['name'];
$email = $_POST['email'];
$portfolio = $_POST['portfolio'];

if(isset($_POST['phone']) && !empty($_POST['phone'])){
    $phone = $_POST['phone'];
}
if(isset($_POST['online-portfolio']) && !empty($_POST['online-portfolio'])){
    $onlinePortfolio = 'Link for online portfolio'.$_POST['online-portfolio'];
}

if(isset($_POST['team']) && !empty($_POST['team'])){
    $team = $_POST['team'];
}

// Create the Transport
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance('Application')
        ->setFrom(array('user@event-project.myhomezy.com' => $name))
        ->setTo(array('anastasiia.dragich@gmail.com' => 'Admin'));
    $message->setBody("<html>
                        <body>
                            <h2>Application!</h2><br><br>
                            ".$name." sent an application.<br>
                            <p>Email: ".$email."</p>
                            <p>Phone: ".$email."</p>
                            <p>Online portfolio: ".$email."</p>
                            <p>Team: ".$email."</p>
                            <p>
                                Watch portfolio in annex
                            </p>
                            Best regards,<br>
                            Event-project
                        </body>
                    </html>", 'text/html')
        ->attach(Swift_Attachment::fromPath('../uploads/'.$portfolio));;
    if (!$mailer->send($message, $errors))
    {
        echo "Error:";
        print_r($errors);
    }
    else{
        echo 'Message has been sent';
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '#application');
    }
?>