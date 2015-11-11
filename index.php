<?php get_header(); ?>
<div class="container">
	<div class="row">		
		<div class="col-md-9" id="col">
		<?php 
		while (have_posts())  {
			the_post();
			?>		
		
			<article>
			<?php get_template_part('partials/post', 'thumbnail');?>

				<h1><?php the_title(); ?></h1>				
					<p>
						<?php the_excerpt();?>
					</p>
					  <!--<a href="<?php //echo the_permalink();?>">read more</a> -->
				</article>		
				<?php } ?>	 			  		  			 
		 </div>
		 <!--sidebar-->
		
		<?php get_sidebar();?>
			</div>
</div>
 <?php get_footer(); ?>