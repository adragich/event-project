<?php
	function defineStrings() {
		switch($_SESSION['lang']) {
			case "pl":

//			      common
                define("LEARN_MORE","Learn more");
                define("BATTLES","Bitwy graficzne");

//                menu
                define("LANGUAGE","English language");
                define("HOMEPAGE","Strona główna");
                define("SPEAKERS","Prelegenci");
                define("PROGRAM","Program");
                define("PLACE","Miejsce");
                define("PARTNERS","Partnerzy");
                define("ABOUT_US","O nas");
                define("TICKETS","Bilety");
                define("WORKSHOPS","Warsztaty");

//			      main page
                define("PROJECTS","Projekcje");

                define("TITLE","Konferencja graficzna");
                define("NOTE","dla miłośników designu");

                define("CITY","Poznań");
                define("COMPANY","Concordia Design");


//                speakers
                define("SPEAKERS_NOTE","To oni opowiedzą Wam o inspiracjach i poprowadzą warsztaty.");

//                program
                define("PROGRAM_TITLE","Program");
                define("PROGRAM_NOTE","Wybierz to co zainteresuje Cię najbardziej.");
                define("PROGRAM_TITLE_2","Jesteśmy tutaj");
                define("PROGRAM_NOTE_2","Concordia Design, Poznań - Poland");
                define("MONTH","November");
                define("PROGRAM_TYPE_1","Prelekcje");
                define("PROGRAM_TYPE_2","Warsztaty");
                define("APPLY_WORKSHOP","Apply for workshop");
                define("PROGRAM_DESCRIPTION_1","Projektowanie aplikacji w praktyce");
                define("PROGRAM_DESCRIPTION_2","Inspiracje w projektowaniu marki");
                define("PROGRAM_DESCRIPTION_3","Ilustracje abstrakcyjne");
                define("PROGRAM_DESCRIPTION_4","Inspiracja marką");
                define("PROGRAM_DESCRIPTION_5","Something new...");

//                place
                define("PLACE_NOTE","Concordia Design, Zwierzyniecka 3, Poznań - Poland");
                define("PLACE_TITLE_1","Sala expo w Concordia Design");
                define("PLACE_DESCRIPTION_1","Spacious and easy to arrange – ideal for conferences, banquets, concerts, team-building events, fashion shows, and many other occasions.");
                define("PLACE_TITLE_2","Sale warsztatowe w Concordia Design");
                define("PLACE_DESCRIPTION_2","Spacious and easy to arrange – ideal for conferences, banquets,concerts, team-building events, fashion shows, and many other occasions.");
                define("PLACE_TITLE_3","228 m²");
                define("PLACE_DESCRIPTION_3","The interior can be freely divided to create additional space.");

//                partners
                define("PARTNERS_NOTE","Dzięki nim to wszystko staje się realne.");
                define("MAIN_PARTNERS","Główni sponsorzy");

//                about us
                define("ABOUT_US_NOTE","Czyli czym i dla kogo są projekcje oraz kto je organizuje");
                define("ABOUT_US_TITLE_1","Projekcje to pomysł projektantów");
                define("ABOUT_US_DESC_1","
							Spacious and easy to arrange – ideal for conferences, banquets, concerts, team-building 
							events. It was popularised in the 1960s with the release of Letraset sheets containing 
							Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
							PageMaker including versions of Lorem Ipsum.");
                define("ABOUT_US_TITLE_2","Dla projektantów");
                define("ABOUT_US_DESC_2","
							Spacious and easy to arrange – ideal for conferences, banquets, concerts, team-building 
							events. It was popularised in the 1960s with the release of Letraset sheets containing 
							Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
							PageMaker including versions of Lorem Ipsum.");
                define("ABOUT_US_TITLE_3","Organizatorzy projekcji");
                define("ABOUT_US_DESC_3","Projektanci organizujący event dla projektantów.");

//                battles ???
                define("BATTLES_NOTE","Pojedynek projektowy pomiędzy projektantami z całej Polski.");
                define("BATTLES_2","Gotowi do bitwy?");
                define("APPLY_TO_BATTLE","Dołącz do bitwy !");
                define("PROJECTS_LINK","Czym są projekcje ?");

			break;
			case "en":
//			      common
                define("LEARN_MORE","Learn more ???");
                define("BATTLES","Bitwy graficzne ???");

//                menu
                define("LANGUAGE","English language ???");
                define("HOMEPAGE","Strona główna ???");
                define("SPEAKERS","Prelegenci ???");
                define("PROGRAM","Program ???");
                define("PLACE","Miejsce ???");
                define("PARTNERS","Partnerzy ???");
                define("ABOUT_US","O nas ???");
                define("TICKETS","Bilety ???");
                define("WORKSHOPS","Workshops ???");

//			      main page
                define("PROJECTS","Projekcje ???");

                define("TITLE","Event dla projektantów ???");
                define("NOTE","Przez projektantów ???");

                define("CITY","Poznań ???");
                define("COMPANY","Concordia Design ???");


//                speakers
                define("SPEAKERS_NOTE","To oni opowiedzą Wam o inspiracjach i poprowadzą warsztaty. ???");

//                program
                define("PROGRAM_TITLE","Program ???");
                define("PROGRAM_NOTE","Wybierz to co zainteresuje Cię najbardziej. ???");
                define("PROGRAM_TITLE_2","Jesteśmy tutaj ???");
                define("PROGRAM_NOTE_2","Concordia Design, Poznań - Poland ???");
                define("MONTH","November ???");
                define("PROGRAM_TYPE_1","Prelekcje ???");
                define("PROGRAM_TYPE_2","Warsztaty ???");
                define("APPLY_WORKSHOP","Apply for workshop ???");
                define("PROGRAM_DESCRIPTION_1","Projektowanie aplikacji w praktyce ???");
                define("PROGRAM_DESCRIPTION_2","Inspiracje w projektowaniu marki ???");
                define("PROGRAM_DESCRIPTION_3","Ilustracje abstrakcyjne ???");
                define("PROGRAM_DESCRIPTION_4","Inspiracja marką ???");
                define("PROGRAM_DESCRIPTION_5","Something new... ???");

//                place
                define("PLACE_NOTE","Concordia Design, Zwierzyniecka 3, Poznań - Poland ???");
                define("PLACE_TITLE_1","Sala expo w Concordia Design ???");
                define("PLACE_DESCRIPTION_1","Spacious and easy to arrange – ideal for conferences, banquets, concerts, team-building events, fashion shows, and many other occasions. ???");
                define("PLACE_TITLE_2","Sale warsztatowe w Concordia Design ???");
                define("PLACE_DESCRIPTION_2","Spacious and easy to arrange – ideal for conferences, banquets,concerts, team-building events, fashion shows, and many other occasions. ???");
                define("PLACE_TITLE_3","228 m² ???");
                define("PLACE_DESCRIPTION_3","The interior can be freely divided to create additional space. ???");

//                partners
                define("PARTNERS_NOTE","Dzięki nim to wszystko staje się realne. ???");
                define("MAIN_PARTNERS","Główni sponsorzy ???");

//                about us
                define("ABOUT_US_NOTE","Czyli czym i dla kogo są projekcje oraz kto je organizuje ???");
                define("ABOUT_US_TITLE_1","Projekcje to pomysł projektantów ???");
                define("ABOUT_US_DESC_1","
							Spacious and easy to arrange – ideal for conferences, banquets, concerts, team-building 
							events. It was popularised in the 1960s with the release of Letraset sheets containing 
							Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
							PageMaker including versions of Lorem Ipsum. ???");
                define("ABOUT_US_TITLE_2","Dla projektantów ???");
                define("ABOUT_US_DESC_2","
							Spacious and easy to arrange – ideal for conferences, banquets, concerts, team-building 
							events. It was popularised in the 1960s with the release of Letraset sheets containing 
							Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
							PageMaker including versions of Lorem Ipsum. ???");
                define("ABOUT_US_TITLE_3","Organizatorzy projekcji ???");
                define("ABOUT_US_DESC_3","Projektanci organizujący event dla projektantów. ???");

//                battles ???
                define("BATTLES_NOTE","Pojedynek projektowy pomiędzy projektantami z całej Polski. ???");
                define("BATTLES_2","Gotowi do bitwy? ???");
                define("APPLY_TO_BATTLE","Dołącz do bitwy ! ???");
                define("PROJECTS_LINK","Czym są projekcje ? ???");
			break;
			default:

//			      common
                define("LEARN_MORE","Learn more");
                define("BATTLES","Bitwy graficzne");

//                menu
                define("LANGUAGE","English language");
                define("HOMEPAGE","Strona główna");
                define("SPEAKERS","Prelegenci");
                define("PROGRAM","Program");
                define("PLACE","Miejsce");
                define("PARTNERS","Partnerzy");
                define("ABOUT_US","O nas");
                define("TICKETS","Bilety");
                define("WORKSHOPS","Warsztaty");

//			      main page
                define("PROJECTS","Projekcje");

                define("TITLE","Konferencja graficzna");
                define("NOTE","dla miłośników designu");

                define("CITY","Poznań");
                define("COMPANY","Concordia Design");


//                speakers
                define("SPEAKERS_NOTE","To oni opowiedzą Wam o inspiracjach i poprowadzą warsztaty.");

//                program
                define("PROGRAM_TITLE","Program");
                define("PROGRAM_NOTE","Wybierz to co zainteresuje Cię najbardziej.");
                define("PROGRAM_TITLE_2","Jesteśmy tutaj");
                define("PROGRAM_NOTE_2","Concordia Design, Poznań - Poland");
                define("MONTH","November");
                define("PROGRAM_TYPE_1","Prelekcje");
                define("PROGRAM_TYPE_2","Warsztaty");
                define("APPLY_WORKSHOP","Apply for workshop");
                define("PROGRAM_DESCRIPTION_1","Projektowanie aplikacji w praktyce");
                define("PROGRAM_DESCRIPTION_2","Inspiracje w projektowaniu marki");
                define("PROGRAM_DESCRIPTION_3","Ilustracje abstrakcyjne");
                define("PROGRAM_DESCRIPTION_4","Inspiracja marką");
                define("PROGRAM_DESCRIPTION_5","Something new...");

//                place
                define("PLACE_NOTE","Concordia Design, Zwierzyniecka 3, Poznań - Poland");
                define("PLACE_TITLE_1","Sala expo w Concordia Design");
                define("PLACE_DESCRIPTION_1","Spacious and easy to arrange – ideal for conferences, banquets, concerts, team-building events, fashion shows, and many other occasions.");
                define("PLACE_TITLE_2","Sale warsztatowe w Concordia Design");
                define("PLACE_DESCRIPTION_2","Spacious and easy to arrange – ideal for conferences, banquets,concerts, team-building events, fashion shows, and many other occasions.");
                define("PLACE_TITLE_3","228 m²");
                define("PLACE_DESCRIPTION_3","The interior can be freely divided to create additional space.");

//                partners
                define("PARTNERS_NOTE","Dzięki nim to wszystko staje się realne.");
                define("MAIN_PARTNERS","Główni sponsorzy");

//                about us
                define("ABOUT_US_NOTE","Czyli czym i dla kogo są projekcje oraz kto je organizuje");
                define("ABOUT_US_TITLE_1","Projekcje to pomysł projektantów");
                define("ABOUT_US_DESC_1","
							Spacious and easy to arrange – ideal for conferences, banquets, concerts, team-building 
							events. It was popularised in the 1960s with the release of Letraset sheets containing 
							Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
							PageMaker including versions of Lorem Ipsum.");
                define("ABOUT_US_TITLE_2","Dla projektantów");
                define("ABOUT_US_DESC_2","
							Spacious and easy to arrange – ideal for conferences, banquets, concerts, team-building 
							events. It was popularised in the 1960s with the release of Letraset sheets containing 
							Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
							PageMaker including versions of Lorem Ipsum.");
                define("ABOUT_US_TITLE_3","Organizatorzy projekcji");
                define("ABOUT_US_DESC_3","Projektanci organizujący event dla projektantów.");

//                battles ???
                define("BATTLES_NOTE","Pojedynek projektowy pomiędzy projektantami z całej Polski.");
                define("BATTLES_2","Gotowi do bitwy?");
                define("APPLY_TO_BATTLE","Dołącz do bitwy !");
                define("PROJECTS_LINK","Czym są projekcje ?");
			break;
		}
	}
?>