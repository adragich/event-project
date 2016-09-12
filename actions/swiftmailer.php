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
        $linkInspiration = "<b>Autor / źródło inspiracji: </b><br>".$_POST['link_inspiration'];
    }
    else{
        $linkInspiration = '';
    }

    if(isset($_POST['address']) && !empty($_POST['address'])){
        $onlinePortfolio = "<b>Adres online portfolio: </b><br>
                            <a href='://".$_POST['address']."'>".$_POST['address']."</a>";
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
                            <p><b>Imię i nazwisko:</b></p>
                            <p>".$name."</p><br>
                            <p><b>Email:</b></p>
                            <p>".$email."</p><br>
                            <p><b>Phone:</b></p>
                            <p>".$phone ."</p><br>
                            <p>".$onlinePortfolio."</p>
                            <p>".$linkInspiration."</p>
                            <p>
                                Portfolio lub inspiracja projektu w załączniku
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