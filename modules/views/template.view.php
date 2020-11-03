<!DOCTYPE html >
<!--  Website template by freewebsitetemplates.com  -->
<html>
<?php

    $page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';
?>
<head>
	<title>Pet Shop</title>
	<meta  charset="iso-8859-1" />
	<link href="resources/assets_news/css/style.css" rel="stylesheet" type="text/css" />
		<link href="resources/assets_news/css/ie6.css" rel="stylesheet" type="text/css" />
        <link href="resources/assets_news/css/ie7.css" rel="stylesheet" type="text/css" />
</head>

<body>

	  
			<div id="header">
	           		<a href="index.html" id="logo"><img src="resources/assets_news/images/logo.gif" width="310" height="114" alt="" title=""></a>
					<ul class="navigation">
						<li class="active"><a href="<?php echo SITE_URL ?>" <?php if($page=="" || $page=="home") echo 'class="current"'; ?>>Home</a></li>
						<li><a href="index.php?page=kategori&&action=detail&&id=1">Informasi</a></li>
						<li><a href="index.php?page=kategori&&action=detail&&id=3">Kegiatan</a></li>
           				<li><a href="index.php?page=kategori&&action=detail&&id=2">Promo</a></li>
						<li><a href="<?php echo SITE_URL; ?>?page=pertanyaan" <?php if($page=="pertanyaan") echo 'class="current"'; ?> >Form Kepuasan</a></li>
						<li ><a href="<?php echo SITE_URL; ?>?page=kontak" <?php if($page=="kontak") echo 'class="current"'; ?>>Saran</a></li>
					</ul>
			</div>
			
			<section id="content">
		     <?php
	                $view = new View($viewName);
	                $view->bind('data', $data);
	                $view->forceRender();
	            ?>
		  	
		  	<div id="footer">
			        <div class="section">
						<ul>
							<li>
								<img src="resources/assets_news/images/friendly-pets.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
								<h2><a href="index.html">Friendly Pets</a></h2>
								<p>
								   Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diam nonummy nib. <a class="more" href="index.html">Read More</a> 
								</p>
							</li>	
							<li>
								<img src="resources/assets_news/images/pet-lover2.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
								<h2><a href="index.html">How dangerous are they</a></h2>
								<p>
								   Lorem ipsum dolor sit amet, cons ectetuer adepis cing, sed diam euis. <a class="more" href="index.html">Read More</a> 
								</p>
							</li>	
							<li>
								<img src="resources/assets_news/images/healthy-dog.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
								<h2><a href="index.html">Keep them healthy</a></h2>
								<p>
								   Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diam nonu mmy. <a class="more" href="index.html">Read More</a> 
								</p>
							</li>	
							<li>
								
								<h2><a href="index.html">Love...love...love...pets</a></h2>
								<p>
								     Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diameusim. <a class="more" href="index.html">Read More</a> 
								</p>
								<img src="resources/assets_news/images/pet-lover.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
							</li>	
						</ul>
					</div>
					
		    </section>
					<div id="footnote">
						<div class="section">
						   &copy; 2011 <a href="index.html">Petshop</a>. All Rights Reserved.
						</div>
					</div>
			</div>
			
	
</body>
</html>