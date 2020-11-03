<?php

    $page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Petshop </title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link href="resources/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="resources/templatemo_style_fix_menu.css" rel="stylesheet" type="text/css">
  <link href="resources/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
   <link href="resources/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="resources/templatemo_style.css" rel="stylesheet" type="text/css">

  <!-- HTML 5 shim for IE backwards compatibility -->
  <!-- [if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
  </script>
  <![endif]-->
</head>
<body>
  <header>
   <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="brand" href="<?php echo SITE_URL; ?>" <?php if($page=="" || $page=="home") echo 'class="current"'; ?>">Petshop</a>
        <nav class="nav-collapse collapse">
          <ul class="nav pull-right">
           <li><a href="<?php echo SITE_URL; ?>" <?php if($page=="" || $page=="home") echo 'class="current"'; ?>">Beranda</a></li>             
           <li><a href="index.php?page=kategori&&action=detail&&id=1">Informasi</a></li>
           <li><a href="index.php?page=kategori&&action=detail&&id=3">Kegiatan</a></li>
           <li class=""><a href="index.php?page=kategori&&action=detail&&id=2">Promo</a></li>
           <li><a href="<?php echo SITE_URL; ?>?page=pertanyaan" <?php if($page=="pertanyaan") echo 'class="current"'; ?>">Form Kepuasan</a></li>
           <li><a href="<?php echo SITE_URL; ?>?page=kontak" <?php if($page=="kontak") echo 'class="current"'; ?>">Kritik & Saran</a></li>
           
        </ul>
      </nav>
    </div>
  </div>
</div>
</header>
<section class="container" id="page_content">
  <div class="row">
    <div class="span9">
      <div class="row">
        <header class="span12">
          
        </header> 
      </div>
	  
	
<!-- CONTENT WEBSITE BEGIN -->

      <section id="content">
	     <?php
                $view = new View($viewName);
                $view->bind('data', $data);
                $view->forceRender();
            ?>
	  
	    </section>
    </div>
<!-- CONTENT WEBSITE END -->
    <aside class="span3">
      <nav class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header">Categories</li>
        
		  <?php

                            foreach($data["main_kategori"] as $kategori) {

                                ?>
                                <li class="">
                                    <a href="<?php echo SITE_URL; ?>?page=kategori&&action=detail&&id=<?php echo $kategori->id_kategori; ?>">
                                        <?php echo $kategori->nama_kategori; ?> (<?php echo $kategori->total; ?>)
                                    </a>
                                </li>
                            <?php
                            }
                        ?>
        </ul>
      </nav>
  </aside>
  <aside class="span3">
      <nav class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header">Berita Terbaru</li>
        
		   <ul>
                        <?php

                            foreach($data["main_artikel"] as $artikel) {
								
                                ?>
                                <li><a href="<?php echo SITE_URL; ?>?page=artikel&&action=detail&&id=<?php echo $artikel->id_artikel; ?>"><?php echo $artikel->judul; ?></a></li>
                            <?php
                            }
                        ?>
                    </ul>
      </nav>
  </aside>
  </div>
</section>
<footer>
    <div class="container">
      <div class="credit">
        <p id="templatemo_cr_bar">
          Copyright © 2018 <a href="#"></a>
        </p>
      </div>
    </div>
  </footer>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>