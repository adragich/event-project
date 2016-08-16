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

			<div class="main flex flex-center">
				<div class="inside">
					<p class="mainTitle"><?php echo PROGRAM_TITLE;?></p>
					<p class="note"><?php echo PROGRAM_NOTE;?>.</p>
					<div id="middlePart" class="transition hide animated fadeIn"></div>
				</div>
			</div>
			<table>
				<thead>
					<tr>
						<th colspan="2"><span>05</span> November 2016 _</th>
						<th>
							<ul class="program-types">
								<li><span class="blue-square"></span>Prelekcje</li>
								<li><span class="yellow-square"></span>Warsztaty</li>
							</ul>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>10:00</td>
						<td>
							<p class="blockTitle">Grzegorz Róg</p>
							<p class="block-content">Owner at eduweb.pl _</p>
						</td>
						<td class="yellow-gradient">
							<img src="img/speakers/rog.jpg" alt="Grzegorz Róg">
							<span class="block-content">Projektowanie aplikacji w praktyce</span>
						</td>
					</tr>
				</tbody>
			</table>
			<!--button for menu-->
			<?php
				@include("partials/menu-button.html")
			?>
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