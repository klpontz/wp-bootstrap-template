<!doctype html>
<html>
  <head>
	  
	<!-- wp_title automatically inserts the title of your WordPress site and the page or post into your HTML title tag.  -->
    <title><?php wp_title(''); ?></title>
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
	
	<!-- STYLES
	========================================== -->
	<!-- bloginfo( ‘stylesheet_url’ ) automatically inserts this path, so you don’t have to. -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.min.css">
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" rel="stylesheet" type="text/css" />
	
	<!-- FAV and TOUCH ICONS
	========================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.ico">
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon-144-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon-114-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon-72-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	
	<!-- wp_head tag allows any required code to be automatically inserted so you don’t have to alter your header.php file when installing new plugins. -->
    <?php wp_head(); ?>	
  </head>
  
  <?php body_class(); ?>  data-spy="scroll" data-target=".subnav" data-offset="50" >
  
  <!-- NAVBAR
  ========================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
        	
           <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

          <!-- Everything you want hidden at 940px or less, place within here -->
          <?php wp_nav_menu( array( 'menu' => 'main-menu', 'container_class' => 'nav-collapse', 'menu_class' => 'nav', 'menu_id' => 'main-menu') ); ?>
		</div>
      </div>
    </div>
	
	<div id="mainContent">
	  <div class="container">
 
