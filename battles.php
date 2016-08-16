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
				<p class='mainTitle battle-info'>Bitwy graficzne</p>
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
			<div class="battle-info">
				<div class="inside battle-info">
					<p class="mainTitle teams">Zespoły i ich liderzy</p>
				</div>
			</div>
			<div class="teams">
				<div class="team col l4 m6 s12">
					<div class="inside">
						<img src="" alt="Team logo">
						<p class="regular-title">Kraków</p>
						<p class="italic">Reprezentowany przez:</p>
						<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
						<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>	
					</div>
				</div>
				<div class="team col l4 m6 s12">
					<div class="inside">
						<img src="" alt="Team logo">
						<p class="regular-title">Kraków</p>
						<p class="italic">Reprezentowany przez:</p>
						<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
						<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>	
					</div>
				</div>
				<div class="team col l4 m6 s12">
					<div class="inside">
						<img src="" alt="Team logo">
						<p class="regular-title">Kraków</p>
						<p class="italic">Reprezentowany przez:</p>
						<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
						<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>	
					</div>
				</div>
				<div class="team col l4 m6 s12">
					<div class="inside">
						<img src="" alt="Team logo">
						<p class="regular-title">Kraków</p>
						<p class="italic">Reprezentowany przez:</p>
						<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
						<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>	
					</div>
				</div>
				<div class="team col l4 m6 s12">
					<div class="inside">
						<img src="" alt="Team logo">
						<p class="regular-title">Kraków</p>
						<p class="italic">Reprezentowany przez:</p>
						<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
						<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>	
					</div>
				</div>
				<div class="team col l4 m6 s12">
					<div class="inside">
						<img src="" alt="Team logo">
						<p class="regular-title">Kraków</p>
						<p class="italic">Reprezentowany przez:</p>
						<p class="team-member">Piotr Płoch  <span>(Olle Studio)</span></p>
						<p class="team-member">Krzysztof Łabno  <span>(Creogram)</span></p>	
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="battle-application relative">
		<div class="container">
			<div id="application">Apply</div>
		</div>
	</section>
	<footer class="battle-footer scrollableContent">
		<div class="container">
			<p>Masz pytanie? napisz do nas na: info@projections.pl</p>
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