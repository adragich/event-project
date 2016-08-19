<?php
echo 'here';
    include 'swiftmailer/lib/swift_required.php';

// Create the Transport
$transport = Swift_MailTransport::newInstance();

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance('Wonderful Subject')
        ->setFrom(array('john@doe.com' => 'John Doe'))
        ->setTo(array('anastasiia.dragich@gmail.com' => 'Nastia'));
    $message->setBody('<html>
    <body>
        <h2>Hi John!</h2><br><br>
        Johanna (johanna82) sent you a message.<br>
        <p>
        	Hi John. Amazing picture... <a href="http://www.awesome.com/msg/12345/read/">login and read the full message</a>
        </p>
        Best regards,<br>
        Photos4Lulz
    </body>
</html>');
    if (!$mailer->send($message, $errors))
    {
        echo "Error:";
        print_r($errors);
    }
    else{
        echo 'good';
    }
?>