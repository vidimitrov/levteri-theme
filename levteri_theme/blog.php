<?php /* Template Name: blog_template */ ?>

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
							$temp = $wp_query;
							$wp_query= null;
							$wp_query = new WP_Query();
							$wp_query->query('posts_per_page=5'.'&paged='.$paged);
							while ($wp_query->have_posts()) : $wp_query->the_post();
							?>
							
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<?php the_date('Y-m-d', '<p>', '</p>'); ?>
							<div>
								<?php the_content(); ?>
							</div>
							
							<!-- Content goes here-->
							
							<?php endwhile;?>
							
							<?php $wp_query = null; $wp_query = $temp;?>

							
						</div>
						<div class="col2 pad_left1">
						
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