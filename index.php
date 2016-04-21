<?php
require 'loginCheck.php';
if(isset($_SESSION['login_user'])){
	//header("location: mainPage.php");
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Нэвтрэх хуудас</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />			
			<link rel="stylesheet" href="css/style.css" />		
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">				
				<!-- Header -->
					<header id="header">				
						<div  class="box">
							<form  action="loginCheck.php" method="post">
								<h1>Нэвтрэх</h1>								
								<input type="text" name="name" placeholder="Хэрэглэгчийн нэр"/>
                                                                <input type="password" name="password" placeholder="Нууц үг"/>
								<button type="submit" name="submit">Нэвтрэх</button>
                                                                <p><span><a href="newPass.php">Нууц үг мартсан?</a></span></p>
								<span><?php echo $error; ?></span>
							</form>
						</div>
					</header>				
				<!-- Footer -->
					<footer id="footer">
						<span class="copyright"></span>
					</footer>				
			</div>
		</div>
	</body>
</html>