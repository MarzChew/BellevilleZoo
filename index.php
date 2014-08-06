<?php get_header(); ?>

<!----------------- main ----------------->
<main role="main"> 
	<!-- section -->
	<section> 
    	<!-- .row -->
    	<div class="row"> 
      		<!-- .col-sm-10 .col-sm-offset-1 .col-md-12 .col-md-offset-0 .col-lg-10 .col-lg-offset-1-->
      		<div class="col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 col-lg-10 col-lg-offset-1 "> 
        		<!-- #loop-wrapper .row -->
        		<div id="loop-wrapper" class="row" >
          			<?php get_template_part('loop'); ?>
        		</div>
            	<!-- /#loop-wrapper .row -->
                <!-- .row -->
                <div class="row">
                	<!-- .col-lg-6 col-md-12 col-xs-12-->
      				<div class="col-lg-6 col-md-12 col-xs-12 ">
						<?php get_template_part('pagination'); ?>
                    </div>
      				<!-- /.col-lg-6 col-md-12 col-xs-12-->
                </div>
                <!-- /.row -->
      		</div>
      		<!-- /.col-sm-10 .col-sm-offset-1 .col-md-12 .col-md-offset-0 .col-lg-10 .col-lg-offset-1-->
    	</div>
    	<!-- / .row -->
    	
	</section>
	<!-- /section --> 
</main>
<!----------------- /main ----------------->

</div>
<!-- /.col-sm-6 (left) opened in header.php -->  

<!-- .col-sm-6 (right) -->
<div class="col-md-6 visible-md-block visible-lg-block" id="bloc-image">
<div id="map_canvas"></div>
</div>



<!-- /.col-sm-6 (right) -->

</div>
<!-- /.row opened in header.php-->

<?php get_footer(); ?>
