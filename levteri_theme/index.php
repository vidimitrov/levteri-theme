<?php get_header(); ?>
<div class="body2">
	<div class="main">
		<article id="content2">
			<div class="wrapper">
				<section class="pad_left1">
					<div class="wrapper">
						<div class="col1">
						</div>
						<div class="col2">
						</div>
					</div>
					<div class="wrapper line2">
						<div class="col1">
							<?php
								if(have_posts()):
									while(have_posts()):
										the_post();
							?>
							
							<div>
								<?php the_content(); ?>
							</div>
							
							<!-- Content goes here-->
							
							<?php endwhile; else: ?>
							<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
							<?php endif; ?>
							
						</div>
						<div class="col2">
						
						<!-- Sidebar -->
							<div class="wrapper pad_bot1">
								<?php if(!dynamic_sidebar('Right Sidebar')): ?>
									<div class="subnav">
										<h5>Navigation</h5>
										<ul>
											<li>Something</li>
											<li>Something</li>
											<li>Something</li>
										</ul>
									</div>
								<?php endif; ?>
							</div>
						<!-- Sidebar -->
						
						</div>
					</div>
				</section>
			</div>
		</article>
<!-- / content -->
	</div>
</div>
<?php get_footer(); ?>