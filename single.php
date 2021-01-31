<?php wp_head();?>
<?php get_header();?>
	<div class="main-content">
		<div class="container">
			<div class="all-blogs">
				<div class="row">
					<div class="col-md-8">
						<div class="blog-single">
							<div class="blog-top">
								<?php the_post_thumbnail();?>
							</div>
							
							<div class="blog-bottom">
								<h2><?php the_title();?></h2>
								<p><?php the_content();?></p>
							</div>
						</div>
						<div class="comments-template">
							<div class="comments">
							
						</div>
						
						<div class="comment-forms">
						<?php comments_template(); ?> 
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="sidebar-widget">
							<div class="widget">
								<?php dynamic_sidebar("sidebar-1");?>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer();?>
<?php wp_footer();?>
