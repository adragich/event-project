<?php
	//TODO: fix cleaning the session after changing page
	//Starting the session
	session_start();
	//This is the default language. We will use it 2 places, so i am put it 
	//into a varaible.
    if (empty($_GET["lang"])) {
		$_SESSION['lang'] = "pl";
		$currLang = "pl";
	} 
	else {
		$currLang = $_GET['lang'];
		$_SESSION['lang'] = $currLang;
	}
	switch($currLang) {
		case "pl":
		define("CHARSET","UTF-8");
		define("LANGCODE", "pl");
		$toChange = "en";
		break;
		case "en":
		define("CHARSET","ISO-8859-1");
		define("LANGCODE", "en");
		$toChange = "pl";
		break;
		default:
		define("CHARSET","UTF-8");
		define("LANGCODE", "pl");
		$toChange = "en";
		break;
    }
	header("Content-Type: text/html;charset=".CHARSET);
	header("Content-Language: ".LANGCODE);
	defineStrings();
?>