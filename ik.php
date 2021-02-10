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
					İnsan Kaynakları
				</div>
				<div class="col-lg-5 col-md-4 col-6 navigation-item text-right">
					<a href="index-2.php">Anasayfa</a> » İK
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
				<div class="col-md-6 offset-md-3 contact-form">
					<h5 class="contact-title">İletişim Formu</h5>
					<span class="contact-text">Size daha sağlıklı ulaşabilmemiz için aşağıdaki formu eksiksiz doldurunuz.</span>
					<form action="#" method="POST">
						<input type="text" name="" required="" placeholder="Ad - Soyad">
						<input type="text" name="" required="" placeholder="Firma Ünvanı">
						<input type="text" name="" required="" placeholder="Telefon">
						<input type="text" name="" required="" placeholder="Konu">
						<input type="text" name="" required="" placeholder="Başvurmak İstediğiniz Bölüm">
						<!-- <span class="custom-file-upload">
							<input type="file" name="" required="">
							<i class="fas fa-download custom-file-upload-icon"></i>
						</span> -->
						<div class="form-group">
							<input type="file" name="" id="file" class="input-file">
							<label for="file" class="custom-file-upload js-labelFile">
								<i class="icon fa fa-check"></i>
								<span class="js-fileName">CV (pdf, word)</span>
							</label>
						</div>
						<textarea required="" placeholder="Mesaj"></textarea>
						<button type="submit">GÖNDER</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- /Contact -->

	<?php include("inc/footer.php");?>

	<?php include("inc/js.php");?>
	<script type="text/javascript">
		(function() {
			'use strict';
			$('.input-file').each(function() {
				var $input = $(this),
				$label = $input.next('.js-labelFile'),
				labelVal = $label.php();

				$input.on('change', function(element) {
					var fileName = '';
					if (element.target.value) fileName = element.target.value.split('\\').pop();
					fileName ? $label.addClass('has-file').find('.js-fileName').php(fileName) : $label.removeClass('has-file').php(labelVal);
				});
			});
		})();
	</script>
	<!-- /Include Script -->
</body>

</html>