<?php
	function defineStrings() {
		switch($_SESSION['lang']) {
			case "pl":
			define("TITLE","Event dla projektantów");
			define("NOTE","Przez projektantów");

			define("CITY","Poznań");
			define("COMPANY","Concordia Design");
			define("SPEAKERS","Prelegenci");
			define("SPEAKERS_NOTE","To oni opowiedzą Wam o inspiracjach i poprowadzą warsztaty.");
			define("PROJECTS","Projekcje");
			define("PROJECTS_LINK","Czym są projekcje ?");
			define("TICKETS","Bilety");
			define("BATTLES","Bitwy graficzne");
			define("BATTLES_2","Gotowi do bitwy?");
			define("BATTLES_NOTE","Pojedynek projektowy pomiędzy projektantami z całej Polski.");
			define("APPLY_TO_BATTLE","Dołącz do bitwy !");

			define("LANGUAGE","English language");
			define("HOMEPAGE","Strona główna");
			define("PROGRAM","Program");
			define("PLACE","Miejsce");
                define("PLACE_NOTE","Concordia Design, Zwierzyniecka 3, Poznań - Poland");

			define("PARTNERS","Partnerzy");
                define("PARTNERS_NOTE","Dzięki nim to wszystko staje się realne.");
			define("ABOUT_US","O nas");
			define("ABOUT_US_NOTE","Czyli czym i dla kogo są projekcje oraz kto je organizuje");

			define("PROGRAM_TITLE","Program");
			define("PROGRAM_NOTE","Wybierz to co zainteresuje Cię najbardziej.");

                define("PROGRAM_TITLE_2","Jesteśmy tutaj");
                define("PROGRAM_NOTE_2","Concordia Design, Poznań - Poland");
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
                define("PLACE_NOTE","Concordia Design, Zwierzyniecka 3, Poznań - Poland ???");
			define("PARTNERS","Partners ???");
			define("PARTNERS_NOTE","Partners ???");
			define("ABOUT_US","About us ???");

            define("PROGRAM_TITLE","Program ???");
            define("PROGRAM_NOTE","Wybierz to co zainteresuje Cię najbardziej. ???");

                define("PROGRAM_TITLE_2","Jesteśmy tutaj ???");
                define("PROGRAM_NOTE_2","Concordia Design, Poznań - Poland ???");
			break;
			default:
			define("TITLE","Event dla projektantów");
			define("NOTE","Przez projektantów");
			
			define("CITY","Poznań");
			define("COMPANY","Concordia Design");
			define("SPEAKERS","Prelegenci");
			define("SPEAKERS_NOTE","To oni opowiedzą Wam o inspiracjach i poprowadzą warsztaty.");
			define("PROJECTS","Projekcje");
			define("PROJECTS_LINK","Czym są projekcje ?");
			define("TICKETS","Bilety");
			define("BATTLES","Bitwy graficzne");
			define("BATTLES_2","Gotowi do bitwy?");
			define("BATTLES_NOTE","Pojedynek projektowy pomiędzy projektantami z całej Polski.");

			define("LANGUAGE","English language");
			define("HOMEPAGE","Strona główna");
			define("PROGRAM","Program");
                define("PLACE","Miejsce");
                define("PLACE_NOTE","Concordia Design, Zwierzyniecka 3, Poznań - Poland");
			define("PARTNERS","Partnerzy");
                define("PARTNERS_NOTE","Dzięki nim to wszystko staje się realne.");
			define("ABOUT_US","O nas");
			define("ABOUT_US_NOTE","Czyli czym i dla kogo są projekcje oraz kto je organizuje");
			define("APPLY_TO_BATTLE","Dołącz do bitwy !");


            define("PROGRAM_TITLE","Program");
            define("PROGRAM_NOTE","Wybierz to co zainteresuje Cię najbardziej.");

                define("PROGRAM_TITLE_2","Jesteśmy tutaj");
                define("PROGRAM_NOTE_2","Concordia Design, Poznań - Poland");
			break;
		}
	}
?>