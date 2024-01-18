<?php get_header(''); ?>
<?php $post_page_id = get_option('page_for_posts'); ?>

<main id="content">
    <?php
    $page_data = get_post(14);

    // Check if the post data was retrieved successfully
    if ($page_data) {
        // Display the content of the specified page
        echo '<div>' . apply_filters('the_content', $page_data->post_content) . '</div>';
    }
    ?>

    <div class="wp-block-columns is-layout-flex">
        <div class="wp-block-column" style="flex-basis: 75%;">
            <?php while (have_posts()) {
                the_post(); ?>
                <div class="blog-list-item">
                    <figure>
                        <?php $image_id = get_post_thumbnail_id(get_the_ID());
                        $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        if ($image_id) {
                        ?>
                            <img src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo $alt_text; ?>" />
                        <?php } else { ?>
                            <img src="<?php echo get_theme_file_uri() ?>/img/default-image.jpg" alt="Our Savior's Lutheran Church" />
                        <?php } ?>
                    </figure>
                    <div class="text">
                        <!-- <p class="date"><?php //the_time('F j, Y'); 
                                                ?></p> -->
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo get_the_excerpt(); ?></p>
                        <div class="wp-block-buttons is-style-btn-text is-layout-flex">
                            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php the_permalink(); ?>">Read More</a></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="wp-block-column">
            <div class="sidebar box">
                <h4>Categories</h4>
                <nav class="sec-nav">
                    <ul>
                        <?php
                        $categories = get_terms(array(
                            'taxonomy' => 'category',
                            'hide_empty' => false,
                        ));
                        foreach ($categories as $category) {
                            if ($category->name != 'Uncategorized') {
                                echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                            }
                        }
                        ?>
                    </ul>
                </nav>
            </div>
            <div class="sidebar box">
                <h4>Tags</h4>
                <nav class="tag-list">
                    <ul>
                        <?php $tags = get_tags(); ?>
                        <?php foreach ($tags as $tag) { ?>
                            <span class="tag-item"><a href="<?php echo get_tag_link($tag->term_id); ?> " rel="tag"><?php echo $tag->name; ?></a></span>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </div>
</main>

<?php get_footer('footer'); ?>