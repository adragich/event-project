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
			<!--button for menu-->
			<?php
				@include("partials/menu-button.html")
			?>
		</div>
	</section>
	<section class="scrollableContent relative">
		<div class="container program-wrap">
			<table>
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
				<tr>
					<td>10:00</td>
					<td class="left-align">
						<p class="blockTitle">Grzegorz Róg</p>
						<p class="block-content">Owner at eduweb.pl _</p>
					</td>
					<td class="yellow-gradient">
						<img src="img/program/program_small_1.jpg" alt="Grzegorz Róg">
						<span class="block-content">Projektowanie aplikacji w praktyce</span>
					</td>
				</tr>
				</tbody>
			</table>
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