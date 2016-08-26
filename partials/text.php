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
                define("SPEAKERS_NOTE","Opowiedzą o inspiracji.");

//                schedule
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

//                workshops
                define("WORKSHOPS_NOTE","projektowe");
                define("WORKSHOPS_ROLE","Prowadzący:");

                define("WORKSHOPS_TITLE_1","Modo 3D");
                define("WORKSHOPS_SUBTITLE_1","Podstawy projektowania 3D.");
                define("WORKSHOPS_PERSON_1","Wojtek Magierski");
                define("WORKSHOPS_WEBSITE_1","magierski.pl");
                define("WORKSHOPS_CONTENT_1","Wojciech Magierski - ilustrator, artysta cyfrowy - urodził się w 1983 r.
						Na co dzień mieszka i pracuje w Krakowie. Jego ilustracje publikowane są w magazynach
						graficznych na całym świecie. W dosyć krótkiej karierze zawodowej osiągnął m.in.
						dwa znaczące sukcesy - jego projekty zostały zamieszczone na okładkach magazynów Advanced
						Photoshop w Wielkiej Brytanii oraz Computer Arts w Polsce.");

                define("WORKSHOPS_TITLE_2","Set Design");
                define("WORKSHOPS_SUBTITLE_2","Złoty styropian, czyli Set Design w fotografii projektów.");
                define("WORKSHOPS_PERSON_2","Andrzej Jakuszko");
                define("WORKSHOPS_WEBSITE_2","mutostudio.pl");
                define("WORKSHOPS_CONTENT_2","Muto - multidyscyplinarne studio projektowe z Poznania. Skupia się na 
                        tworzeniu komunikacjiwizualnej, zwracając uwagę na wysoką kulturę dialogu marek z odbiorcami.
                        W swoich realizacjach koncentrują się na przestrzeni otaczającej nośniki z wizerunkiem marki,a 
                        zainspirowani rzeczywistością poszukują w niej atrakcyjnych form i przedmiotów.");

                define("WORKSHOPS_TITLE_3","Temat warsztatu");
                define("WORKSHOPS_SUBTITLE_3","Nazwa dokładna warsztatu.");
                define("WORKSHOPS_PERSON_3","Bartek Kotowicz");
                define("WORKSHOPS_WEBSITE_3","brandingowy.pl");
                define("WORKSHOPS_CONTENT_3","brandingowy.pl - to przestrzeń marek i ludzi, którzy na co dzień je 
                        tworzą. Śledzą trendy, analizują działania, a także opisują zmiany w sferze brandingu, zarówno 
                        w Polsce, jak i za granicą. Bez względu na to, czy idea kreacji marki jest Ci bliska, 
                        czy dopiero zaczynasz przygodę z tą tematyką – na pewno znajdziesz tam sporo wartościowych 
                        treści.");

//                venue
                define("PLACE_NOTE","Concordia Design, Zwierzyniecka 3, Poznań - Poland");
                define("PLACE_TITLE_1","Concordia Design");
                define("PLACE_DESCRIPTION_1","
                         Partnerem Projekcji jest centrum designu Concordia Design,
                        gdzie odbędą się Projekcje dnia 5 listopada 2016 roku.");

                define("PLACE_TITLE_2","Sala wykładowa i sale warsztatowe");
                define("PLACE_DESCRIPTION_2","Do dyspozycji prelegentów i gości będzie Sala Lumina oraz sale warsztatowe
                                tzw. Creative Rooms gdzie odbędą się zajęcia z projektantami graficznymi
                                prowadzącymi warsztaty podczas Konferencji.");

                define("PLACE_TITLE_3","Tutaj zaczerpniesz inspiracji");
                define("PLACE_DESCRIPTION_3"," Konferencja oraz warsztaty odbędą się w poznańskim centrum
                    designu Concordia Design mieszczącym się przy ul. Zwierzynieckiej 3.");

//                partners
                define("PARTNERS_NOTE","Dzięki nim to wszystko staje się realne.");
                define("MAIN_PARTNERS","Główni sponsorzy");

//                about
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
                define("APPLY_TO_BATTLE","Pobierz szablon i rozpocznij projekt");
                define("PROJECTS_LINK","Wróć do strony głównej");

			break;
			case "en":
//			      common
                define("LEARN_MORE","Learn more ???");
                define("BATTLES","Bitwy graficzne ???");

//                menu
                define("LANGUAGE","Polish language ???");
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

//                schedule
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

//                venue
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

//                about
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
                define("PROJECTS_LINK","Wróć do strony głównej ???");
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

//                schedule
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

//               venue
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

//                about
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
                define("PROJECTS_LINK","Wróć do strony głównej");
			break;
		}
	}
?>