<?php
    include 'swiftmailer/lib/swift_required.php';

// Create the Transport
$transport = Swift_MailTransport::newInstance();

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance('Wonderful Subject')
        ->setFrom(array('user@doe.com' => 'User'))
        ->setTo(array('anastasiia.dragich@gmail.com' => 'Nastia'));
    $message->setBody("<html>
    <body>
        <h2>Application!</h2><br><br>
        User sent an application.<br>
        <p>
        	Watch <a href='http://event-project.myhomezy.com/uploads/pdfurl-guide.pdf'>portfolio</a>
        </p>
        Best regards,<br>
        Event-project
    </body>
</html>", 'text/html');
    if (!$mailer->send($message, $errors))
    {
        echo "Error:";
        print_r($errors);
    }
    else{
        echo 'Message has been sent';
    }
?>