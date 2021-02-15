<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Sample Shop</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div class="wrapper style1">

				<!-- Header -->
					<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1><a href="#">Sample shop</a></h1>
							<!-- <span class="tag">by TEMPLATED</span> -->
						</div>
						<nav id="nav">
							<ul>
								<li class="active"><a href="#">Homepage</a></li>
								<li><a href="#">Facebook</a></li>
								<li><a href="https://t.me/username">Telegram</a></li>
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Instagram</a></li>
							</ul>
						</nav>
					</div>

						<!-- Main -->
						<div id="main">
						<div class="container">
							<?php 
										  
								$url = 'https://sheetdb.io/api/v1/8rvdmsr1xgfa1';

								$data = json_decode(file_get_contents($url), true);
								//print_r($data);
								$media = str_replace("https://drive.google.com/open?id=","http://drive.google.com/uc?export=view&id=",$data[0]['Media']);
									
								echo '<img src="' . $media .'" alt="" height="auto" width="100%" style="object-fit: cover;">';

								echo '<div class="row"> 
					
								<!-- Content -->
								<div class="6u"><section><ul class="style"><li class="fa fa-globe">';
								
												

								//echo "<br><br>".$data[0]['Timestamp'] . "<br><br>";
								if($data[0]['E) Cara untuk tempahan:'] === 'Whatsapp'){
									$ayat = 'Saya nak beli ';
									$tempah = 'https://wa.me/'. $data[0]['Nombor telefon:'] . '?text='. str_replace(' ','%20',$ayat);
								}
												
												echo '<h3>Lokasi</h3>
												<span>'.$data[0]['B) Lokasi:'].'</span> </li>
											<li class="fa fa-plane">
												<h3>Maklumat Penghantaran</h3>
												<span>'. str_replace(".",".<br>",$data[0]['D) Maklumat penghantaran:']) . ' </span> </li>
										</ul>
									</section>
								</div>
								<div class="6u">
									<section>
										<ul class="style">
											<li class="fa fa-phone">
												<h3>Cara Tempahan</h3>
												<span><a href="'.$tempah.'">Whatsapp</a></span> </li>
											<li class="fa fa-info-circle">
												<h3>Info Tambahan</h3>
												<span>'.$data[0]['F) Info tambahan:'].'</span> </li>
										</ul>
									</section>
								</div>
							</div>
						</div>
					</div>

				<!-- Banner -->
					<div id="banner" class="container">
						<section>
						<p>';
											
								echo '</p>
									<a href="#googleform" class="button medium">Order sekarang</a>
								</section>
							</div>

						<!-- Extra -->
							<div id="extra">
								<div class="container">
									<div class="row no-collapse-1">';

								$url = 'https://sheetdb.io/api/v1/yjqmxkaktrl65';
								$data = json_decode(file_get_contents($url), true);
								$counter = 0;
								foreach($data as $item){
									$img = str_replace("https://drive.google.com/open?id=","http://drive.google.com/uc?export=view&id=",$item['Gambar atau video']);
									$counter++;
									echo (
										'<section class="4u">
										<a href="#" class="image featured">
										<div height="160" width="368" overflow="hidden"><img src="' . $img .'" alt="" height="368" width="160" style="object-fit: cover;"></div>
										</a>
										<div class="box">
											<h3>'. $item['Nama'] .' (' .$item['Berat'] .')<br><strong>'.$item['Harga'].'</strong></h3><br><i>Stock: '.$item['Stok'].'</i></p>
											<a href="'. $tempah .'%0A'.$item['Nama'].'" class="button">Order '.$item['Nama']  .'</a> </div>
										</section>'
								);
							}
								//$img = explode(",",$data[0]['Gambar atau video']);
								
								echo 	'</div>
									
								</div>
							</div>';

						

					?>  
	</div>

	<!-- Footer -->
		<div id="footer" class="wrapper style2">
			<div class="container">
				<section>
					<header class="major">
						<h2>Borang order:</h2>
						<span class="byline">Sila isi borang di bawah dan tekan butang SUBMIT</span>
					</header>
					<iframe id="googleform" src="https://docs.google.com/forms/d/e/1FAIpQLSd_nP8W_0RFybGRJcpseHNn0mFNXmT_b69gKP7HuN_fM45HsA/viewform?embedded=true" 
					width="90%" height="1100px" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
					<!-- <form method="post" action="#">
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="name" id="name" placeholder="Name" />
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<input class="text" type="text" name="email" id="email" placeholder="Email" />
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<textarea name="message" id="message" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="row half">
							<div class="12u">
								<ul class="actions">
									<li>
										<input type="submit" value="Send Message" class="button alt" />
									</li>
								</ul>
							</div>
						</div>
						
					</form> -->
				</section>
			</div>
		</div>

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<div class="copyright">
					<p>Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</p>
					<ul class="icons">
						<li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
					</ul>
				</div>
			</div>
		</div>

	</body>
</html>