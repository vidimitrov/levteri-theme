<?php
/*
Template Name: Gallery Template
*/
?>

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
							<?php if ( function_exists( 'pdfprnt_show_buttons_for_custom_post_type' ) ) 
				echo pdfprnt_show_buttons_for_custom_post_type( 'post_type=gallery&orderby=post_date' ); ?>
			<div class="gallery_box entry-content">
				<ul>
					<?php global $post, $wpdb, $wp_query, $request;
					$paged = $wp_query->query_vars["paged"];
					$permalink = get_permalink();
					$gllr_options = get_option( 'gllr_options' );
					$count = 0;
					$per_page = $showitems = get_option( 'posts_per_page' );  
					$count_all_albums = $wpdb->get_var( "SELECT COUNT(*) FROM wp_posts WHERE 1=1 AND wp_posts.post_type = 'gallery' AND (wp_posts.post_status = 'publish')" );

					if ( $paged == 0 )
						$paged = 1;

					if ( substr( $permalink, strlen( $permalink ) -1 ) != "/" ) {
						if ( strpos( $permalink, "?" ) !== false ) {
							$permalink = substr( $permalink, 0, strpos( $permalink, "?" ) -1 )."/";
						} else {
							$permalink .= "/";
						}
					}

					$args = array(
						'post_type'				=> 'gallery',
						'post_status'			=> 'publish',
						'orderby'				=> 'post_date',
						'posts_per_page'		=> $per_page,
						'paged'					=> $paged
					);
					$second_query = new WP_Query( $args );

					if ( function_exists( 'pdfprnt_show_buttons_for_custom_post_type' ) ) 
						echo pdfprnt_show_buttons_for_custom_post_type( $second_query );
					
					$request = $second_query->request;

					if ( $second_query->have_posts() ) : 
						while ( $second_query->have_posts() ) : $second_query->the_post();
							$attachments	= get_post_thumbnail_id( $post->ID );
							if ( empty ( $attachments ) ) {
								$attachments = get_children( 'post_parent='.$post->ID.'&post_type=attachment&post_mime_type=image&numberposts=1' );
								$id = key($attachments);
								$image_attributes = wp_get_attachment_image_src( $id, 'album-thumb' );
							} else {
								$image_attributes = wp_get_attachment_image_src( $attachments, 'album-thumb' );
							}
							if ( 1 == $gllr_options['border_images'] ) {
								$gllr_border = 'border-radius: 4px; border-style: solid; border-width: ' . $gllr_options['border_images_width'].'px; border-color:'.$gllr_options['border_images_color'].'; padding:0;';
								$gllr_border_images = $gllr_options['border_images_width'] * 2;
							} else {
								$gllr_border = 'padding:0;';
								$gllr_border_images = 0;
							}
							$count++; ?>
							<li>
								<a rel="bookmark" href="<?php echo get_permalink(); ?>" title="<?php echo htmlspecialchars( $post->post_title ); ?>">
									<img style="width:<?php echo $gllr_options['gllr_custom_size_px'][0][0]; ?>px; <?php echo $gllr_border; ?>" alt="<?php echo htmlspecialchars( $post->post_title ); ?>" title="<?php echo htmlspecialchars( $post->post_title ); ?>" src="<?php echo $image_attributes[0]; ?>" />
								</a>
								<div class="gallery_detail_box">
									<div><?php echo htmlspecialchars( $post->post_title ); ?></div>
									<div><?php echo the_excerpt_max_charlength( 100 ); ?></div>
									<a href="<?php echo $permalink; echo basename( get_permalink( $post->ID ) ); ?>"><?php echo $gllr_options["read_more_link_text"]; ?></a>
								</div>
								<div class="clear"></div>
							</li>
						<?php endwhile; 
					endif; 
					wp_reset_query(); 
					$request = $wp_query->request; ?>
				</ul>
				<?php $pages = intval ( $count_all_albums / $per_page );
				if ( $count_all_albums % $per_page > 0 )
					$pages += 1;
				$range = 100;
				if ( ! $pages ) {
					$pages = 1;
				}
				if ( 1 != $pages ) { ?>
					</div><!-- .gallery_box -->
					<div class='clear'></div>
					<div class='pagination'>
						<?php for ( $i = 1; $i <= $pages; $i++ ) {
							if ( 1 != $pages && ( !( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
								echo ( $paged == $i ) ? "<span class='current'>". $i ."</span>":"<a href='". get_pagenum_link($i) ."' class='inactive' >". $i ."</a>";
							}
						} ?>
						<div class='clear'></div>
					</div><!-- .pagination -->
				<?php } else { ?>
					</div><!-- .gallery_box -->
				<?php } ?>
							
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



<?php
/*
<?php get_header(); ?>
	<div id="container" class="site-content">
		<div id="content" class="hentry">
			<h1 class="home_page_title entry-header"><?php the_title(); ?></h1>
			<?php if ( function_exists( 'pdfprnt_show_buttons_for_custom_post_type' ) ) 
				echo pdfprnt_show_buttons_for_custom_post_type( 'post_type=gallery&orderby=post_date' ); ?>
			<div class="gallery_box entry-content">
				<ul>
					<?php global $post, $wpdb, $wp_query, $request;
					$paged = $wp_query->query_vars["paged"];
					$permalink = get_permalink();
					$gllr_options = get_option( 'gllr_options' );
					$count = 0;
					$per_page = $showitems = get_option( 'posts_per_page' );  
					$count_all_albums = $wpdb->get_var( "SELECT COUNT(*) FROM wp_posts WHERE 1=1 AND wp_posts.post_type = 'gallery' AND (wp_posts.post_status = 'publish')" );

					if ( $paged == 0 )
						$paged = 1;

					if ( substr( $permalink, strlen( $permalink ) -1 ) != "/" ) {
						if ( strpos( $permalink, "?" ) !== false ) {
							$permalink = substr( $permalink, 0, strpos( $permalink, "?" ) -1 )."/";
						} else {
							$permalink .= "/";
						}
					}

					$args = array(
						'post_type'				=> 'gallery',
						'post_status'			=> 'publish',
						'orderby'				=> 'post_date',
						'posts_per_page'		=> $per_page,
						'paged'					=> $paged
					);
					$second_query = new WP_Query( $args );

					if ( function_exists( 'pdfprnt_show_buttons_for_custom_post_type' ) ) 
						echo pdfprnt_show_buttons_for_custom_post_type( $second_query );
					
					$request = $second_query->request;

					if ( $second_query->have_posts() ) : 
						while ( $second_query->have_posts() ) : $second_query->the_post();
							$attachments	= get_post_thumbnail_id( $post->ID );
							if ( empty ( $attachments ) ) {
								$attachments = get_children( 'post_parent='.$post->ID.'&post_type=attachment&post_mime_type=image&numberposts=1' );
								$id = key($attachments);
								$image_attributes = wp_get_attachment_image_src( $id, 'album-thumb' );
							} else {
								$image_attributes = wp_get_attachment_image_src( $attachments, 'album-thumb' );
							}
							if ( 1 == $gllr_options['border_images'] ) {
								$gllr_border = 'border-width: ' . $gllr_options['border_images_width'].'px; border-color:'.$gllr_options['border_images_color'].'; padding:0;';
								$gllr_border_images = $gllr_options['border_images_width'] * 2;
							} else {
								$gllr_border = 'padding:0;';
								$gllr_border_images = 0;
							}
							$count++; ?>
							<li>
								<a rel="bookmark" href="<?php echo get_permalink(); ?>" title="<?php echo htmlspecialchars( $post->post_title ); ?>">
									<img style="width:<?php echo $gllr_options['gllr_custom_size_px'][0][0]; ?>px; <?php echo $gllr_border; ?>" alt="<?php echo htmlspecialchars( $post->post_title ); ?>" title="<?php echo htmlspecialchars( $post->post_title ); ?>" src="<?php echo $image_attributes[0]; ?>" />
								</a>
								<div class="gallery_detail_box">
									<div><?php echo htmlspecialchars( $post->post_title ); ?></div>
									<div><?php echo the_excerpt_max_charlength( 100 ); ?></div>
									<a href="<?php echo $permalink; echo basename( get_permalink( $post->ID ) ); ?>"><?php echo $gllr_options["read_more_link_text"]; ?></a>
								</div>
								<div class="clear"></div>
							</li>
						<?php endwhile; 
					endif; 
					wp_reset_query(); 
					$request = $wp_query->request; ?>
				</ul>
				<?php $pages = intval ( $count_all_albums / $per_page );
				if ( $count_all_albums % $per_page > 0 )
					$pages += 1;
				$range = 100;
				if ( ! $pages ) {
					$pages = 1;
				}
				if ( 1 != $pages ) { ?>
					</div><!-- .gallery_box -->
					<div class='clear'></div>
					<div class='pagination'>
						<?php for ( $i = 1; $i <= $pages; $i++ ) {
							if ( 1 != $pages && ( !( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
								echo ( $paged == $i ) ? "<span class='current'>". $i ."</span>":"<a href='". get_pagenum_link($i) ."' class='inactive' >". $i ."</a>";
							}
						} ?>
						<div class='clear'></div>
					</div><!-- .pagination -->
				<?php } else { ?>
					</div><!-- .gallery_box -->
				<?php } 
				comments_template(); ?>
		</div>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
*/
?>