<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('../site/def.php'); ?>
	<meta charset="utf-8"/>
	<title><?php echo constant("JUDULHOME"); ?></title>

	<!-- Mobile viewport optimisation -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- (en) Add your meta data here -->
	<!-- (de) Fuegen Sie hier ihre Meta-Daten ein -->

	<link href="../css/flexible-grids.css" rel="stylesheet" type="text/css"/>

	<!--[if lte IE 7]>
	<link href="../yaml/core/iehacks.css" rel="stylesheet" type="text/css" />
	<![endif]-->

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
	<body>
	<?php
	
	$_SESSION['page'] = 'home';
	include '../site/navigation.php';
	include '../site/header.php';
	?>
	<div id="main">
	<div class="ym-wrapper">
		<div class="ym-wbox">
			<section class="box info">
				<div class="ym-grid linearize-level-1">
					<div class="ym-g66 ym-gl">

						<div class="ym-grid linearize-level-2">
							<article class="ym-g50 ym-gl">
								<div class="ym-gbox-left">
									<img src="../site/images/coffee.png" alt="" class="float-left"/>
									<h4>Pengembang Perangkat Lunak</h4>
									<p>Kami perusahaan pengembang perangkat lunak berbasis desktop dengan bahasa program JAVA.</p>
									<a class="ym-button ym-next" href="#">Read More</a> </div>
							</article>
							<article class="ym-g50 ym-gr">
								<div class="ym-gbox">
									<img src="../site/images/wallet.png" alt="" class="float-left"/>
									<h4>Harga</h4>
									<p>Kami menetapkan harga yang cukup bersaing dan bersahabat untuk bisnis kecil dan menengah.</p>
									<a class="ym-button ym-next" href="#">Read More</a> </div>
							</article>
						</div>

					</div>
					<article class="ym-g33 ym-gr">
						<div class="ym-gbox-right secondary">
							<h4>Pemesanan</h4>
							<p>Silakan mengisi formulir pemesanan perangkat lunak pada <a href="">link ini</a>.</p>
						</div>
					</article>
				</div>
				<div class="fb-like" data-href="http://www.dyhaz.com" data-send="true" data-width="644" data-show-faces="false" data-font="tahoma" data-action="recommend"></div>
			</section>
		</div>
	</div>
	</div>
	<?php
	include '../site/footer.html';
	?>
	<!-- full skip link functionality in webkit browsers -->
	<script src="../yaml/core/js/yaml-focusfix.js"></script>
	</body>
</html>