<?php

/* No Archive Prefix */
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});

/* Change Active Menu Class */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

/* Custom Block Category */
add_filter( 'block_categories_all' , function( $categories ) {

    // Adding a new category.
	$categories[] = array(
		'slug'  => 'custom-layout-category',
		'title' => 'custom'
	);

	return $categories;
} );

function informatics_pagination($args = array())
{

    global $wp_query;

    if (empty($wp_query->max_num_pages) || (int) $wp_query->max_num_pages < 2) {

        return;

    }

    global $post;

    $post_type_labels = get_post_type_labels(get_post_type_object($post->post_type));
    $post_type_label = isset($post_type_labels->singular_name) ? $post_type_labels->singular_name : $post->post_type;

    /**
     * Filter the default post pagination args.
     *
     * @since 1.6.0
     *
     * @param int $current The current page number.
     * @param int $total   The total number of pages.
     *
     * @var array
     */
    $defaults = (array) apply_filters('informatics_pagination_default_args', array(
        'prev_text' => __('&larr; Previous', 'primer'),
        'next_text' => __('Next &rarr;', 'primer'),
        'screen_reader_text' => sprintf( /* translators: post type singular label */esc_html__('%1$s navigation', 'primer'), esc_html($post_type_label)),
    ), max(1, get_query_var('paged')), absint($wp_query->max_num_pages));

    $args = wp_parse_args($args, $defaults);

    the_posts_pagination($args);

}
?>