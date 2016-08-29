<!DOCTYPE html>
<html>
<head>
	<?php
		@include("partials/head.php")
	?>
	<title>Projekcje - Konferencja graficzna - <?php echo PROGRAM_TITLE;?></title>

</head>
<body>
	<div class="anim-space"><img src="img/space.jpg" alt=""></div>
	<section class="static-content transition program-static-section">
		<div class="container">

			<!--header-->
			<?php
				@include("partials/top.html")
			?>

			<div class="fillAndCenter flex flex-end">
				<div class="inside relative program-main-title">
					<p class="mainTitle"><?php echo PROGRAM_TITLE;?></p>
					<p class="note"><?php echo PROGRAM_NOTE;?></p>
					<div id="middlePart" class="transition hide animated fadeIn"></div>
					<div data-offset="0" data-id="#programSection" class="navigation animated fadeInUp wow" data-wow-delay="1s">
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</div>
				</div>
			</div>
			<!--button for menu-->
			<?php
				@include("partials/menu-button.html")
			?>
		</div>
	</section>
	<section class="scrollableContent relative program-section" id="programSection">
		<div class="container program-wrap">
			<table class="program-table">
				<thead>
					<tr>
						<th colspan="2" class="program-date"><span>05</span> <?php echo MONTH;?> 2016 _</th>
						<th>
							<ul class="program-types flex">
								<li class="flex"><span class="yellow-light"></span>
									<?php echo PROGRAM_TYPE_1;?>
								</li>
								<li class="flex"><span class="blue-light"></span>
									<?php echo PROGRAM_TYPE_2;?>
								</li>
							</ul>
						</th>
					</tr>
				</thead>
			</table>

			<table class="program-table">
				<thead>
				<tr class="clear-string"></tr>
				<tr class="offset-string"></tr>
				<tr class="content-string no-button" data-role="parent" data-topic="speakers" data-state="collapsed">
					<td class="program-time">00:00</td>
					<td class="left-align">
						<p class="blockTitle">Wykłady</p>
						<p class="block-content">
							prelegentów.</p>
					</td>
					<td class="left-align image yellow-gradient">
						<img src="img/speakers.png" alt="Wykłady">
						<span class="block-content">Pełen program już wkrótce!
						</span>
					</td>
				</tr>
				</thead>
				<tbody>

				<tr class="offset-string"></tr>
				<tr class="content-string no-button">
					<td class="program-time">10:00</td>
					<td class="left-align">
						<p class="blockTitle">Grzegorz Róg</p>
						<p class="block-content">Owner at eduweb.pl _</p>
					</td>
					<td class="left-align image yellow-gradient">
						<img src="img/program/program_small_1.jpg" alt="Grzegorz Róg">
						<span class="block-content">
							<?php echo PROGRAM_DESCRIPTION_1;?>
						</span>
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
						<span class="block-content">
							<?php echo PROGRAM_DESCRIPTION_2;?></span>
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
						<span class="block-content">
							<?php echo PROGRAM_DESCRIPTION_4;?></span>
					</td>
				</tr>
				</tbody>
			</table>


			<table class="program-table">
				<thead>
				
				<tr class="content-string no-button" data-role="parent" data-topic="workshops" data-state="collapsed">
					<td class="program-time">00:00</td>
					<td class="left-align">
						<p class="blockTitle">Warsztaty.</p>
						<p class="block-content">
							dla chętnych</p>
					</td>
					<td class="left-align image blue-light">
						<img src="img/workshops.png" alt="Warsztaty">
						<span class="block-content">Harmonogram już niebawem!
						</span>
					</td>
				</tr>
				</thead>
				<tbody>


				<tr class="offset-string"></tr>
				<tr class="content-string">
					<td class="program-time">13:00</td>
					<td class="left-align">
						<p class="blockTitle">Patryk Hardziej</p>
						<p class="block-content">negation studio _</p>
					</td>
					<td class="left-align image blue-light">
						<img src="img/program/program_small_3.jpg" alt="Patryk Hardziej">
						<span class="block-content">
							<?php echo PROGRAM_DESCRIPTION_3;?></span>
						<a href="#" class="workshop transition"><?php echo APPLY_WORKSHOP; ?></a>
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
						<span class="block-content">
							<?php echo PROGRAM_DESCRIPTION_5;?></span>
						<a href="#" class="workshop transition"><?php echo APPLY_WORKSHOP; ?></a>
					</td>
				</tr>
				<tr class="offset-string"></tr>
				</tbody>
			</table>
			<div class="program-post-info">
				<div class="main flex flex-center padding-2x program">
					<div class="inside">
						<p class="mainTitle"><?php echo PROGRAM_TITLE_2;?></p>
						<p class="note"><?php echo PROGRAM_NOTE_2;?></p>
						<div id="middlePart" class="transition hide animated fadeIn"></div>
					</div>
				</div>
				<div class="concordia-image">
					<a href="#"><img src="img/program/program_concordia.png" alt="Concordia design"></a>
				</div>
			</div>
		</div>
	</section>
	<!--menu-->
	<?php
		@include("partials/sidebar.html")
	?>
	<?php
		@include("partials/scripts.html")
	?>		
	<script type="text/javascript" src="js/appear.js"></script>	
	<script type="text/javascript" src="js/program.js"></script>
</body>
</html>