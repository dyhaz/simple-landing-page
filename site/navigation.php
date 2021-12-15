<?php
if(isset($_SESSION['page'])){
	$page = $_SESSION['page'];
} else{
	$page = "home";
};
?>
<nav id="nav">
	<div class="ym-wrapper">
		<div class="ym-hlist">
			<ul>
				<li <?php if($page=='home') echo 'class="active"';?>><a href="../home">Home</a></li>
				<li <?php if($page=='guestbook') echo 'class="active"';?>><a href="../guestbook">Buku Tamu</a></li>
				<li <?php if($page=='contact') echo 'class="active"';?>><a href="../contact">Kontak</a></li>
			</ul>
			<form class="ym-searchform" id="login" name="login" method="post" action="../login/check.php">
				<input class="ym-searchfield" type="text" id="username" name="username" placeholder="Username" />
				<input class="ym-searchfield" type="password" id="password" name="password" placeholder="Password" />
				<input class="ym-searchbutton" type="submit" value="Login" />
				<input class="ym-searchbutton" type="button" value="Daftar" onclick="window.location.href='../signup'"/>
			</form>
		</div>
	</div>
</nav>