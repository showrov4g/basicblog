<?php get_header();?>
	
	
	<div class="main-content">
		<div class="container">
			<div class="all-blogs">
				<div class="col-md-12">
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="blog">
						<div class="blog-top">
							<?php the_post_thumbnail();?>
						</div>
						
						<div class="blog-bottom">
							<h2><?php the_title();?></h2>
							<p><?php the_excerpt();?></p>
							<a href="<?php the_permalink();?>" class="read-more-button">Continue Reading....</a>
						</div>
					</div>
					<?php endwhile;?>
					
					
					<div class="paginations">
						<?php echo paginate_links();?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer();?>
<?php wp_footer();?>
