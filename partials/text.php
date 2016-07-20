<?php
	function defineStrings() {
		switch($_SESSION['lang']) {
			case "pl":
			define("TITLE","Event dla projektantów");
			define("NOTE","Przez projektantów");

			define("CITY","Poznań");
			define("COMPANY","Concordia Design");
			define("SPEAKERS","Prelegenci");
			define("PROJECTS","Projekcje");
			define("TICKETS","Bilety");
			define("BATTLES","Bitwy graficzne");

			define("LANGUAGE","English language");
			define("HOMEPAGE","Strona główna");
			define("PROGRAM","Program");
			define("PLACE","Miejsce");
			define("PARTNERS","Partnerzy");
			define("ABOUT_US","O nas");
			break;
			case "en":
			define("TITLE","Event page ???");
			define("NOTE","Event page note ???");
			
			define("CITY","Poznan ???");
			define("COMPANY","Concordia Design ???");
			define("SPEAKERS","SPEAKERS ???");
			define("PROJECTS","PROJECTS ???");
			define("TICKETS","TICKETS ???");
			define("BATTLES","BATTLES ???");

			define("LANGUAGE","Polish language ???");
			define("HOMEPAGE","Homepage ???");
			define("PROGRAM","Program ???");
			define("PLACE","Place ???");
			define("PARTNERS","Partners ???");
			define("ABOUT_US","About us ???");
			break;
			default:
			define("TITLE","Event dla projektantów");
			define("NOTE","Przez projektantów");
			
			define("CITY","Poznań");
			define("COMPANY","Concordia Design");
			define("SPEAKERS","Prelegenci");
			define("PROJECTS","Projekcje");
			define("TICKETS","Bilety");
			define("BATTLES","Bitwy graficzne");

			define("LANGUAGE","English language");
			define("HOMEPAGE","Strona główna");
			define("PROGRAM","Program");
			define("PLACE","Miejsce");
			define("PARTNERS","Partnerzy");
			define("ABOUT_US","O nas");
			break;
		}
	}
?>