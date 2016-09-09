<!DOCTYPE html>
<html>
<head>
	<?php
		@include("partials/head.php");
	?>
	<title><?php echo META_TITLE;?> - <?php echo BATTLES;?></title>

</head>
<body>
	<!--block for animation-->
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
					<a href="#downloadTemplate" class="event-link display apply-trigger yellow toLeft"><?php echo APPLY_TO_BATTLE;?></a>
				</div>
			</div>
			<!--button for menu-->
			<?php
			@include("partials/menu-button.html")
			?>
			<div class="navigation battles" data-offset="0"
				 data-id="#battleInfoSection" data-parallax='{"y" : -300, "smoothness": 20}'>
				<i class="fa fa-angle-down" aria-hidden="true" ></i>
			</div>
		</div>
	</section>	
	<section class="battle-info-wrap relative" id="battleInfoSection">
		<div class="container">
			<div class="battle-info">
				<p class="mainTitle battle-info small image-title animated wow fadeInDown" data-wow-delay="0s">
					<?php echo BATTLES_CONTENT_TITLE; ?>
				</p>
				<div class="battlesPlan">
					<?php for($i = 1; $i <= 6; $i++){?>
					<div class="col s12 m6 l6 battlesPlanBlock">
						<img src="img/battles/battle-figure-<?php echo $i; ?>.png" alt="Battle plan">
						<span class="digit">0<?php echo $i; ?>.</span>
						<div class="content">
							<p class="blockTitle battlePlanText "><?php echo constant(BATTLES_PLAN_.$i);?></p>
							<p class="block-content battlePlanText ">
								<a href="//.www<?php echo constant(BATTLES_PLAN_SUB_.$i);?>"
								   target="_blank" class="relative">
									<span class="innerHoverStripe absolute transition">
									</span>
									<span class="relative">
										<?php echo constant(BATTLES_PLAN_SUB_.$i);?>
									</span>
								</a>
							</p>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="inside battle-info">
					<p class="subtitle animated wow fadeInUp" data-wow-delay="0.1s"><?php echo BATTLES_CONTENT_1; ?>
					</p>
<!--					<p class="block-content">Bitwy mają na celu integrację poprzez wspólne projektowanie. Wspólne-->
<!--					projektowanie przekłada się natomiast na prezentację swoich umiejętności-->
<!--					szerszemu gronu jak i wymianę doświadczeń. </p>-->
					<p class="offset-top"></p>
					<p class="subtitle bold animated wow fadeInUp" data-wow-delay="0.2s"><?php echo BATTLES_CONTENT_2; ?></p>

					<p class="block-content animated wow fadeInUp" data-wow-delay="0.3s"><?php echo BATTLES_CONTENT_3; ?>
					</p>
					<p class="block-content animated wow fadeInUp" data-wow-delay="0.4s"><?php echo BATTLES_CONTENT_4; ?>

					</p>
					<p class="block-content animated wow fadeInUp" data-wow-delay="0.5s">
						<?php echo BATTLES_CONTENT_5; ?>
					</p>
<!--					<p class="subtitle bold">Finalne kreacje zostaną przedstawione podczas-->
<!--					wernisażu w dniu konferencji.</p>-->
				</div>
			</div>
		</div>
	</section>

	<section class="scrollableContent time-limits" id="downloadTemplate">
		<div class="container">
			<div class="battle-info">
				<div class="inside battle-info left-align">
					<p class="subtitle bold no-margin"><?php echo BATTLES_SEND_WORK; ?>
						<span class="dateGrey">15-09-2016</span> <?php echo BATTLES_SEND_WORK_FROM; ?> <span class="dateGrey">15-10-2016</span>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="scrollableContent">
		<div class="container">
			<div class="battle-info">
				<div class="left-align download-template">
					<p class="tiny no-margin"><?php echo BATTLES_RULES_TITLE; ?>
						<span class="bold modal-trigger relative hoverStripe no-padding no-margin"
							  data-open="#rules"><?php echo BATTLES_RULES_SUBTITLE; ?> </span>
						<?php echo BATTLES_RULES_SUBTITLE_2; ?>
					</p>
					<p>
						<a href="<?php echo $templatePath; ?>" class="event-link display yellow toLeft" download>
							<?php echo BATTLES_RULES_NOTE; ?>
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
					<p class="mainTitle teams"><?php echo BATTLES_CONFIRM; ?></p>
				</div>
			</div>
			<div class="teams">
				<div class="team-sector">

					<div class="team col l4 m4 s12 animated wow fadeInDown" data-wow-delay="0s">
						<div class="inside">
							<div class="yellow-hover figure">
								<a href="<?php echo BATTLES_LINK_4; ?>" target="_blank" class="filter">
									<img src="img/figures/teams/bitwy-sarnowski.jpg" alt="Team logo">
								</a>
							</div>
							<p class="blockTitle">
								<a href="<?php echo BATTLES_LINK_4; ?>" target="_blank">
									Kamil Sarnowski
								</a>
							</p>
							<p class="block-content">Creative Director at Ground Game</p>
						</div>
					</div>
					<div class="team col l4 m4 s12 animated wow fadeInDown" data-wow-delay="0.2s">
						<div class="inside">
							<div class="yellow-hover figure">
							<a href="<?php echo BATTLES_LINK_2; ?>" target="_blank" class="filter">
								<img src="img/figures/teams/bitwy-ploch.jpg" alt="Team logo">
							</a>
							</div>
							<p class="blockTitle">
								<a href="<?php echo BATTLES_LINK_2; ?>" target="_blank">
									Piotr Płoch
								</a>
							</p>
							<p class="block-content">Graphic Designer / Ollestudio</p>
						</div>
					</div>
					<div class="team col l4 m4 s12 animated wow fadeInDown" data-wow-delay="0.4s">
						<div class="inside">
							<div class="yellow-hover figure">
							<a href="<?php echo BATTLES_LINK_3; ?>" target="_blank" class="filter">
								<img src="img/figures/teams/projections-bitwy_07.jpg" alt="Team logo">
							</a>
							</div>
							<p class="blockTitle">
								<a href="<?php echo BATTLES_LINK_3; ?>" target="_blank">
									Krzysztof Łabno
								</a>
							</p>
							<p class="block-content">Senior Graphic Designer / Creogram</p>
						</div>
					</div>
				</div>
				<div class="team-sector">
					<div class="team col l4 m4 s12 animated wow fadeInDown" data-wow-delay="0s">
						<div class="inside">
							<div class="yellow-hover figure">
								<a href="<?php echo BATTLES_LINK_1; ?>" target="_blank" class="filter">
									<img src="img/figures/teams/projections-bitwy_03.jpg" alt="Team logo">
								</a>
							</div>

							<p class="blockTitle">
								<a href="<?php echo BATTLES_LINK_1; ?>" target="_blank">
									Konrad Kirpluk
								</a>
							</p>
							<p class="block-content">Illustrator</p>
						</div>
					</div>
					<div class="team col l4 m4 s12 animated wow fadeInDown" data-wow-delay="0.2s">
						<div class="inside">
							<div class="yellow-hover figure">
							<a href="<?php echo BATTLES_LINK_5; ?>" target="_blank" class="filter">
								<img src="img/figures/teams/bitwy-knopik.jpg" alt="Team logo">
							</a>
							</div>
							<p class="blockTitle">
								<a href="<?php echo BATTLES_LINK_5; ?>" target="_blank">
									Adrian Knopik
								</a>
							</p>
							<p class="block-content">Co-Owner / Fuse Collective</p>
						</div>
					</div>
					<div class="team col l4 m4 s12 animated wow fadeInDown" data-wow-delay="0.4s">
						<div class="inside">
							<div class="yellow-hover figure">
							<a href="<?php echo BATTLES_LINK_6; ?>" target="_blank" class="filter">
								<img src="img/figures/teams/projections-bitwy_16.jpg" alt="Team logo">
							</a>
							</div>
							<p class="blockTitle">
								<a href="<?php echo BATTLES_LINK_6; ?>" target="_blank">
									Jacek Janiczak
								</a>
							</p>
							<p class="block-content">Freelance Graphic Designer</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="battle-teams relative members light-yellow">
		<div class="container light-yellow">
			<div class="battle-info teams-header">
				<div id="yellowTriangle" class="absolute battle-figure"></div>
				<div class="inside battle-info">
					<p class="mainTitle teams">Jury 2016</p>
				</div>
			</div>
			<div class="teams">
				<div class="team-sector">
					<div class="team col l4 m4 s12 animated wow fadeInDown" data-wow-delay="0s">
						<div class="inside">
							<div class="figure">
								<img src="img/members/projections-bitwy-member-3.jpg" alt="Team logo">
							</div>
							<p class="blockTitle">Łukasz Słotwiński</p>
							<p class="block-content">Creative Director nc+ / Design Canal</p>
						</div>
					</div>
					<div class="team col l4 m4 s12 animated wow fadeInDown" data-wow-delay="0.2s">
						<div class="inside">
							<div class="figure">
							<img src="img/members/projections-bitwy-member-2.jpg" alt="Team logo">
							</div>
							<p class="blockTitle">Oskar Podolski</p>
							<p class="block-content">Owner / OESU</p>
						</div>
					</div>
					<div class="team col l4 m4 s12 animated wow fadeInDown" data-wow-delay="0.4s">
						<div class="inside">
							<div class="figure">
								<img src="img/members/projections-bitwy-member-1.png" alt="Team logo">
							</div>

							<p class="blockTitle">Bartek Walczuk</p>
							<p class="block-content">Associate Creative Director w 180heartbeats + JUNG v. MATT</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="battle-application relative">
		<div class="container transparent">
			<div id="application" class="battle-info">
				<div id="blueTriangle" class="absolute battle-figure"></div>
				<p class='mainTitle battle-info'><?php echo BATTLES_APPLICATION_TITLE;?></p>
				<form action="/actions/swiftmailer.php" method="POST" class="apply-form inside battle-info">
					<?php
					if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
						echo  "<div class='alert message'>".$_SESSION['message']."</div>";
					}
					?>
					<div class="form-control">
						<input name="name" type="text" placeholder="<?php echo BATTLES_APPLICATION_NAME;?>" required value="">
					</div>
					<div class="form-control">
						<input name="email" type="email" placeholder="<?php echo BATTLES_APPLICATION_EMAIL;?>" required value="">
					</div>
					<div class="form-control optional" data-text='(<?php echo BATTLES_APPLICATION_OPTIONAL;?>)'>
						<input id="phone" name="phone" type="text" placeholder="<?php echo BATTLES_APPLICATION_PHONE;?>" value="">
					</div>
					<div class="form-control file" id="pdfInputWrap">
						<div class="file-input pdf"><?php echo BATTLES_APPLICATION_PDF;?></div>
						<div class="file-uploader" data-input-id="#portfolio"></div>
						<input id="portfolio" name="portfolio" class="clear" type="text"/>
						<span class="absolute bold star right">*</span>
					</div>

					<div class="form-control file">
						<div class="file-input"><?php echo BATTLES_APPLICATION_INSPIRATION;?></div>
						<div class="file-uploader" data-input-id="#inspiration"></div>
						<input id="inspiration" name="inspiration" class="clear" type="text"/>
					</div>
					<div class="form-control">
						<input name="link_inspiration" type="text"
							   placeholder="<?php echo BATTLES_APPLICATION_SOURCE;?>" value="">
					</div>
					<div class="optional form-control address-form"
						 data-text='(optional)'>
						<input name="address"
							   class="address-input" type="text" placeholder="<?php echo BATTLES_APPLICATION_LINK;?>">
					</div>

					<div class="form-control tiny flex flex-end" id="acceptedWrap">
						<input type="checkbox" class="clear" value="0" name="accepted" id="accepted" />
						<label for="accepted"><?php echo BATTLES_APPLICATION_AGREE;?>
							<span class="bold modal-trigger relative hoverStripe no-padding no-margin"
								  data-open="#rules"><?php echo BATTLES_APPLICATION_RULES;?></span>
							<?php echo BATTLES_APPLICATION_ACCEPT;?></label>

					</div>
					<div class="form-control tiny flex flex-end">
						<span class="absolute bold star no-padding">*</span>
						<p class="send-note"><?php echo BATTLES_APPLICATION_MIME_TITLE;?>
							<span class="bold"><?php echo BATTLES_APPLICATION_MIME;?></span>
						</p>
					</div>
					<div class="form-control left-align">
						<button type="submit" class="event-link display yellow send-application">
							<?php echo BATTLES_APPLICATION_SEND;?>
						</button>
					</div>
				</form>
			</div>
		</div>
	</section>
	<footer class="battle-footer scrollableContent grey">
			<div class="container grey">
				<p class="footer-text"><?php echo BATTLES_APPLICATION_FOOTER;?> <a href="mailto:info@projections.pl">info@projections.pl</a></p>
			</div>
	</footer>
	<div class="workshop-popup" id="rules">

		<div class="workshop-popup-header grey">
			<div class="close modal" data-close="#rules">
				<span class="menu-close"></span>
			</div>
			<div class="workshop-popup-inner">
				<p class="blockTitle modal"><?php echo BATTLES_RULES_SUBTITLE;?></p>
			</div>
		</div>


		<div class="workshop-popup-body white">
			<div class="workshop-popup-inner">
				<p class="block-content"><?php echo BATTLES_RULES_CONTENT;?></p>
			</div>
		</div>

	</div>
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