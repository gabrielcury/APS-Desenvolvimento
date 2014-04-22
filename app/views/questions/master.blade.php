<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Title -->
		<title><?php echo $title; ?></title>

		<!-- Meta Tags -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

		<!-- Stylesheets -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=McLaren" type="text/css" />
		<link rel="stylesheet" href="../app/views/questions/css/main-stylesheet.css" type="text/css" />
		<link rel="stylesheet" href="../app/views/questions/css/shortcodes.css" type="text/css" />

		<!-- JavaScripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
		<script src="../app/views/questions/js/scripts.js" type="text/javascript"></script>
		<script src="../app/views/questions/js/jquery.sexyslider.js" type="text/javascript"></script>
		<script src="../app/views/questions/js/jquery.fancybox.js" type="text/javascript"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($){
				$("#homepage-slider").SexySlider({
					autopause  : true,
					auto       : true 
				});
			});
		</script>
	<!-- END head -->
	</head>

	<!-- BEGIN body -->
	<body class="top">
	
	
		<div class="switcher custom-font-1">
			<h1>Decorations</h1>
			<p class="fru fru-active"><a href="javascript:{};" id="fruits">Fresh fruits</a></p>
			<p class="veg"><a href="javascript:{};" id="veggies">Vegetables</a></p>
			<p class="smo"><a href="javascript:{};" id="healthy-drinks">Smoohties</a></p>
			<p class="cor"><a href="javascript:{};" id="corn-flakes">Corn flakes</a></p>
			<p class="ran"><a href="javascript:{};" id="random">Random</a></p>
		</div>


		<!-- BEGIN .main-body-wrapper -->
		<div class="main-body-wrapper">


			<!-- BEGIN .main-logo -->
			<div class="main-logo">
				<a href="#"><img src="../app/views/questions/images/logo-botanica-1.png" alt="" width="447" height="69" style="margin: 38px 0 0 0;" /></a>
				<!-- <div style="padding: 50px 0 0 0;">
					<a href="#" class="title">Rockstar</a>
				</div> -->
			<!-- END .main-logo -->
			</div>


			<!-- BEGIN .main-content-wrapper -->
			<div class="main-content-wrapper">

				<div class="deco-fruits-1" id="bg-img"></div>

				<!-- BEGIN .main-content -->
				<div class="main-content">

					<!-- BEGIN .main-menu -->
					<div class="main-menu custom-font-1">
						<table>
							<tr>
								<td>
									<ul>
										<li><a href="/">Homepage</a></li>
										<li>
											<a href="#"><span>Sobre</span></a>
											<ul>
												<li><a href="#">Como Jogar</a></li>
												<li><a href="#">Pontuação</a></li>
											</ul>
										</li>
										<li><a href="#">Quizz</a></li>
										<li><a href="#">Mural</a></li>
										<li>
											<a href="#"><span>Ranking</span></a>
											<ul>
												<li>
													<form action="#">
														<input type="text" class="search" />
														<input type="submit" class="submit" value="" />
													</form>
												</li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
						</table>
						<div class="clear"></div>
					<!-- END .main-menu -->
					</div>
    
						<div class="homepage-twitter">
						            <center><h1>Quizz</h1></center>
						            
									@foreach ($questions as $question)
							    	<p>Pergunta Nº {{ $question->id }} </p>
							    	<p>{{ $question->title }}</p>
									@endforeach
							<?php
							//echo Form::checkbox('name', 'value');
							//echo Form::radio('name', 'value');
							//echo Form::submit('Click Me!');
							?>
							{{ Form::open(array('url' => 'foo/bar')) }}
   
							{{ Form::close() }}
							 

						 </div>


					<!--div class="homepage-twitter">
						<div class="main-title-1 custom-font-1">
							<span>Our tweets</span>
						</div>
						<div class="item">
							<p><b>Twitter Name:</b> <a href="#">@Crasnon</a> sem in felis consequat cursus vitae pla cerat erat. Ut purus ipsum, laoreet at iaculis non, iaculis.</p>
							<div>
								<span>about 15 hours ago</span>
								<a href="#">open tweet</a>
							</div>
						</div>
						<div class="item">
							<p><b>Twitter Name:</b> Phasellus id turpis augue. <a href="#">http://bit.ly/basEts^</a> enim vel nibh commodo fermentum. Mauris sapien erat, rutrumte.</p>
							<div>
								<span>about 20 hours ago</span>
								<a href="#">open tweet</a>
							</div>
						</div>
						<div class="item last">
							<p><b>Twitter Name:</b> Vestibulum ullamcorper, ante eget rutrum consectetur, ligula lorem ultricies <a href="#">@liguladui</a></p>
							<div>
								<span>about 2 days ago</span>
								<a href="#">open tweet</a>
							</div>
						</div>
					</div-->


					<!--div class="homepage-gallery">
						<div class="main-title-1 custom-font-1">
							<span>Latest photos</span>
						</div>
						<a href="#"><img src="../app/views/questions/images/image-overlay-84x84.png" alt="" width="84" height="92" style="background: url(../app/views/questions/images/photos/photo-5.jpg) 0 0 no-repeat;" /></a>
						<a href="#"><img src="../app/views/questions/images/image-overlay-84x84.png" alt="" width="84" height="92" style="background: url(../app/views/questions/images/photos/photo-6.jpg) 0 0 no-repeat;" /></a>
						<a href="#"><img src="../app/views/questions/images/image-overlay-84x84.png" alt="" width="84" height="92" style="background: url(../app/views/questions/images/photos/photo-7.jpg) 0 0 no-repeat;" /></a>
						<a href="#"><img src="../app/views/questions/images/image-overlay-84x84.png" alt="" width="84" height="92" style="background: url(../app/views/questions/images/photos/photo-8.jpg) 0 0 no-repeat;" /></a>
						<a href="#"><img src="../app/views/questions/images/image-overlay-84x84.png" alt="" width="84" height="92" style="background: url(../app/views/questions/images/photos/photo-9.jpg) 0 0 no-repeat;" /></a>
						<a href="#"><img src="../app/views/questions/images/image-overlay-84x84.png" alt="" width="84" height="92" style="background: url(../app/views/questions/images/photos/photo-10.jpg) 0 0 no-repeat;" /></a>
						<a href="#"><img src="../app/views/questions/images/image-overlay-84x84.png" alt="" width="84" height="92" style="background: url(../app/views/questions/images/photos/photo-11.jpg) 0 0 no-repeat;" /></a>
						<a href="#"><img src="../app/views/questions/images/image-overlay-84x84.png" alt="" width="84" height="92" style="background: url(../app/views/questions/images/photos/photo-12.jpg) 0 0 no-repeat;" /></a>
						<a href="#"><img src="../app/views/questions/images/image-overlay-84x84.png" alt="" width="84" height="92" style="background: url(../app/views/questions/images/photos/photo-5.jpg) 0 0 no-repeat;" /></a>
						<a href="#"><img src="../app/views/questions/images/image-overlay-84x84.png" alt="" width="84" height="92" style="background: url(../app/views/questions/images/photos/photo-6.jpg) 0 0 no-repeat;" /></a>
						<a href="#"><img src="../app/views/questions/images/image-overlay-84x84.png" alt="" width="84" height="92" style="background: url(../app/views/questions/images/photos/photo-7.jpg) 0 0 no-repeat;" /></a>
						<a href="#"><img src="../app/views/questions/images/image-overlay-84x84.png" alt="" width="84" height="92" style="background: url(../app/views/questions/images/photos/photo-8.jpg) 0 0 no-repeat;" /></a>
					</div-->

					<div class="clear"></div>

					<div class="main-footer custom-font-1">
						<p>Copyright &amp; design © 2014 by Gabriel </p>
						<div>
							<a href="#"><img src="../app/views/questions/images/ico-youtube-1.png" alt="YouTube" width="23" height="21" /></a>
							<a href="#"><img src="../app/views/questions/images/ico-facebook-1.png" alt="Facebook" width="23" height="21" /></a>
							<a href="#"><img src="../app/views/questions/images/ico-twitter-2.png" alt="Facebook" width="23" height="21" /></a>
							<a href="#"><img src="../app/views/questions/images/ico-flickr-2.png" alt="Facebook" width="23" height="21" /></a>
							<a href="#"><img src="../app/views/questions/images/ico-rss-1.png" alt="Facebook" width="23" height="21" /></a>
						</div>
					</div>

				<!-- END .main-content -->
				</div>

			<!-- END .main-content-wrapper -->
			</div>


		<!-- END .main-body-wrapper -->
		</div>


	<!-- END body -->
	</body>

<!-- END html -->
</html>