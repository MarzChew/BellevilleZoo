<?php get_header(); ?>

<!----------------- main ----------------->
<main role="main">
	<!-- section .row -->
	<section class="row">
		<!-- #single-wrapper .col-sm-10 col-sm-offset-1 .col-md-12 col-md-offset-0  .col-lg-10 col-lg-offset-1 -->
      	<div  id="single-wrapper" class="col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0  col-lg-10 col-lg-offset-1"> 
        	<h1><?php the_title(); ?></h1>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
					<br class="clear">
				</article>
				<!-- /article -->
			<?php endwhile; ?>
			<?php else: ?>
				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->
		</div>
      	<!-- /#single-wrapper .col-sm-10 col-sm-offset-1 .col-md-12 col-md-offset-0  .col-lg-10 col-lg-offset-1 --> 
		<?php endif; ?>
	</section>
	<!-- /section .row-->
</main>
<!----------------- /main ----------------->

</div>
<!-- / .col-sm-6 (left) (opened in header.php)--> 

<!-- .col-sm-6 (right) -->
<div class="col-md-6 visible-md-block visible-lg-block" id="bloc-image">
	<!-- post thumbnail -->
    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
    <?php the_post_thumbnail('thumb-single', array('class' => 'img-responsive')); // Fullsize image for the single post ?>
    <?php endif; ?>
    <!-- /post thumbnail --> 
</div>
<!-- /.col-sm-6 (right)-->

</div>
<!-- / .row (opened in header.php)-->

<?php get_footer(); ?>
