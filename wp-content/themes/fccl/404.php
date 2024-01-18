<?php /* Template Name: 404 */
get_header();
?>


<main id="content">
    <section class="page-hdr">
        <figure>
            <img src="<?php echo get_theme_file_uri() ?>/img/404-hero.jpg" alt="Family Crisis Center" />
        </figure>
        <div class="content">
        <div class="text">

    <h1>Page Not Found</h1>
  </div>
        </div>
    </section>
    <div class="wp-block-columns is-layout-flex wp-container-3 wp-block-columns-is-layout-flex">
      <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis: 100.00%;">

          <p style="text-align: center">The page you requested could not be found at this address. <a href="/">Back to Home</a>.</p>
          <?php the_content(); ?>
        </div>
    </div>
</main>






<?php get_footer(); ?>
