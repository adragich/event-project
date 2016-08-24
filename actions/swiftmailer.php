<?php
    include 'swiftmailer/lib/swift_required.php';

//data
$name = $_POST['name'];
$email = $_POST['email'];
$portfolio = $_POST['portfolio'];

if(isset($_POST['phone']) && !empty($_POST['phone'])){
    $phone = "<p>Phone: ".$_POST['phone']."</p>";
}
else{
    $phone = '';
}
if(isset($_POST['online-portfolio']) && !empty($_POST['online-portfolio'])){
    $onlinePortfolio = 'Link for online portfolio'.$_POST['online-portfolio'];
}
else{
    $onlinePortfolio = '';
}

if(isset($_POST['link_inspiration']) && !empty($_POST['link_inspiration'])){
    $link_inspiration = $_POST['link_inspiration'];
}
else{
    $link_inspiration = '';
}

if(isset($_POST['inspiration']) && !empty($_POST['inspiration'])){
    $inspiration = $_POST['inspiration'];
}
else{
    $inspiration = '';
}
// Create the Transport
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance($feedback_subject)
        ->setFrom(array($feedback_from => $name))
        ->setTo(array($feedback_email => $feedback_username));
    $message->setBody("<html>
                        <body>
                            <h2>Application!</h2><br><br>
                            ".$name." sent an application.<br>
                            <p>Email: ".$email."</p>".
                            $phone
                            ."<p>Online portfolio: ".$onlinePortfolio."</p>
                            <p>Inspiration link: ".$link_inspiration."</p>
                            <p>
                                Watch portfolio in annex
                            </p>
                            Best regards,<br>
                            Event-project
                        </body>
                    </html>", 'text/html')
        ->attach(Swift_Attachment::fromPath('../uploads/'.$portfolio))
        ->attach(Swift_Attachment::fromPath('../uploads/'.$inspiration));
    session_start();

    if (!$mailer->send($message, $errors))
    {
        $_SESSION['message'] = 'An error has occur. Please try again later.';
        print_r($errors);
    }
    else{
        $_SESSION['message'] = 'Your application has been sent!';
    }
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '#application');
?>