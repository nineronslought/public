<?php
/* Block Name: Full Image Content */

$template = array(
	array('core/heading', array(
		'level' => 2,
		'content' => 'Update This Content',
	)),
  array( 'core/paragraph', array(
      'content' => 'Put your summary content here',
  ))
);
if ( get_field('swap_sides')) {
  $className .= 'swap-sides ';
}
?>

<section class="full-img-content position-relative <?php echo esc_attr($className); ?>">
  <div class="container">
    <div class="grid">
      <figure class="animate-in delay-2 ">
        <?php 
        $image = get_field('content_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
        <?php endif; 
        ?>
      </figure>
      <div class="text animate-in delay-4 visible">
    <?php
    // Set up the custom query
    $resource_query = new WP_Query(array(
        'post_type' => 'resource', // Ensure this is the correct CPT slug
        'posts_per_page' => 1
    ));

    // Check if there are any posts
    if ($resource_query->have_posts()) :
        while ($resource_query->have_posts()) : $resource_query->the_post();
            ?>
            <p class="is-style-eyebrow">Resources</p>
            <h2 class="wp-block-heading"><?php the_title(); ?></h2>
            <p><?php echo get_the_excerpt(); ?></p>
            <?php
        endwhile;
        wp_reset_postdata();
    else : ?>
        <p class="is-style-eyebrow">Resources</p>
        <h2 class="wp-block-heading">No resources available</h2>
        <p>There are currently no resources to display.</p>
    <?php endif; ?>
    <div class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo site_url('/resource/'); ?>">Browse Resources</a></div>
    </div>
</div>
    </div>
  </div>
</section>