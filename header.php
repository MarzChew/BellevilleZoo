<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
        <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title>
        <?php wp_title(''); ?>
        <?php if(wp_title('', false)) { echo ' :'; } ?>
        <?php bloginfo('name'); ?>
        </title>
        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <?php wp_head(); ?>
        <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
<link href="//fnt.webink.com/wfs/webink.css/?project=26DBE9CE-F489-42B0-B3BB-BBCD44BC1E9D&fonts=E2092FF9-B709-DEE1-C5A3-0A46B401D764:f=FuturaPTDemi-Reg,BEE048AF-F74F-572E-AC88-22BFF1F23D13:f=FuturaPTBold-Reg,94250451-B08F-6072-C8B8-6FDBBC9684ED:f=FuturaPTHeavy-Reg" rel="stylesheet" type="text/css"/>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        </head>
        <body <?php body_class(); ?>>

<!-- wrapper -->
<div class="wrapper">

	<!-- .container-fluid -->
	<div class="container-fluid">
		<!-- .row -->
        <div class="row">
			<!-- .col-md-6 -->
        	<div class="col-md-6">
				<!-- header -->
				<header class="header clear" role="banner"> 
          			<!-- row -->
          			<div class="row"> 
    					<!-- .col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 col-lg-10 col-lg-offset-1 header-top -->
    					<div class="col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 col-lg-10 col-lg-offset-1 header-top">
							<?php if (is_home()){ ?>
             		 			<!-- logo -->
              					<div class="logo">
        							<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
								</div>
              					<!-- /logo --> 
                                <!----------------- nav ----------------->
								<div class="clearfix">
                                	<!-- .navbar navbar-default -->
									<div class="navbar navbar-default" role="navigation" id="main-nav">
									<!-- Brand and toggle get grouped for better mobile display -->
										<!-- .navbar-header clearfix -->
                                        <div class="navbar-header clearfix">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".pt-navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
											<span class="navbar-brand"><?php echo get_bloginfo ( 'description' );  ?></span>
										</div>
                                        <!-- /.navbar-header clearfix -->
										<!-- .navbar-collapse collapse pt-navbar-collaps -->
                                        <nav class="navbar-collapse collapse pt-navbar-collapse" role="navigation">
											<?php bootstrap_nav(); ?>
										</nav>
                                        <!-- /.navbar-collapse collapse pt-navbar-collaps -->
                                        <!-- /Brand and toggle get grouped for better mobile display -->
									</div>
                                    <!-- /.navbar navbar-default -->
								</div>
                                <!-- /.clearfix -->
								<!----------------- /nav ----------------->
							<?php }; ?>
              				
							<?php if (!is_home()){ ?>
								<!----------------- nav #single-nav ----------------->
                                <nav id="single-nav">
                                	<a href="<?php echo home_url(); ?>"><i class="fa fa-arrow-left"></i>&nbsp;<?php bloginfo('name'); ?></a>
                                </nav>
                                <!----------------- /nav #single-nav ----------------->
							<?php }; ?>
						</div>
						<!-- /.col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 col-lg-10 col-lg-offset-1 header-top -->
					</div>
					<!-- /row --> 
				</header>
				<!-- /header --> 
