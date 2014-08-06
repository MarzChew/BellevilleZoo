<?php get_header(); ?>
<!----------------- main ----------------->
<main role="main">
	<!-- section .row -->
	<section class="row">
		<!-- #single-wrapper .col-sm-10 col-sm-offset-1 .col-md-12 col-md-offset-0  .col-lg-10 col-lg-offset-1 -->
		<div  id="single-wrapper" class="col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0  col-lg-10 col-lg-offset-1"> 
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
  				<!-- post title -->
  				<h1><?php the_title(); ?></h1>
  				<!-- /post title --> 
				<!-- post details --> 
				<span class="post-cat"> 
					<?php //the_tags( __( '', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
					<?php the_category(', ');?>
				</span>
				<span class="date">
  					<?php the_time('d/m/Y'); ?>
				</span>
				<!-- /post details -->
                <!-- post content -->
  				<?php the_content(); // Dynamic Content ?>
                <!-- /post content -->
			</article>
			<!-- /article -->
		</div>
		<!-- /#single-wrapper .col-sm-10 col-sm-offset-1 .col-md-12 .col-md-offset-0  .col-lg-10 .col-lg-offset-1 --> 
	</section>
	<!-- /section .row  -->
</main>
<!----------------- /main ----------------->
  
</div>
<!-- / .col-sm-6 (left) (opened in header.php) --> 
  
<!-- .col-sm-6 (right)-->
<div class="col-md-6" id="bloc-image"> 
    <!-- post thumbnail -->
    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
    <?php //the_post_thumbnail('thumb-single', array('class' => 'img-responsive')); // Fullsize image for the single post 
	    
	    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb-single' );
$url = $thumb['0'];
	    
	    
	    
    ?>
    <div class="bloc-image-background" style="background-image:url( <?=$url?>);" data-adaptive-background='1' data-ab-css-background='1'></div>
   
    
    
    <?php endif; ?>
    <!-- /post thumbnail --> 
</div>
<!-- / .col-sm-6 (right)--> 

<?php endwhile; ?>
<?php else: ?>

<!-- article -->
<article>
	<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
</article>
<!-- /article -->

<?php endif; ?>

</div>
<!-- / .row opened in header.php-->

<?php get_footer(); ?>
