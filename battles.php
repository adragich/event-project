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
		@include("partials/preloader-battles.html")
	?>
	<section class="static-content transition">
		<div class="container">

			<!--header-->
			<?php
				@include("partials/top-battles.html")
			?>

			<div class="main sub flex flex-center padding-2x" data-parallax='{"y" : -300, "smoothness": 20}'>
				<div class="inside">
					<p class="mainTitle"><?php echo BATTLES_2;?></p>
					<p class="note"><?php echo BATTLES_NOTE;?>.</p>
					<a href="#application" class="event-link apply yellow toLeft"><?php echo APPLY_TO_BATTLE;?></a>
				</div>
			</div>
			<!--button for menu-->
			<div class="navigation battles" data-scroll="300" data-parallax='{"y" : -300, "smoothness": 20}'>
				<i class="fa fa-angle-down" aria-hidden="true" ></i>
			</div>
			<div class="additionalInfo battles right-align">
				<p class="bold date hide">5-11-2016</p>
				<p class="city hide"><?php echo CITY;?></p>
				<p class="company hide"><?php echo COMPANY;?></p>
			</div>
		</div>
	</section>	
	<section class="battle-info-wrap relative">
		<div class="container">
			<div class="battle-info">
				<p class='mainTitle battle-info image-title'>Bitwy graficzne</p>
				<div class="inside battle-info">
					<p class="subtitle">Głównym zadaniem Bitew będzie stworzenie
					Interpretacji graficznej, będącej odpowiedzią na Inspirację.
					</p>
					<p class="block-content">Bitwy mają na celu integrację poprzez wspólne projektowanie. Wspólne
					projektowanie przekłada się natomiast na prezentację swoich umiejętności
					szerszemu gronu jak i wymianę doświadczeń. </p>
					<p class="subtitle bold no-margin">Do zespołów zostały zaproszone</p>
					<p class="block-content">uznane studia graficzne, które wytypują swoich reprezentantów. Będą oni pełnić
					rolę opiekunów/liderów swoich zespołów. Tutaj natomiast prowadzimy
					otwartą rekrutację dostępną dla młodych projektantów chcących wziąć udział
					w bitwach. Formuła pracy nad briefem będzie zależała od liderów danej grupy.
					Praca może przebiegać online lub podczas zorganizowanych spotkań.
					Przykładowy zespół może się składać z 2 pro designerów, 3 zawodowych
					designerów, 4 początkujących designerów/studentów.
					</p>
					<p class="subtitle bold">Finalne kreacje zostaną przedstawione podczas
					wernisażu w dniu konferencji.</p>
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
					<div class="team col l4 m6 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_03.png" alt="Team logo">
							<p class="regular-title">Kraków</p>
							<p class="italic">Reprezentowany przez:</p>
							<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
							<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>
						</div>
					</div>
					<div class="team col l4 m6 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_05.png" alt="Team logo">
							<p class="regular-title">Warszawa</p>
							<p class="italic">Reprezentowany przez:</p>
							<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
							<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>
						</div>
					</div>
					<div class="team col l4 m6 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_07.png" alt="Team logo">
							<p class="regular-title">Trójmiasto</p>
							<p class="italic">Reprezentowany przez:</p>
							<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
							<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>
						</div>
					</div>
				</div>
				<div class="team-sector">
					<div class="team col l4 m6 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_13.png" alt="Team logo">
							<p class="regular-title">Łódź</p>
							<p class="italic">Reprezentowany przez:</p>
							<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
							<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>
						</div>
					</div>
					<div class="team col l4 m6 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_18.png" alt="Team logo">
							<p class="regular-title">Poznań</p>
							<p class="italic">Reprezentowany przez:</p>
							<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
							<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>
						</div>
					</div>
					<div class="team col l4 m6 s12">
						<div class="inside">
							<img src="img/figures/teams/projections-bitwy_15.png" alt="Team logo">
							<p class="regular-title">Katowice</p>
							<p class="italic">Reprezentowany przez:</p>
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
				<form action="#" class="apply-form inside battle-info">
					<div class="form-control">
						<input name="name" type="text" placeholder="Imię i Nazwisko" required>
					</div>
					<div class="form-control">
						<input name="email" type="email" placeholder="Adres e-mail" required>
					</div>
					<div class="form-control optional" data-text='(optional)'>
						<input name="phone" type="number" placeholder="Numer telefonu" min="0">
					</div>
					<div class="form-control pdf"
						 data-text='+PDF'>
						<input name="pdf" type="file" class="hidden">
						<div class="pdf-input">Dołącz portfolio w formie PDF</div>
					</div>
					<div class="optional form-control address-form"
						 data-text='(optional)'>
						<input name="address"
							   class="address-input" type="text" placeholder="Adres online portfolio">
					</div>
					<div class="form-control">
						<div class="choose-team expander" data-block=".teams-list">
							<p class="current">
								Wybierz drużynę, do której chcesz dołączyć
							</p>
							<i class="fa fa-angle-down absolute arrow"></i>
						</div>
						<div class="teams-list">
							<p>Wybierz drużynę, do której chcesz dołączyć</p>
							<p data-value="Kraków">Kraków</p>
							<p data-value="Warszawa">Warszawa</p>
							<p data-value="Trójmiasto">Trójmiasto</p>
							<p data-value="Łódź">Łódź</p>
							<p data-value="Poznań">Poznań</p>
							<p data-value="Katowice">Katowice</p>
						</div>
					</div>
					<div class="form-control left-align">
						<button type="button" class="event-link yellow send-application">Wyślij zgłoszenie</button>
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
	<div class="overlay clear transition"></div>
	<?php
		@include("partials/scripts.html")
	?>		
	<script type="text/javascript" src="js/sub.js"></script>
	<script type="text/javascript" src="js/appear.js"></script>	
</body>
</html>