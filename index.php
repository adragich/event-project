<!DOCTYPE html>
<html>
<head>
	<?php
		@include("partials/head.php")
	?>
	<title><?php echo META_TITLE;?></title>

</head>
<body class="stick homepage">
	<!--block for animation-->
	<?php
		@include("partials/preloader.html");
	?>
	<section class="static-content transition">
		<div class="container">
			<!--header-->
			<?php
				@include("partials/top.html");
			?>

			<div class="main flex flex-center fillAndCenter home">
				<div class="inside">
					<p class="mainTitle"><?php echo TITLE;?>,</p>
					<p class="note"><?php echo NOTE;?>.</p>
				</div>
			</div>
			<div class="additionalInfo right-align">
				<p class="bold date hide">5-11-2016</p>
				<p class="city hide"><?php echo CITY;?></p>
				<p class="company hide">
					<a href="https://www.concordiadesign.pl/en"
					   target="_blank"
					   class="">
						<span class="hoverStripe relative"><?php echo COMPANY;?></span>
					</a>
				</p>
			</div>
			<!--button for menu-->
			<?php
				@include("partials/menu-button.html")
			?>
		</div>
		<div class="fixer-container absolute">
			<a href="speakers?lang=<?php echo $_SESSION['lang'];?>" class="bottom-link"><span class="hoverStripe relative"><?php echo SPEAKERS;?></span></a>
		</div>
	</section>	
	<!--menu-->
	<?php
		@include("partials/sidebar.html");
		@include("partials/scripts.html");
	?>	
	<script type="text/javascript" src="js/homepage.js"></script>
</body>
</html>