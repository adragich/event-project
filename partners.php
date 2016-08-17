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
@include("partials/preloader-partners.html")
?>
<section class="static-content transition">
	<div class="container">

		<!--header-->
		<?php
		@include("partials/top.html")
		?>

		<div class="main sub flex flex-center padding-2x" data-parallax='{"y" : -300, "smoothness": 20}'>
			<div class="inside">
				<p class="mainTitle"><?php echo PARTNERS;?></p>
				<p class="note"><?php echo PARTNERS_NOTE;?>.</p>
			</div>
		</div>
		<!--button for menu-->
		<div class="navigation animated fadeInUp wow" data-wow-delay="3s">
			<i class="fa fa-angle-down" aria-hidden="true"></i>
		</div>
		<?php
		@include("partials/menu-button.html")
		?>
	</div>
</section>
<section class="scrollableContent relative">
	<div class="container">
		<div class="sponsors col l12">
			<p class="blockTitle">Główni sponsorzy
			<div class="col xl3 l3 m6 s12 partner">
				<div class="inner"><img src="img/partners/projections-partners_01.png"
										alt="Allegro" class="partner-image"></div>
			</div>
			<div class="col xl3 l3 m6 s12 partner">
				<div class="inner"><img src="img/partners/projections-partners_02.png"
										alt="Concordia Designs" class="partner-image"></div>
			</div>
			<div class="col xl3 l3 m6 s12 partner">
				<div class="inner"><img src="img/partners/projections-partners_03.png"
										alt="Redro" class="partner-image"></div>
			</div>
			<div class="col xl3 l3 m6 s12 partner">
				<div class="inner"><img src="img/partners/projections-partners_02.png"
										alt="Concordia Designs" class="partner-image"></div>
			</div>
			</p>
		</div>
		<div class="sponsors col l12">
			<p class="blockTitle">Partnerzy
			</p>
		</div>
	</div>
</section>
<!--menu-->
<?php
@include("partials/sidebar.html")
?>
<div class="overlay clear transition"></div>
<?php
@include("partials/scripts.html")
?>
<script type="text/javascript" src="js/partners.js"></script>
<script type="text/javascript" src="js/appear.js"></script>
</body>
</html>