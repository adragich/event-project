<!DOCTYPE html>
<html>
<head>
	<title>Meta title</title>
	<?php
		@include("partials/head.php");
	?>

</head>
<body>
	<!--block for animation-->
	<!--TODO: create unique block for the page-->
	<?php
		@include("partials/preloader-battles.html");
	?>
	<section class="static-content transition">
		<div class="container">
			<!--header-->
			<?php
				@include("partials/top-battles.html");
			?>

			<div class="main fillAndCenter battles sub flex flex-center padding-2x" data-parallax='{"y" : -300, "smoothness": 20}'>
				<div class="inside">
					<p class="mainTitle"><?php echo BATTLES_2;?></p>
					<p class="note"><?php echo BATTLES_NOTE;?></p>
					<a href="#application" class="event-link apply-trigger yellow toLeft"><?php echo APPLY_TO_BATTLE;?></a>
				</div>
			</div>
			<!--button for menu-->
			<?php
			@include("partials/menu-button.html")
			?>
			<div class="navigation battles" data-scroll="300" data-parallax='{"y" : -300, "smoothness": 20}'>
				<i class="fa fa-angle-down" aria-hidden="true" ></i>
			</div>
		</div>
	</section>	
	<section class="battle-info-wrap relative">
		<div class="container">
			<div class="battle-info">
				<p class='mainTitle battle-info padded-battle-info image-title'>Bitwy graficzne</p>
				<div class="inside battle-info">
					<p class="subtitle">Głównym zadaniem Bitew będzie stworzenie własnej
						interpretacji graficznej dla logo Projekcji, według dostarczonego wcześniej
						szablonu. Chodzi przede wszystkim o pomysł i kreatywność, <br>
						ale jakość realizacji też będzie miała znaczenie.
					</p>
<!--					<p class="block-content">Bitwy mają na celu integrację poprzez wspólne projektowanie. Wspólne-->
<!--					projektowanie przekłada się natomiast na prezentację swoich umiejętności-->
<!--					szerszemu gronu jak i wymianę doświadczeń. </p>-->
					<p class="offset-top"></p>
					<p class="subtitle bold no-margin">Jak przebiegać będzie bitwa ?</p>

					<p class="block-content">
						Spośród nadesłanych prac Jury wybierze najciekawsze projekty, które zaprezentujemy na
						wernisażu podczas Projekcji, 5 listopada 2016 roku w Concordia Design.
					</p>
					<p class="block-content">
						Uczestnicy Projekcji wybiorą z kolei zwycięzcę w głosowaniu, a wyniki ogłosimy na zakończenie 
						Konferencji. Wtedy odbędzie się też rozdanie nagród.

					</p>
					<p class="block-content">
						Do Jury zaprosiliśmy uznanych i utalentowanych projektantów, którzy wyłonią finalistów. 
						Wszystkie nadesłane prace zostaną również zaprezentowane w formie galerii na stronie
						internetowej bitwy.projections.pl
					</p>
<!--					<p class="subtitle bold">Finalne kreacje zostaną przedstawione podczas-->
<!--					wernisażu w dniu konferencji.</p>-->
				</div>
			</div>
		</div>
	</section>

	<section class="scrollableContent time-limits">
		<div class="container">
			<div class="battle-info">
				<div class="inside battle-info left-align">
					<p class="subtitle bold no-margin">Prace można nadsyłać od
						<span class="dateGrey">15-09-2016</span> do <span class="dateGrey">15-10-2016</span>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="scrollableContent">
		<div class="container">
			<div class="battle-info">
				<div class="left-align download-template">
					<p class="tiny no-margin">Szczegóły określa  <span class="bold">Regulamin “Bitwy Graficznej”</span>
					</p>
					<p>
						<a href="#" class="event-link yellow toLeft" download>
							Pobierz szablon i rozpocznij projekt
						</a>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="battle-teams relative grey">
		<div class="container grey">
			<div class="battle-info teams-header">
				<div class="inside battle-info">
					<p class="mainTitle teams">Oni potwierdzili udział</p>
				</div>
			</div>
			<div class="teams">
				<div class="team-sector">
					<div class="team col l4 m4 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_03.png" alt="Team logo">

							<p class="blockTitle">Konrad Kirpluk</p>
							<p class="block-content">Illustrator</p>
						</div>
					</div>
					<div class="team col l4 m4 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_05.png" alt="Team logo">
							<p class="blockTitle">Piotr Płoch</p>
							<p class="block-content">Graphic Designer / Ollestudio</p>
						</div>
					</div>
					<div class="team col l4 m4 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_07.png" alt="Team logo">
							<p class="blockTitle">Krzysztof Łabno</p>
							<p class="block-content">Senior Graphic Designer / Creogram</p>
						</div>
					</div>
				</div>
				<div class="team-sector">
					<div class="team col l4 m4 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_12.png" alt="Team logo">
							<p class="blockTitle">Kamil Sarnowski</p>
							<p class="block-content">Creative Director at Ground Game</p>
						</div>
					</div>
					<div class="team col l4 m4 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_14.png" alt="Team logo">
							<p class="blockTitle">Adrian Knopik</p>
							<p class="block-content">Co-Owner / Fuse Collective</p>
						</div>
					</div>
					<div class="team col l4 m4 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_16.png" alt="Team logo">
							<p class="blockTitle">Jacek Janiczak</p>
							<p class="block-content">Freelance Graphic Designer</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="battle-teams relative members">
		<div class="container light-yellow">
			<div class="battle-info teams-header">
				<div id="yellowTriangle" class="absolute battle-figure"></div>
				<div class="inside battle-info">
					<p class="mainTitle teams">Jury 2016</p>
				</div>
			</div>
			<div class="teams">
				<div class="team-sector">
					<div class="team col l4 m4 s12">
						<div class="inside">
							<img src="img/members/projections-bitwy-member-1.png" alt="Team logo">

							<p class="blockTitle">Bartek Walczuk</p>
							<p class="block-content">Associate Creative Director w 180heartbeats + JUNG v. MATT</p>
						</div>
					</div>
					<div class="team col l4 m4 s12">
						<div class="inside">
							<img src="img/members/projections-bitwy-member-2.png" alt="Team logo">
							<p class="blockTitle">Oskar Podolski</p>
							<p class="block-content">Owner / OESU</p>
						</div>
					</div>
					<div class="team col l4 m4 s12">
						<div class="inside">
							<img src="img/members/projections-bitwy-member-3.png" alt="Team logo">
							<p class="blockTitle">Łukasz Słotwiński</p>
							<p class="block-content">Creative Director nc+</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="battle-application relative">
		<div class="container">
			<div id="application" class="battle-info">
				<div id="blueTriangle" class="absolute battle-figure"></div>
				<p class='mainTitle padded-battle-info'>Zgłoś swoją pracę !</p>
				<form action="/actions/swiftmailer.php" method="POST" class="apply-form inside battle-info">
					<?php
					if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
						echo  "<div class='alert message'>".$_SESSION['message']."</div>";
					}
					?>
					<div class="form-control">
						<input name="name" type="text" placeholder="Imię i Nazwisko" required value="">
					</div>
					<div class="form-control">
						<input name="email" type="email" placeholder="Adres e-mail" required value="">
					</div>
					<div class="form-control optional" data-text='(optional)'>
						<input id="phone" name="phone" type="text" placeholder="Numer telefonu" value="">
					</div>
					<div class="form-control file">
						<div class="file-input">Dołącz portfolio w formie PDF</div>
						<div class="file-uploader" data-input-id="#portfolio"></div>
						<input id="portfolio" name="portfolio" class="clear" type="text"/>
						<span class="absolute bold star right">*</span>
					</div>
					<div class="form-control file">
						<div class="file-input">Dodaj inspirację Twojego projektu</div>
						<div class="file-uploader" data-input-id="#inspiration"></div>
						<input id="inspiration" name="inspiration" class="clear" type="text"/>
					</div>
					<div class="form-control">
						<input name="link_inspiration" type="text"
							   placeholder="Autor / źródło inspiracji dodanej w polu wyżej" value="">
					</div>
					<div class="optional form-control address-form"
						 data-text='(optional)'>
						<input name="address"
							   class="address-input" type="text" placeholder="Adres online portfolio">
					</div>
<!--					<div class="form-control">-->
<!--						<input id="team" name="team" class="clear" type="text"/>-->
<!--						<div class="choose-team expander" data-block=".teams-list">-->
<!--							<p class="current">-->
<!--								Wybierz drużynę, do której chcesz dołączyć-->
<!--							</p>-->
<!--							<i class="fa fa-angle-down absolute arrow"></i>-->
<!--						</div>-->
<!--						<div class="teams-list">-->
<!--							<p data-value="Kraków">Kraków</p>-->
<!--							<p data-value="Warszawa">Warszawa</p>-->
<!--							<p data-value="Trójmiasto">Trójmiasto</p>-->
<!--							<p data-value="Łódź">Łódź</p>-->
<!--							<p data-value="Poznań">Poznań</p>-->
<!--							<p data-value="Katowice">Katowice</p>-->
<!--						</div>-->
<!--					</div>-->
					<div class="form-control tiny flex flex-end">
						<input type="checkbox" class="clear" value="0" name="accepted" id="accepted" />
						<label for="accepted">Oświadczam, że zapoznałem się z Regulaminem “Bitwy Graficznej” i akceptuję jego treść.</label>

					</div>
					<div class="form-control tiny flex flex-end">
						<span class="absolute bold star no-padding">*</span>
						<p class="send-note">Akceptowalne formaty prac:
							<span class="bold">PDF, Adobe Illustrator lub JPG CMYK, 300 DPI.</span>
						</p>
					</div>
					<div class="form-control left-align">
						<button type="submit" class="event-link yellow send-application">Wyślij swój projekt</button>
					</div>
				</form>
			</div>
		</div>
	</section>
	<footer class="battle-footer scrollableContent grey">
			<div class="container grey">
				<p class="footer-text">Masz pytanie? napisz do nas na: <a href="mailto:info@projections.pl">info@projections.pl</a></p>
			</div>
	</footer>
	<?php
		@include("partials/sidebar.html");
		@include("partials/scripts.html");
	?>
	<script type="text/javascript" src="js/uploadfile.min.js"></script>
	<script type="text/javascript" src="js/inputmask.js"></script>
	<script type="text/javascript" src="js/sub.js"></script>
	<script type="text/javascript" src="js/appear.js"></script>
	<script type="text/javascript" src="js/application.js"></script>
</body>
</html>