<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Title -->
		<title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in index.php?></title>

		<!-- Meta Tags -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

		<!-- Stylesheets -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=McLaren" type="text/css" />
		<link rel="stylesheet" href="css/main-stylesheet.css" type="text/css" />
		<link rel="stylesheet" href="css/shortcodes.css" type="text/css" />

		<!-- JavaScripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
		<script src="js/scripts.js" type="text/javascript"></script>
		<script src="js/jquery.sexyslider.js" type="text/javascript"></script>
		<script src="js/jquery.fancybox.js" type="text/javascript"></script>
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
				<a href="#"><img src="images/logo-botanica-1.png" alt="" width="447" height="69" style="margin: 38px 0 0 0;" /></a>
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
										<li><a href="homepage.html">Homepage</a></li>
										<li>
											<a href="blog.html"><span>Blog</span></a>
											<ul>
												<li><a href="blog.html">Main blog list</a></li>
												<li><a href="post.html">Single post test entry</a></li>
											</ul>
										</li>
										<li><a href="shortcodes.html">Shortcodes</a></li>
										<li>
											<a href="photo-gallery.html"><span>Photos</span></a>
											<ul>
												<li><a href="photo-gallery.html">Photo gallery index</a></li>
												<li><a href="photo-gallery-list.html">Gallery image list</a></li>
												<li><a href="photo-gallery-single.html">Single image</a></li>
											</ul>
										</li>
										<li><a href="contact-us.html">Contact us</a></li>
										<li>
											<a href="contact-us.html"><span>Search</span></a>
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
    
