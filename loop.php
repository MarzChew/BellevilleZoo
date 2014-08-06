<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-6 col-md-12 col-xs-12'); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="img-link"> 
				<?php the_post_thumbnail('thumb-home', array('class' => 'img-responsive')); ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<!-- /post title -->
		<!-- post details -->
        <div class="post-details">
        	<span class="post-cat"> <?php $parentscategory ="";
foreach((get_the_category()) as $category) {
if ($category->category_parent == 0) {
$parentscategory .= ' <a href="' . get_category_link($category->cat_ID) . '" title="' . $category->name . '">' . $category->name . '</a>, ';
}
}
echo substr($parentscategory,0,-2); ?></span>
			<span class="date"><?php //the_time('d/m/Y'); ?><?php
  foreach((get_the_category()) as $category) {
    if ($category->category_parent  != 0) {
    echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . esc_attr(strip_tags($category->name)) . '" ' . '>' . $category->name.'</a>&nbsp;&nbsp;';
    }
  }
?></span>
		</div>
    	<!-- /post details -->
	</article>
	<!-- /article -->

<?php endwhile; ?>
<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
