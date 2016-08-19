<?php
	//assign domain
	$domain = "http://event-project.myhomezy.com/";
    $feedback_email = 'anastasiia.dragich@gmail.com';
    $feedback_subject = 'Application';
	//$domain = "http://localhost/event/";


    if (isset($_SESSION['previous'])) {
        if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
            session_destroy();
        }
    }
?>