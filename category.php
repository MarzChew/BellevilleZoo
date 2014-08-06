<?php get_header(); ?>


<!----------------- main ----------------->
<main role="main">
	<!-- section .row -->
	<section class="row">
		<!-- #single-wrapper .col-sm-10 col-sm-offset-1 .col-md-12 col-md-offset-0  .col-lg-10 col-lg-offset-1 -->
      	<div id="single-wrapper" class="col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0  col-lg-10 col-lg-offset-1"> 
			<h1><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>
        		<!-- #loop-wrapper .row  -->
        		<div id="loop-wrapper" class="row" >
          			<?php get_template_part('loop'); ?>
        		</div>
        		<!-- /#loop-wrapper .row  -->
				<?php get_template_part('pagination'); ?>
		</div>
		<!-- /#single-wrapper .col-sm-10 col-sm-offset-1 .col-md-12 col-md-offset-0  .col-lg-10 col-lg-offset-1 -->
	</section>
	<!-- /section .row ends -->
</main>
<!----------------- /main ----------------->
</div>
<!-- /.col-sm-6 (left) opened in header.php-->

<!-- .col-sm-6 (right)-->
<div class="col-md-6 visible-md-block visible-lg-block" id="bloc-image">
</div>
<!-- /.col-sm-6 (right)-->

</div>
<!-- / .row opened in header.php-->

<?php get_footer(); ?>
