<!doctype html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo("charset");?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo("title");?>|<?php bloginfo("discription");?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri();?>/assets/css/style.css" rel="stylesheet">
    <?php wp_head();?>
  </head>
  <body>

    <div class="header">
		<div class="container">
			  <nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="index.html"><?php the_custom_logo();?></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse pull-right" id="navbarSupportedContent">
					<ul class="navbar-nav">
					  <li class="nav-item active">
                          <?php wp_nav_menu();?>
					  </li>
					</ul>
				  </div>
				</nav>
		</div>
	</div>