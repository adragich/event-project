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
				<p class='mainTitle battle-info image-title'>Bitwy graficzne</p>
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
	<section class="battle-teams relative grey">
		<div class="container grey">
			<div class="battle-info teams-header">
				<div class="inside battle-info">
					<p class="mainTitle teams">Zespoły i ich liderzy</p>
				</div>
			</div>
			<div class="teams">
				<div class="team-sector">
					<div class="team col l4 m4 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_03.png" alt="Team logo">
							<p class="regular-title">Kraków</p>
							<p class="italic leaders">Reprezentowany przez:</p>
							<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
							<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>
						</div>
					</div>
					<div class="team col l4 m4 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_05.png" alt="Team logo">
							<p class="regular-title">Warszawa</p>
							<p class="italic leaders">Reprezentowany przez:</p>
							<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
							<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>
						</div>
					</div>
					<div class="team col l4 m4 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_07.png" alt="Team logo">
							<p class="regular-title">Trójmiasto</p>
							<p class="italic leaders">Reprezentowany przez:</p>
							<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
							<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>
						</div>
					</div>
				</div>
				<div class="team-sector">
					<div class="team col l4 m4 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_13.png" alt="Team logo">
							<p class="regular-title">Łódź</p>
							<p class="italic leaders">Reprezentowany przez:</p>
							<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
							<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>
						</div>
					</div>
					<div class="team col l4 m4 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_18.png" alt="Team logo">
							<p class="regular-title">Poznań</p>
							<p class="italic leaders">Reprezentowany przez:</p>
							<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
							<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>
						</div>
					</div>
					<div class="team col l4 m4 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_15.png" alt="Team logo">
							<p class="regular-title">Katowice</p>
							<p class="italic leaders">Reprezentowany przez:</p>
							<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
							<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="battle-application relative">
		<div class="container">
			<div id="application" class="battle-info">
				<p class='mainTitle battle-info'>Zgłoś się ! <span class="title-note">*</span></p>
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
					<div class="form-control pdf">
						<div class="pdf-input">Dołącz portfolio w formie PDF</div>
						<div class="pdf-uploader"></div>
					</div>
					<div class="optional form-control address-form"
						 data-text='(optional)'>
						<input id="portfolio" name="portfolio" class="clear" type="text"/>
						<input name="address"
							   class="address-input" type="text" placeholder="Adres online portfolio">
					</div>
					<div class="form-control">
						<input id="team" name="team" class="clear" type="text"/>
						<div class="choose-team expander" data-block=".teams-list">
							<p class="current">
								Wybierz drużynę, do której chcesz dołączyć
							</p>
							<i class="fa fa-angle-down absolute arrow"></i>
						</div>
						<div class="teams-list">
							<p data-value="Kraków">Kraków</p>
							<p data-value="Warszawa">Warszawa</p>
							<p data-value="Trójmiasto">Trójmiasto</p>
							<p data-value="Łódź">Łódź</p>
							<p data-value="Poznań">Poznań</p>
							<p data-value="Katowice">Katowice</p>
						</div>
					</div>
					<div class="form-control left-align">
						<button type="submit" class="event-link yellow send-application">Wyślij zgłoszenie</button>
					</div>
					<div class="form-control">
						<p class="application-note">
							* Dane osobowe i informacje o portfolio wysłane przez chętnych zgłaszających się do wzięcia udziału w bitwach
						</p>
						<p class="application-note">
							nie będą wykorzystywane przez organizatorów do zadnych inych celów, poza rekrutacją osób do bitew graficznych
						</p>
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