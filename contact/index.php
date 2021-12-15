<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('../site/def.php'); ?>
	<meta charset="utf-8"/>
	<title><?php echo constant("JUDULHOME"); ?> - Kontak</title>

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
	
	$_SESSION['page'] = 'contact';
	include '../site/navigation.php';
	include '../site/header.php';
	?>
	<div id="main">
	<div class="ym-wrapper">
		<div class="ym-wbox">
			<h4>Kontak</h4>
				<div class="ym-gbox-left ym-clearfix" align="center">
					<form name="guestbook" id="guestbook" action="verify.php" method="post" class="ym-form linearize-form ym-columnar" role="application">
						<h6 class="ym-fbox-heading">Mr. Dyhaz</h6>
						<a href="ymsgr:sendIM?hadi1@ymail.com">
						<img src="http://opi.yahoo.com/online?u=hadi1@ymail.com&amp;m=g&amp;t=14&amp;l=us"/>
					</form>
				</div>
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