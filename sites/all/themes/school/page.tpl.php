<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
    <?php print $head ?>
    <title><?php print $head_title ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	
	<script>
		$(function(){
			$('#slides').slides({
				effect: 'fade',
				fadeSpeed:700,
				play: 7000,
				pause: 4000,
				generatePagination: false,
				crossfade: true,
				hoverPause: true,
				animationStart: function(current){$('.caption').animate({right:-500},200);},
				animationComplete: function(current){$('.caption').animate({right:35},300);},
				slidesLoaded: function() {$('.caption').animate({right:35},300);}
			});
		});
	</script>
	<!--[if lt IE 8]>
		<div style='clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
			</a>
		</div>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<style>body{min-width:960px;}</style>
	<![endif]-->
</head>
<body id="page1">
	<div class="bg">
		<!--======================== header ============================-->
		<header>
			<div class="container_24">
				<div class="grid_24">
					<div class="indent-bottom">
						<!--======================== logo ============================-->
						<h1>
							<?php if(empty($site_slogan)) {
								$site_slogan = "Good start for your child";
							}?>
							<a id="site-name" href="<?php print check_url($front_page)?>"><strong><?php print $site_name;?></strong> <span><?php print $site_slogan;?></span></a>
						</h1>										
						<!--======================== menu ============================-->
						<nav>
						<?php if (isset($primary_links)) : ?>
						  <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
						<?php endif; ?>
						<?php if (isset($secondary_links)) : ?>
						  <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
						<?php endif; ?>							
						</nav>
						<div class="clear"></div>
					</div>
					<!--=================== slider ==================-->
					<div id="slides">
						<div class="slides_container">
							<div class="slide">
								<img src="images/slide1.jpg" alt="">
								<div class="caption"></div>
							</div>
							<div class="slide">
								<img src="images/slide2.jpg" alt="">
								<div class="caption"></div>
							</div>
							<div class="slide">
								<img src="images/slide3.jpg" alt="">
								<div class="caption"></div>
							</div>
							<div class="slide">
								<img src="images/slide4.jpg" alt="">
								<div class="caption"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</header>
		<!--======================== content ===========================-->
		<section id="content">
			<div class="container_24">
				<div class="wrapper">
					<div class="grid_8">
						<div class="indent-right1">
							<div class="box bg-color1 maxheight">
								<div class="indents">
									<h3 class="p3">what is <span>our school?</span></h3>
									<p class="font-1 p5-1">Laoreet dolore magna.&shy;orem ipsum dolor ser adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
									<ul class="list-1 p6">
										<li><span><a href="wt_39379#">Research That Benefits Children</a></span></li>
										<li><span><a href="wt_39379#">Programs for Educators</a></span></li>
										<li class="last-item"><span><a href="wt_39379#">Dynamic Classrooms</a></span></li>
									</ul>
									<a href="wt_39379#" class="button">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
					<div class="grid_8">
						<div class="indent-lr">
							<div class="box bg-color2 maxheight">
								<div class="indents">
									<h3 class="p4">our <span>impact</span></h3>
									<figure class="p5">
										<img src="http://cdn.livedemo00.template-help.com:82/wt_39379/images/page1-img1.jpg" alt="">
									</figure>
									<p class="p5-1">Laoreet dolore magna.orem ipsum dolor ser adipiscing elit, sed diam non&shy;ummy nibh euismod tincidunt ut laoreet dolore set.sit amet consectetuer Aad&shy;ipiscing elit, sed diam nonummy. non&shy;ummy nibh euismod tincidunt ut laoreet doloremagna.orem ipsum.</p>
									<a href="wt_39379#" class="button">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
					<div class="grid_8 last-col">
						<div class="indent-left1">
							<div class="box bg-color3 maxheight">
								<div class="indents">
									<h3 class="p3-1">get <span>involved</span></h3>
									<dl class="list-1 p6">
										<dt><span><a href="wt_39379#">Working at our School</a></span></dt>
										<dd>Laoreet dolore magna.&shy;orem ipsum dolor ser adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</dd>
										<dt><span><a href="wt_39379#">Volunteer Your Time</a></span></dt>
										<dd class="last-item">dolore magna.orem ipsum dolor ser adipiscing elit, sed diam non&shy;ummy nibh euismod tincidunt ut laoreet set.</dd>
									</dl>
									<a href="wt_39379#" class="button">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--======================== footer ============================-->
		<footer>
			<div class="container_24">
				<div class="wrapper">
					<div class="grid_24">
						<ul class="footer-menu">
								<li><a href="http://cdn.livedemo00.template-help.com:82/wt_39379/index.html" class="active">About</a></li>
								<li><a href="http://cdn.livedemo00.template-help.com:82/wt_39379/index-1.html">Meet the Staff</a></li>
								<li><a href="http://cdn.livedemo00.template-help.com:82/wt_39379/index-2.html">Principal notes</a></li>
								<li><a href="http://cdn.livedemo00.template-help.com:82/wt_39379/index-3.html">Facilities</a></li>
								<li><a href="http://cdn.livedemo00.template-help.com:82/wt_39379/index-4.html">Curriculum</a></li>
								<li class="last-item"><a href="http://cdn.livedemo00.template-help.com:82/wt_39379/index-5.html">Locations</a></li>
							</ul>
						<div class="footer-text">
							<span>Elementary School © 2012</span> <a href="http://cdn.livedemo00.template-help.com:82/wt_39379/index-6.html">Privacy Policy</a>
							<div class="footer-link"><!--{%FOOTER_LINK} --></div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>