<?php get_header(); ?>

<div class="container">
	<div class="row">		
		<div class="col-md-9" id="col">
		<?php while (the_posts())
		 {
		the_post();
		?>
			<article>
			<?php get_template_part('partials/post', 'thumbnail');?>
				<h1><?php the_title();?></h1>				
					<p>
					 <?php the_content();?>
					</p>
				</article>		
				<?php }?>	 			 		  			 		
		 </div>
		 <!--side_bar-->
		<?php get_sidebar();?>
	</div>
</div>
	<?php get_footer(); ?>