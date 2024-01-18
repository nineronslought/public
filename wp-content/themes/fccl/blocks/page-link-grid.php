<?php
/* Block Name: Page Link Grid */
$template = array(
	array('core/heading', array(
		'level' => 2,
		'content' => 'Put a Header Here',
	)),
	array( 'core/paragraph', array(
		'content' => 'Put your header content here',
	))
);
?>

<section>
	<div class="container">
		<div class="grid page-link-grid">
			<div class="text">
				<?php echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" />'; ?>
			</div>
			<?php if( have_rows('page_links') ): ?>
				<?php while( have_rows('page_links') ): the_row(); 
					$page = get_sub_field('page'); // Assuming 'page' is a Post Object field
					if ($page) { // Check if the 'page' field has a valid value
						setup_postdata( $page ); // Set up post data for the 'page' field
						$permalink = get_permalink( $page->ID );
						$title = get_the_title( $page->ID );
						$excerpt = get_the_excerpt( $page->ID );
						?>
						<div class="theme-card">
							<h3><?php echo esc_html( $title ); ?></h3>
							<p><?php echo esc_html( $excerpt ); ?></p>
							<div class="wp-block-button is-style-btn-text">
								<a href="<?php echo esc_url( $permalink ); ?>" class="wp-block-button__link" href="">Read More</a>
							</div>
						</div>
						<?php
						wp_reset_postdata(); // Reset post data
					}
				endwhile;
				?>
			<?php endif; ?>
		</div>
	</div>
</section>
