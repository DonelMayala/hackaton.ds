<html lang="en">
<head>
	<title>Waterlo</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.0.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/style_yangu.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
	</script>
	<meta name="keywords" content="User Interface Ui Kit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
			</script>
	<!--Calender-->
			<link rel="stylesheet" href="css/clndr.css" type="text/css" />
			<script src="js/underscore-min.js"></script>
			<script src= "js/moment-2.2.1.js"></script>
			<script src="js/clndr.js"></script>
			<script src="js/site.js"></script>
	<!--End Calender-->
</head>
<body>
	<section>
		<div class="col-md-4 first-one">
			<div class="first-one-inner">
				<h3 class="tittle">Connexion</h3>
			<form action="puits.php" methode="post">
				<input type="text" class="text" value="addresse mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" name="login">
				<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" name="mdp">
				<div class="submit"><input type="submit" onclick="myFunction()" value="Sign in" ></div>
				<div class="clearfix"></div>
				<div class="new">
					<h3><a href="#">Mot de passe oublié ?</a></h3>
				</div>
			</form>
			</div>
		</div>
	</section>
</body>
</html>