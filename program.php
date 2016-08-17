<!DOCTYPE html>
<html>
<head>
	<title>Meta title</title>
	<?php
		@include("partials/head.php")
	?>

</head>
<body>
	<section class="static-content transition">
		<div class="container">

			<!--header-->
			<?php
				@include("partials/top.html")
			?>
			<div class="anim-space"><img src="img/space.jpg" alt=""></div>

			<div class="main flex flex-center padding-2x program">
				<div class="inside">
					<p class="mainTitle"><?php echo PROGRAM_TITLE;?></p>
					<p class="note"><?php echo PROGRAM_NOTE;?></p>
					<div id="middlePart" class="transition hide animated fadeIn"></div>
				</div>
			</div>
			<div class="navigation animated fadeInUp wow" data-wow-delay="3s">
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</div>
			<!--button for menu-->
			<?php
				@include("partials/menu-button.html")
			?>
		</div>
	</section>
	<section class="scrollableContent relative" data-parallax='{"y" : -200, "from-scroll": 200, "distance": 1400, "smoothness": 10}'>
		<div class="container program-wrap">
			<table class="program-table">
				<thead>
					<tr>
						<th colspan="2" class="program-date"><span>05</span> November 2016 _</th>
						<th>
							<ul class="program-types flex">
								<li class="flex"><span class="yellow-light"></span>Prelekcje</li>
								<li class="flex"><span class="blue-light"></span>Warsztaty</li>
							</ul>
						</th>
					</tr>
				</thead>
				<tbody>
				<tr class="clear-string"></tr>
				<tr class="offset-string"></tr>
				<tr class="content-string no-button">
					<td class="program-time">10:00</td>
					<td class="left-align">
						<p class="blockTitle">Grzegorz Róg</p>
						<p class="block-content">Owner at eduweb.pl _</p>
					</td>
					<td class="left-align image yellow-gradient">
						<img src="img/program/program_small_1.jpg" alt="Grzegorz Róg">
						<span class="block-content">Projektowanie aplikacji w praktyce</span>
					</td>
				</tr>
				<tr class="offset-string"></tr>
				<tr class="content-string no-button">
					<td class="program-time">11:00</td>
					<td class="left-align">
						<p class="blockTitle">Martyna Wędzicka</p>
						<p class="block-content">lesstudio.pl _</p>
					</td>
					<td class="left-align image yellow-gradient">
						<img src="img/program/program_small_2.jpg" alt="Martyna Wędzicka">
						<span class="block-content">Inspiracje w projektowaniu marki</span>
					</td>
				</tr>
				<tr class="offset-string"></tr>
				<tr class="content-string">
					<td class="program-time">13:00</td>
					<td class="left-align">
						<p class="blockTitle">Patryk Hardziej</p>
						<p class="block-content">negation studio _</p>
					</td>
					<td class="left-align image blue-light">
						<img src="img/program/program_small_3.jpg" alt="Patryk Hardziej">
						<span class="block-content">Ilustracje abstrakcyjne</span>
						<a href="#" class="workshop transition">Apply for workshop</a>
					</td>
				</tr>
				<tr class="offset-string"></tr>
				<tr class="content-string no-button">
					<td class="program-time">14:00</td>
					<td class="left-align">
						<p class="blockTitle">Hopa Studio</p>
						<p class="block-content">hopastudio.com _</p>
					</td>
					<td class="left-align image yellow-gradient">
						<img src="img/program/program_small_4.jpg" alt="Hopa Studio">
						<span class="block-content">Inspiracja marką</span>
					</td>
				</tr>
				<tr class="offset-string"></tr>
				<tr class="content-string">
					<td class="program-time">16:00</td>
					<td class="left-align">
						<p class="blockTitle">Kriss Hermansson <br>Marcus Brown
							</p>
						<p class="block-content">resn.co.nz _</p>
					</td>
					<td class="left-align image blue-light">
						<img src="img/program/program_small_5.jpg" alt="Kriss Hermansson Marcus Brown">
						<span class="block-content">Something new...</span>
						<a href="#" class="workshop transition">Apply for workshop</a>
					</td>
				</tr>
				<tr class="offset-string"></tr>
				</tbody>
			</table>
			<div class="main flex flex-center padding-2x program">
				<div class="inside">
					<p class="mainTitle"><?php echo PROGRAM_TITLE_2;?></p>
					<p class="note"><?php echo PROGRAM_NOTE_2;?></p>
					<div id="middlePart" class="transition hide animated fadeIn"></div>
				</div>
			</div>
			<div class="concordia-image">
				<a href="#"><img src="img/program/program_concordia.jpg" alt="Concordia design"></a>
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
	<script type="text/javascript" src="js/appear.js"></script>	
</body>
</html>