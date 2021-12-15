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
	
	$_SESSION['page'] = 'guestbook';
	include '../site/navigation.php';
	include '../site/header.php';
	?>
	<div id="main">
	<div class="ym-wrapper">
		<div class="ym-wbox">
			<h4>Buku Tamu</h4>
				<div class="ym-gbox-left ym-clearfix">
					<form name="guestbook" id="guestbook" action="verify.php" method="post" class="ym-form linearize-form ym-columnar" role="application">
						<h6 class="ym-fbox-heading">Silakan Mengisi Form</h6>
						<div class="ym-fbox-text">
							<label for="nama">Nama
								<sup class="ym-required" title="Kolom ini harus diisi.">*</sup>
							</label>				
							<input type="text" id="nama" name="nama" value="" style="width: 30%;"/>
						</div>
						<div class="ym-fbox-text">
							<label for="email">Alamat Email
								<sup class="ym-required" title="Kolom ini harus diisi.">*</sup>
							</label>				
							<input type="text" id="email" name="email" value="" style="width: 30%;"/>
						</div>
						<div class="ym-fbox-text">
							<label for="url">Situs Web
								
							</label>				
							<input type="text" id="url" name="url" value="" style="width: 30%;"/>
						</div>
						<div class="ym-fbox-text">
							<label for="pesan">Pesan
								<sup class="ym-required" title="Kolom ini harus diisi.">*</sup>
							</label>
							<textarea name="pesan" id="pesan" cols="30" rows="7"></textarea>
						</div>
						<div class="ym-fbox-text">
<!--						<label for="recaptcha_challenge_field">Verifikasi
								<sup class="ym-required" title="Kolom ini harus diisi.">*</sup>								
							</label>-->	
							<center>
							<?php
								require_once('recaptchalib.php');
								$publickey = "6Le5NN8SAAAAAEJJXrVpgJfyDThJDlp1qC5g9qKB"; // you got this from the signup page
								echo recaptcha_get_html($publickey);
							?>	
							</center>
						</div>
						<div class="ym-fbox-button">
							<input type="submit" value="submit" class="save" id="submit" name="submit">
							<input type="reset" value="reset" class="delete" id="reset" name="reset">
						</div>
					</form>
					<table>
						<tr><th>Nama</th><th>Situs Web</th><th>Tanggal</th><th>Pesan</th></tr>
						<?php
						require_once('../site/connection.php');
						$result = mysql_query("SELECT * FROM ".constant("GB_TABLE"));
						while($row = mysql_fetch_array($result)){
							$id = $row[constant("GB_ID")];
							$nama = $row[constant("GB_NAME")];
							$email = $row[constant("GB_EMAIL")];
							$site = $row[constant("GB_SITE")];
							$comment = $row[constant("GB_COMMENT")];
							$tanggal = $row[constant("GB_DATE")];
							echo "<tr><td>".$nama."</td><td><a href='http://".$site."'>".$site."</a></td><td>".$tanggal."</td><td>".$comment."</td></tr>";}
						?>
					</table>
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