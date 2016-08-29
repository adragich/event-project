<?php
	function defineStrings() {

//    links
//        battles
        define("BATTLES_LINK_1","https://www.behance.net/kirpluk");
        define("BATTLES_LINK_2","https://www.behance.net/ploch");
        define("BATTLES_LINK_3","https://www.behance.net/crislabno");
        define("BATTLES_LINK_4","https://www.behance.net/sarnowski");
        define("BATTLES_LINK_5","https://www.behance.net/fusecollective");
        define("BATTLES_LINK_6","https://www.behance.net/janiczak");


//        speakers
        define("SPEAKER_LINK_1","https://an.linkedin.com/in/krishermansson");
        define("SPEAKER_LINK_2","https://nl.linkedin.com/in/marcusabrown");
        define("SPEAKER_LINK_3","https://pl.linkedin.com/in/arek-romański-448a575a");
        define("SPEAKER_LINK_4","https://pl.linkedin.com/in/lukasz-knasiecki-56803a8");
        define("SPEAKER_LINK_5","https://pl.linkedin.com/in/piotr-holub-24bb9221");
        define("SPEAKER_LINK_6","http://www.hopastudio.com");
        define("SPEAKER_LINK_7","https://pl.linkedin.com/in/grzegorzrog");
        define("SPEAKER_LINK_8","https://pl.linkedin.com/in/martyna-wędzicka-69343252");
        define("SPEAKER_LINK_9","http://lesstudio.pl");
        define("SPEAKER_LINK_10","https://pl.linkedin.com/in/patryk-hardziej-0a305884");
        define("SPEAKER_LINK_11","http://allegro.pl");
        define("SPEAKER_LINK_12","https://www.behance.net/magierski/");
        define("SPEAKER_LINK_13","https://pl.linkedin.com/in/andrzej-jakuszko-553402b2");
        define("SPEAKER_LINK_14","https://www.linkedin.com/in/bartekkotowicz");

//        partners
        define("PARTNER_LINK_1","http://allegro.pl");
        define("PARTNER_LINK_2","https://redro.pl");

        define("PARTNER_LINK_3","https://www.concordiadesign.pl");
        define("PARTNER_LINK_4","http://purohotel.pl/poznan");
        define("PARTNER_LINK_5","http://stgu.pl");
        define("PARTNER_LINK_6","http://eduweb.pl");

//        define("PARTNER_LINK_7","http://allegro.pl");

        define("PARTNER_LINK_8","http://www.cssdesignawards.com");
        define("PARTNER_LINK_9","http://visualheads.pl");
        define("PARTNER_LINK_10","https://krugerlegal.com/pl/");
        define("PARTNER_LINK_11","http://torpedov.com");
        define("PARTNER_LINK_12","http://brandingowy.pl");

        define("PARTNER_LINK_13","http://wtk.pl");
        define("PARTNER_LINK_14","http://hatalska.com");
        define("PARTNER_LINK_15","http://tuumagazyn.pl");
        define("PARTNER_LINK_16","http://grafmag.pl");
        define("PARTNER_LINK_17","http://nowymarketing.pl");
        define("PARTNER_LINK_18","http://epoznan.pl");
        define("PARTNER_LINK_19","http://www.gloswielkopolski.pl");
        define("PARTNER_LINK_20","http://poznan.naszemiasto.pl");

        define("PARTNER_LINK_21","https://www.behance.net/kommunikat");
        define("PARTNER_LINK_22","http://piotrswierkowski.com");
        define("PARTNER_LINK_23","https://www.behance.net/edmk");
        define("PARTNER_LINK_24","http://fromsquare.com");

//        about
        define("ABOUT_LINK_1","https://www.behance.net/kommunikat");
        define("ABOUT_LINK_2","https://pl.linkedin.com/in/piotr-swierkowski-24728499");
        define("ABOUT_LINK_3","https://pl.linkedin.com/in/ewelinadmk");
        define("ABOUT_LINK_4","https://www.behance.net/fromsquare");

        define("ABOUT_IMAGE_1","projections-about_21.png");
        define("ABOUT_IMAGE_2","projections-about_22.png");
        define("ABOUT_IMAGE_3","projections-about_23.png");
        define("ABOUT_IMAGE_4","projections-about_24.png");

		switch($_SESSION['lang']) {
			case "en":
                define("META_TITLE","Projekcje - Design Conference");
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
                define("LEARN_MORE","Więcej");
                define("BATTLES","Bitwy graficzne");
                define("META_TITLE","Projekcje - Konferencja graficzna");

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

                define("SPEAKER_NAME_1","Kriss Hermansson");
                define("SPEAKER_DESC_1","Creative Director at Resn");
                define("SPEAKER_WEBSITE_1","resn.co.nz");

                define("SPEAKER_NAME_2","Marcus Brown");
                define("SPEAKER_DESC_2","Senior Art Director w Resn / Amsterdam");
                define("SPEAKER_WEBSITE_2","resn.co.nz");

                define("SPEAKER_NAME_3","Arek Romański");
                define("SPEAKER_DESC_3","Co-founder/Art Director w Huncwot / Warszawa");
                define("SPEAKER_WEBSITE_3","huncwot.com");

                define("SPEAKER_NAME_4","Łukasz Knasiecki");
                define("SPEAKER_DESC_4","Partner w Huncwot / Warszawa");
                define("SPEAKER_WEBSITE_4","huncwot.com");

                define("SPEAKER_NAME_5","Piotr Hołub");
                define("SPEAKER_DESC_5","Partner w Hopa Studio / Warszawa");
                define("SPEAKER_WEBSITE_5","hopastudio.com");

                define("SPEAKER_NAME_6","Marcin Paściak");
                define("SPEAKER_DESC_6","Partner w Hopa Studio / Warszawa");
                define("SPEAKER_WEBSITE_6","hopastudio.com");

                define("SPEAKER_NAME_7","Grzegorz Róg");
                define("SPEAKER_DESC_7","Właściciel w eduweb.pl / Warszawa");
                define("SPEAKER_WEBSITE_7","eduweb.pl");

                define("SPEAKER_NAME_8","Martyna Wędzicka");
                define("SPEAKER_DESC_8","Partner w less. / Gdańsk");
                define("SPEAKER_WEBSITE_8","lesstudio.pl");

                define("SPEAKER_NAME_9","Gosia Perkowska");
                define("SPEAKER_DESC_9","Partner w less. / Gdańsk");
                define("SPEAKER_WEBSITE_9","lesstudio.pl");

                define("SPEAKER_NAME_10","Patryk Hardziej");
                define("SPEAKER_DESC_10","Właściciel w negation / Gdańsk");
                define("SPEAKER_WEBSITE_10","negationstudio.com");

                define("SPEAKER_NAME_11","Allegro");
                define("SPEAKER_DESC_11","Allegro");
                define("SPEAKER_WEBSITE_11","allegro.pl");

                define("SPEAKER_NAME_12","Wojciech Magierski");
                define("SPEAKER_DESC_12","Digital Artist / Art Director / Kraków");
                define("SPEAKER_WEBSITE_12","magierski.pl");

                define("SPEAKER_NAME_13","Andrzej Jakuszko");
                define("SPEAKER_DESC_13","Set Designer/ Poznań");
                define("SPEAKER_WEBSITE_13","mutostudio.com");

                define("SPEAKER_NAME_14","Bartek Kotowicz");
                define("SPEAKER_DESC_14","Właściciel brandingowy.pl / Gdańsk");
                define("SPEAKER_WEBSITE_14","brandingowy.pl");

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
                define("TICKETS_NOTE_1","Na ten warsztat, jak i pozostałe, możesz zapisać się wybierając opcję kupna 
                        biletu wraz  z warsztatem.");
                define("TICKETS_NOTE_2","Warsztaty nie są dodatkowo płatne, jednak ilośc miejsc jest ograniczona, zatem 
                        kto pierwszy ten lepszy :)");

                define("WORKSHOPS_NOTE","projektowe");
                define("WORKSHOPS_ROLE","Prowadzący:");
                define("WORKSHOPS_TOPIC","Opis warsztatu:");

                define("WORKSHOPS_TITLE_1","ZBrush + Modo");
                define("WORKSHOPS_SUBTITLE_1","Podstawy projektowania 3D.");
                define("WORKSHOPS_PERSON_1","Wojtek Magierski");
                define("WORKSHOPS_WEBSITE_1","magierski.pl");
                define("WORKSHOPS_CONTENT_1","Wojciech Magierski - ilustrator, artysta cyfrowy - urodził się w 1983 r.
						Na co dzień mieszka i pracuje w Krakowie. Jego ilustracje publikowane są w magazynach
						graficznych na całym świecie.");
                define("WORKSHOPS_MODAL_CONTENT_1","ZBrush Workshop oraz MODO, to pozycje obowiązkowa dla każdego, kto 
                        chce dowiedzieć się jak wykorzystać te fantastyczne narzędzia w zapierających dech w piersiach 
                        projektach. Podczas warsztatów uczestnicy dowiedzą się jak są tworzone światowej klasy 
                        ilustracje. Wejdziesz w niesamowity świat możliwości Modo oraz Zbrush’a z Wojtkiem Magierskim. 
                        Połączysz magię postprodukcji w Photoshop i wolności tworzenia obiektów 3D aby uzyskać 
                        powalające efekty i przewyższyć oczekiwania klientów, przy okazji odkrywając sekrety światowej 
                        klasy ilustratora.<br><br>
                        Wojtek Magierski na podstawie swoich prac przedstawi m.in. niesamowite możliwości rzeźbienia w 
                        Zbrush’u. Począwszy od stworzenia trójwymiarowej siatki postaci przez wycinanie i kolorowanie 
                        aż po postprodukcję.");

                define("WORKSHOPS_TITLE_2","Set Design");
                define("WORKSHOPS_SUBTITLE_2","Złoty styropian, czyli Set Design w fotografii projektów.");
                define("WORKSHOPS_PERSON_2","Andrzej Jakuszko");
                define("WORKSHOPS_WEBSITE_2","mutostudio.pl");
                define("WORKSHOPS_CONTENT_2","Muto - multidyscyplinarne studio projektowe z Poznania. Skupia się na 
                        tworzeniu komunikacjiwizualnej, zwracając uwagę na wysoką kulturę dialogu marek z odbiorcami.");
                define("WORKSHOPS_MODAL_CONTENT_2","Szkło w tubce, guma w sprayu, dym bez ognia... Podczas warsztatów
                        uczestnicy zapoznają się z praktycznym podejściem do procesu fotografii
                        projektów.
                        <br><br>
                        Począwszy od tworzenia wygodnego stanowiska pracy, poprzez dobór
                        elementów scenografii i technik fotograficznych, na realizacji sesji zdjęciowej
                        kończąc.
                        <br><br>
                        Prowadzący przedstawią sposoby, których używają aby budować odrealnione
                        i abstrakcyjne sceny, podnoszące walory estetyczne fotografowanych
                        przedmiotów.");

                define("WORKSHOPS_TITLE_3","Warsztat²");
                define("WORKSHOPS_SUBTITLE_3","");
                define("WORKSHOPS_PERSON_3","Bartek Kotowicz");
                define("WORKSHOPS_WEBSITE_3","brandingowy.pl");
                define("WORKSHOPS_CONTENT_3","brandingowy.pl - to przestrzeń marek i ludzi, którzy na co dzień je 
                        tworzą. Śledzą trendy, analizują działania, a także opisują zmiany w sferze brandingu, zarówno 
                        w Polsce, jak i za granicą.");
                define("WORKSHOPS_MODAL_CONTENT_3","Warsztat do drugiej potęgi to nietypowy trening umiejętności, którego
                        przewrotnym tematem przewodnim będzie sam warsztat projektanta oraz
                        biznesowa realizacja projektów z obszaru brandingu. W trakcie warsztatu
                        pochylimy się m.in. nad narzędziami i sposobami pozyskiwania inspiracji
                        oraz jej roli w projektach brandingowych. Będzie także o trendach, ich
                        analizie oraz o przekładaniu inspiracji na rzeczywiste potrzeby i oczekiwania
                        klienta.
                        <br><br>
                        Warsztat² to także formuła angażująca uczestników, której bazą będą
                        aktywne metody warsztatowe (praca w małych grupach, analiza studiów
                        przypadków, gry symulacyjne, prezentacje, burza mózgów). Warsztat
                        będzie okazją do wymiany opinii i najlepszych praktyk pomiędzy samymi
                        uczestnikami, jak również do zastosowania zdobytych kompetencji w
                        praktyce.
                        <br><br>
                        Doświadczenia edukacyjne jakie zbiorą uczestnicy pozwolą
                        szerzej spojrzeć na sposób realizowanych przez siebie projektów oraz na
                        usprawnienie współpracy z klientem.");

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
                define("SPONSORS","Sponsorzy");
                define("MEDIA","Patroni medialni");
                define("ORGS","Organizatorzy");

//                about
                define("ABOUT_US_NOTE","Czyli czym i dla kogo są projekcje oraz kto je organizuje");
                define("ABOUT_US_TITLE_1","Projekcje to pomysł projektantów graficznych");
                define("ABOUT_US_DESC_1","
							Projekcje są imprezą organizowaną przez projektantów graficznych, dla projektantów 
							graficznych. Event ma integrować środowisko projektantów, ale przede wszystkim ma być 
							inspiracją do dalszego tworzenia.
                            <br><br>
                            Chcemy rozbudzić nowe wizje, podsunąć nowe pomysły i zmotywować projektantów do 
                            poszukiwania nowych środków ekspresji.
                            <br><br>
                            Chcemy się skupić na pasji tworzenia, pielęgnować ją oraz rozwijać.");
                define("ABOUT_US_TITLE_2","Tematem pierwszej edycji są Inspiracje");
                define("ABOUT_US_DESC_2","Projekcje mają na celu zainspirować nie tylko młodych projektantów na 
                        początku ich drogi, ale przede wszystkim natchnąć kreatywnie projektantów pracujących 
                        zawodowo i przypomnieć im, że projektowanie nie zna granic poza tymi, które sami sobie 
                        postawiliśmy.");
                define("ABOUT_US_TITLE_3","Organizatorzy projekcji");
                define("ABOUT_US_DESC_3","Projektanci graficzni dla projektantów graficznych.");

                define("ABOUT_TITLE_1","Kommunikat");
                define("ABOUT_SUBTITLE_1","Brand Design Studio");
                define("ABOUT_WEBSITE_1","www.behance.net/kommunikat");

                define("ABOUT_TITLE_2","Piotr Świerkowski");
                define("ABOUT_SUBTITLE_2","Owner / Art Director at Torpedov.com");
                define("ABOUT_WEBSITE_2","www.torpedov.com");

                define("ABOUT_TITLE_3","Ewelina Dymek");
                define("ABOUT_SUBTITLE_3","Illustrator at Uniforma Studio");
                define("ABOUT_WEBSITE_3","www.behance.net/edmk");

                define("ABOUT_TITLE_4","Fromsquare");
                define("ABOUT_SUBTITLE_4","Design Studio");
                define("ABOUT_WEBSITE_4","www.fromsquare.com");


//                battles ???
                define("BATTLES_NOTE","Pojedynek projektowy pomiędzy projektantami z całej Polski.");
                define("BATTLES_2","Gotowi do bitwy?");
                define("APPLY_TO_BATTLE","Pobierz szablon i rozpocznij projekt");
                define("PROJECTS_LINK","Wróć do strony głównej");

			break;
		}

	}
?>