<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <?php include("inc/head.php");?>
</head>

<body>
	<?php include("inc/header.php");?>

	<!-- Page Navigation -->
	<section class="page-navigation">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-5 col-md-4 col-6 navigation-item text-left">
					<a href="#"><i class="fas fa-long-arrow-alt-left"></i> Geri</a>
				</div>
				<div class="col-lg-2 col-md-4 col-6 navigation-item text-center">
					İletişim
				</div>
				<div class="col-lg-5 col-md-4 col-6 navigation-item text-right">
					<a href="index-2.php">Anasayfa</a> » İletişim
				</div>
			</div>
		</div>
	</section>
	<!-- /Page Navigation-->

	<!-- Page Banner -->
	<section class="page-banner">
		<div class="container-fluid pl-0 pr-0">
			<img src="assets/img/contact-banner.png">
		</div>
	</section>
	<!-- /Page Banner -->

	<!-- Contact -->
	<section class="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="row">
						<div class="col-md-6 contact-form">
							<h5 class="contact-title">İletişim Formu</h5>
							<span class="contact-text">Size daha sağlıklı ulaşabilmemiz için aşağıdaki formu eksiksiz doldurunuz.</span>
							<form action="#" method="POST">
								<input type="text" name="" required="" placeholder="Ad - Soyad">
								<input type="text" name="" required="" placeholder="Firma Ünvanı">
								<input type="text" name="" required="" placeholder="Telefon">
								<input type="text" name="" required="" placeholder="Konu">
								<textarea required="" placeholder="Mesaj"></textarea>
								<button type="submit">GÖNDER</button>
							</form>
						</div>
						<div class="col-md-6 contact-address">
							<h5 class="contact-title">Vekta Aydınlatma</h5>
							<span class="contact-text">Ömerli Mahallesi Kazan Sokak No:7/1 Hadımköy, 34555 Arnavutköy/İSTANBUL</span>
							<br>
							<span class="contact-text">
								<a href="tel:+902127982586">Tel : +90 212 798 25 86</a>
							</span>
							<span class="contact-text">
								<a href="tel:+902127982586">Faks: +90 212 798 25 86</a>
							</span>
							<span class="contact-text">
								<a href="mailto:info@vekta.com.tr">Mail: info@vekta.com.tr</a>
							</span>
            				<div class="contact-maps">
            					<div class="googlemaps" id="googlemaps"></div>
            				</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Contact -->

	<?php include("inc/footer.php");?>

	<?php include("inc/js.php");?>
    
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhSZfstyriFMLN-S4HzHceh0M_QTGMnrE&amp;callback=initMap" type="text/javascript"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			/* Contact Google Map Api */
		    var map;
		    var MY_MAPTYPE_ID = 'custom_style';
		    var agadress = new google.maps.LatLng(41.12854,28.627157);

		    function initialize() {

		        var mapOptions = {
		        	zoom: 15,
		        	center: agadress,
		        	scrollwheel: false,
		        	disableDoubleClickZoom: true,
		        	scaleControl: false,
		        	streetViewControl: false,
		        	panControl: true,
		        	panControlOptions: {
		        		position: google.maps.ControlPosition.LEFT
		        	},
		        	zoomControl: true,
		        	zoomControlOptions: {
		        		style: google.maps.ZoomControlStyle.LARGE,
		        		position: google.maps.ControlPosition.LEFT
		        	},
		        	mapTypeControl: false,
		        	mapTypeControlOptions: {
		        		mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
		        	},
		        	mapTypeId: MY_MAPTYPE_ID
		        };

		        map = new google.maps.Map(document.getElementById('googlemaps'),
		        	mapOptions);

		        var image = 'assets/img/marker.png';
		        var position_28 = new google.maps.LatLng(41.12854,28.627157);
		        var marker_pisiren_28 = new google.maps.Marker({
		        	map: map,
		        	icon: image,
		        	position: position_28
		        });

		        var styledMapOptions = {
		        	name: 'Vekta Aydınlatma'
		        };

		        var featureOpts = [{
		        	stylers: [
		        	{"saturation": 1},
		        	{"gamma": 1}
		        	]
		        }];

		        var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

		        map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
		    }

		    google.maps.event.addDomListener(window, 'load', initialize);
			/* /Contact Google Map Api */
		});
	</script>
	<!-- /Include Script -->
</body>

</html>