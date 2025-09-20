<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 6, // koto ta post dakhabe
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
);
$blog_query = new WP_Query($args);
?>


<!-- Starting of the Blog Area Here -->
<section class="blog blog--style-1">
    <div class="blog__container container">
        <div class="row g-4 overflow-hidden pb-2">
            <?php if ($blog_query->have_posts()): ?>
                <?php while ($blog_query->have_posts()):
                    $blog_query->the_post(); ?>
                    <?php get_template_part('template-parts/content', get_post_format()); ?>
                <?php endwhile; ?>
            <?php else: ?>
                <p><?php _e('No Posts To Display.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End of the Blog Area Here -->



<?php get_footer();