<?php
    include 'swiftmailer/lib/swift_required.php';
    include '../partials/config.php';

    //data
    $name = $_POST['name'];

    $email = $_POST['email'];

    if(isset($_POST['phone']) && !empty($_POST['phone'])){
        $phone = "<p>Phone: ".$_POST['phone']."</p>";
    }
    else{
        $phone = '';
    }

    $portfolio = $_POST['portfolio'];

    if(isset($_POST['inspiration']) && !empty($_POST['inspiration'])){
        $inspiration = $_POST['inspiration'];
    }
    else{
        $inspiration = '';
    }

    if(isset($_POST['link_inspiration']) && !empty($_POST['link_inspiration'])){
        $linkInspiration = 'Link for inspiration'.$_POST['link_inspiration'];
    }
    else{
        $linkInspiration = '';
    }

    if(isset($_POST['online-portfolio']) && !empty($_POST['online-portfolio'])){
        $onlinePortfolio = 'Link for online portfolio'.$_POST['online-portfolio'];
    }
    else{
        $onlinePortfolio = '';
    }


    // Create the Transport
    $transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

    // Create the Mailer using your created Transport
    $mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance($feedback_subject)
        ->setFrom(array($feedback_from => $feedback_from_name))
        ->setTo(array($feedback_email => $feedback_username));
    $message->setBody("<html>
                        <body>
                            <h2>Application!</h2><br><br>
                            ".$name." sent an application.<br>
                            <p>Email: ".$email."</p>".
                            $phone
                            ."<p>".$onlinePortfolio."</p>
                            <p>".$linkInspiration."</p>
                            <p>
                                Watch portfolio in annex
                            </p>
                            Best regards,<br>
                            Event-project
                        </body>
                    </html>", 'text/html');

    if( $portfolio != '' && file_exists('../uploads/'.$portfolio)){
        $message->attach(Swift_Attachment::fromPath('../uploads/'.$portfolio));
    }

    if($inspiration != '' && file_exists('../uploads/'.$inspiration)) {
        $message->attach(Swift_Attachment::fromPath('../uploads/' . $inspiration));
    }
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