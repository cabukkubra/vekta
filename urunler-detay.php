<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <?php include("inc/head.php");?>
</head>

<body>

	<?php include("inc/header.php");?>

	<!-- Product Detail Navigation -->
	<section class="product-detail-navigation">
		<div class="container-fluid">
			<div class="row">
				<div class="col-10 offset-1 navigation-item">
					<a href="urunler.php">
						<i class="fas fa-chevron-left"></i> VEKPANEL
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /Product Detail Navigation-->

	<!-- Product Detail -->
	<section class="product-detail">
		<div class="container-fluid">
			<div class="row product-slide">
				<div id="carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel" data-slide-to="0" class="active"></li>
						<li data-target="#carousel" data-slide-to="1"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="assets/img/product-detail-slider.png" alt="Product Slider 1">
						</div>
						<div class="carousel-item">
							<img src="assets/img/product-detail-slider.png" alt="Product Slider 2">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
						<i class="fas fa-angle-left"></i>
					</a>
					<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
						<i class="fas fa-angle-right"></i>
					</a>
				</div>
			</div>
			<div class="row property">
				<div class="col-10 offset-1 propert-item">
					<img src="assets/img/property-1.png" alt="Property 1" class="tool-tip" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Özellik Adı">
					<img src="assets/img/property-2.png" alt="Property 2" class="tool-tip" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Özellik Adı">
					<img src="assets/img/property-3.png" alt="Property 3" class="tool-tip" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Özellik Adı">
					<img src="assets/img/property-4.png" alt="Property 4" class="tool-tip" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Özellik Adı">
					<img src="assets/img/property-5.png" alt="Property 5" class="tool-tip" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Özellik Adı">
					<img src="assets/img/property-6.png" alt="Property 6" class="tool-tip" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Özellik Adı">
					<img src="assets/img/property-7.png" alt="Property 7" class="tool-tip" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Özellik Adı">
					<img src="assets/img/property-8.png" alt="Property 8" class="tool-tip" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Özellik Adı">
				</div>
			</div>
			<div class="row content">
				<div class="col-md-7 offset-md-1 content-item">
					<h4>Özellikler</h4>
					<ul>
						<li>But I must explain to you how all this mistaken idea of</li>
						<li>Denouncing pleasure and praising pain was born and I will</li>
						<li>Give you a complete account of the system, and expound the</li>
						<li>Actual teachings of the great explorer of the truth, the</li>
						<li>Master-builder of human happiness. No one rejects, dislike,</li>
						<li>Avoids pleasure itself, because it is pleasure, but because</li>
					</ul>
				</div>
				<div class="col-md-2 content-item">
					<h4>Uygulama Alanları</h4>
					<ul>
						<li>But I must explain</li>
						<li>Denouncing pleasure</li>
						<li>Give you a complete</li>
						<li>Actual teachings of</li>
					</ul>
				</div>
			</div>
			<div class="row info">
				<div class="col-md-10 offset-md-1 info-col">
					<nav>
						<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="tab-technic-info" data-toggle="tab" href="#technic-info" role="tab" aria-controls="technic-info" aria-selected="true">TEKNİK BİLGİ</a>
							<a class="nav-item nav-link" id="tab-technic-draw" data-toggle="tab" href="#technic-draw" role="tab" aria-controls="technic-draw" aria-selected="false">TEKNİK ÇİZİM</a>
							<a class="nav-item nav-link" id="tab-photometric-info" data-toggle="tab" href="#photometric-info" role="tab" aria-controls="photometric-info" aria-selected="false">FOTOMETRİK BİLGİ</a>
							<a class="nav-item nav-link" id="tab-color-opt" data-toggle="tab" href="#color-opt" role="tab" aria-controls="color-opt" aria-selected="false">RENK SEÇENEKLERİ</a>
							<a class="nav-item nav-link" id="tab-accessory" data-toggle="tab" href="#accessory" role="tab" aria-controls="accessory" aria-selected="false">AKSESUARLAR</a>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="technic-info" role="tabpanel" aria-labelledby="tab-technic-info">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th scope="col">Güç<br>(W)</th>
										<th scope="col">Çıkış<br>Lumen</th>
										<th scope="col">Verimlilik<br>(lm/W)</th>
										<th scope="col">CRI<br>(Ra)</th>
										<th scope="col">Renk Sıcaklığı<br>Color Temp. (K)</th>
										<th scope="col">Ölçüler<br>Dimensions (mm)</th>
										<th scope="col">Ürün Kodu<br>Code</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">32</th>
										<th>3332</th>
										<th>104</th>
										<th>80</th>
										<th>30000</th>
										<th>Ø200</th>
										<th>VK-MN3230</th>
									</tr>
									<tr>
										<th scope="row">32</th>
										<th>3332</th>
										<th>104</th>
										<th>80</th>
										<th>30000</th>
										<th>Ø200</th>
										<th>VK-MN3230</th>
									</tr>
									<tr>
										<th scope="row">32</th>
										<th>3332</th>
										<th>104</th>
										<th>80</th>
										<th>30000</th>
										<th>Ø200</th>
										<th>VK-MN3230</th>
									</tr>
									<tr>
										<th scope="row">32</th>
										<th>3332</th>
										<th>104</th>
										<th>80</th>
										<th>30000</th>
										<th>Ø200</th>
										<th>VK-MN3230</th>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane fade text-center" id="technic-draw" role="tabpanel" aria-labelledby="tab-technic-draw">
							<a data-fancybox="gallery" href="assets/img/product-technic-draw.jpg">
								<img src="assets/img/product-technic-draw.jpg" class="img-fluid mb-4" alt="Technic Draw 1">
							</a>
						</div>
						<div class="tab-pane fade text-center" id="photometric-info" role="tabpanel" aria-labelledby="tab-photometric-info">
							<a data-fancybox="gallery" href="assets/img/product-photometric-info.jpg">
								<img src="assets/img/product-photometric-info.jpg" class="img-fluid mb-4" alt="Technic Draw 1">
							</a>
						</div>
						<div class="tab-pane fade" id="color-opt" role="tabpanel" aria-labelledby="tab-color-opt">
							<div class="row">
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 color-opt-item">
									<div class="card">
										<div class="card-img-top" style="background-color: #fff;"></div>
										<div class="card-body">
											<p class="card-text">Beyaz</p>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 color-opt-item">
									<div class="card">
										<div class="card-img-top" style="background-color: #000;"></div>
										<div class="card-body">
											<p class="card-text">Siyah</p>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 color-opt-item">
									<div class="card">
										<div class="card-img-top" style="background-color: #EFEFEF;"></div>
										<div class="card-body">
											<p class="card-text">Gri</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="accessory" role="tabpanel" aria-labelledby="tab-accessory">
							<div class="row">
								<div class="col-md-4 col-sm-6 col-12 accessory-item">
									<div class="row">
										<div class="col-3 accessory-img">
											<a data-fancybox="gallery" href="assets/img/empty-image.png">
												<img src="assets/img/empty-image.png" class="img-fluid" alt="Accesory 1">
											</a>
										</div>
										<div class="col-9">
											<h5 class="accessory-title">Mikroprizmatik şeffaf difüzör</h5>
											<p class="accessory-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.lorem</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-12 accessory-item">
									<div class="row">
										<div class="col-3 accessory-img">
											<a data-fancybox="gallery" href="assets/img/empty-image.png">
												<img src="assets/img/empty-image.png" class="img-fluid" alt="Accesory 1">
											</a>
										</div>
										<div class="col-9">
											<h5 class="accessory-title">Mikroprizmatik şeffaf difüzör</h5>
											<p class="accessory-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.lorem</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-12 accessory-item">
									<div class="row">
										<div class="col-3 accessory-img">
											<a data-fancybox="gallery" href="assets/img/empty-image.png">
												<img src="assets/img/empty-image.png" class="img-fluid" alt="Accesory 1">
											</a>
										</div>
										<div class="col-9">
											<h5 class="accessory-title">Mikroprizmatik şeffaf difüzör</h5>
											<p class="accessory-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.lorem</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-12 accessory-item">
									<div class="row">
										<div class="col-3 accessory-img">
											<a data-fancybox="gallery" href="assets/img/empty-image.png">
												<img src="assets/img/empty-image.png" class="img-fluid" alt="Accesory 1">
											</a>
										</div>
										<div class="col-9">
											<h5 class="accessory-title">Mikroprizmatik şeffaf difüzör</h5>
											<p class="accessory-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.lorem</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row download">
				<div class="col-xl-7 col-lg-6 col-md-10 offset-xl-1 offset-lg-1 offset-md-1 download-area">
					<h4 class="download-title">İndirmeler</h4>
					<div class="download-col">
						<div class="download-item">
							<a href="#" target="_blank">
								<img src="assets/img/download-pdf.png" alt="Dahasheet">
								Datasheet
							</a>
						</div>
						<div class="download-item">
							<a href="#" target="_blank">
								<img src="assets/img/download-pdf.png" alt="Montaj Klavuzu">
								Montaj Klavuzu
							</a>
						</div>
						<div class="download-item">
							<a href="#" target="_blank">
								<img src="assets/img/download-ldt.png" alt="LDT Data">
								LDT Data
							</a>
						</div>
						<div class="download-item">
							<a href="#" target="_blank">
								<img src="assets/img/download-pdf.png" alt="Test Sonuçları">
								Test Sonuçları
							</a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-10 offset-xl-0 offset-lg-0 offset-md-1 back-category">
					<a href="urunler.php"><i class="fas fa-caret-left"></i> Kategoriye geri dön</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /Product Detail -->

	<?php include("inc/footer.php");?>

	<?php include("inc/js.php");?>
</body>

</html>