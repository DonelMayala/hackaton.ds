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
    <?php
        include_once "header.php";
    ?>
    <div class="col-md-4 skill-one">
        <div class="twitter">
            <span class="twitter"><lable>Angeda</lable></span>
            <div class="t-inner">
                <div class="t-first">
                    <p>Entretien sur le puits Heri par <a href="#">J. Kawel</a> </p>
                    <span>le DD/MM</span>
                </div>
                <div class="t-first two">
                    <p>Entretien sur le puits B.Boss par <a href="#">Y. Choni</a> </p>
                    <span>le DD/MM</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 accordions">
        <section class="ac-container">
            <div>
                <input id="ac-1" name="accordion-1" type="checkbox">
                <label for="ac-1">Donel MAYALA</label>
                <article class="ac-small">
                    <p>mayaladonnel8@gmail.com <br>
                    +243 970 631 382</p>
                </article>
            </div>
            <div>
                <input id="ac-2" name="accordion-1" type="checkbox">
                <label for="ac-2">John JADIKA</label>
                <article class="ac-medium">
                    <p>mayaladonnel8@gmail.com <br>
                     +243 970 631 382</p>
                </article>
            </div>
            <div>
                <input id="ac-3" name="accordion-1" type="checkbox">
                <label for="ac-3">Heri KAMONDO</label>
                <article class="ac-large">
                    <p>mayaladonnel8@gmail.com <br>
                    +243 970 631 382</p>
                </article>
        </section>
    </div>
    </section>
</body>
</html>