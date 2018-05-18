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
    <div class="top-header">
            <!--top-nav-->
            <div class="col-md-8 top-nav">
                <span class="menu"> <img src="images/icon.png" alt=""></span>
                <ul class="res">
                    <li><a href="#home" class="active" ><i class="glyphicon"> </i> Puits</a></li>
                    <li><a href="#"><i class="glyphicon"> </i> Entretiens</a></li>
                    <li><a href="#"><i class="glyphicon"> </i> Rapports </a></li>
                </ul>
    <!-- script-for-menu -->
                    <script>
                    $( "span.menu" ).click(function() {
                        $( "ul.res" ).slideToggle( 300, function() {
                        // Animation complete.
                        });
                        });
                </script>
                <!-- /script-for-menu -->
            </div>
            <div class="clearfix"> </div>
        <!--top-nav-->
    </div>
    <div id="map" style="height:60%;width:63%"></div>
    <div class="deals">
        <div class="sap_tabs">	
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">Transactions</li>
                            <li class="resp-tab-item" aria-controls="tab_item-1" role="tab">Pannes</li>
                            <li class="resp-tab-item" aria-controls="tab_item-2" role="tab">A propos du puits</li>
                        </ul>				  	 
                    <div class="resp-tabs-container">
                        <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0">
                        <span class="resp-arrow"></span>TAB DATAPOPULARConnexionConnexionAbout me</h2>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>RECENTS'inscrireS'inscrireMessages</h2><h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Mot de passeMot de passeAdd as a Friend</h2><h2 class="resp-accordion" role="tab" aria-controls="tab_item-3"><span class="resp-arrow"></span></h2><h2 class="resp-accordion" role="tab" aria-controls="tab_item-4"><span class="resp-arrow"></span></h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                <p>
                                    XX litres vendus <br>
                                    Montant: XXXXX Fc
                                </p><hr>
                                <p>
                                    XX litres vendus <br>
                                    Montant: XXXXX Fc
                                </p><hr>
                            </div>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-5">
                            <span class="resp-arrow"></span>TAB DATA</h2>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-6"><span class="resp-arrow"></span></h2><h2 class="resp-accordion" role="tab" aria-controls="tab_item-7"><span class="resp-arrow"></span></h2><h2 class="resp-accordion" role="tab" aria-controls="tab_item-8"><span class="resp-arrow"></span></h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                <p>he printing and typesetting industry.Lorem Ut wisi enim ad minim veniam,nostrud exerci tation ullamcorpersuscipit lobortis nisl ut aliquip ex eacommodo consequat. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                            </div>										
                    </div>
                </div>
                <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#horizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion           
                            width: 'auto', //auto or any width like 600px
                            fit: true   // 100% fit in a container
                        });
                    });
                </script>	
        </div>				
    </div>
    </section>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyA8Ct9luzwqkxmm2r_U3h6bQkPKc1yTiVI &callback=initMap">
    </script>
</body>
</html>