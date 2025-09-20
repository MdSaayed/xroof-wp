<?php
$post_format_thumbnail = function_exists('get_field') ? get_field('post_format_thumbnail') : null;
?>


<div class="col-12 col-md-6 col-xl-4">
    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card d-flex flex-column h-100'); ?>>
        <div class="blog-card__header position-relative">

            <?php if (has_post_thumbnail()): ?>
                <div class="blog-card__image-wrap">
                    <?php if (!$post_format_thumbnail) {
                        $post_format_thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    }
                    
                    if ($post_format_thumbnail): ?>
                        <div class="blog-card__image-wrap">
                            <img src="<?php echo esc_url($post_format_thumbnail); ?>" alt="" class="blog-card__image">
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php echo get_template_part('template-parts/blog-part/video-icon') ?>
            <?php echo get_template_part('template-parts/blog-part/badge') ?>
        </div>

        <div class="blog-card__body">
            <?php if (get_the_title()): ?>
                <a href="<?php echo esc_url(get_permalink()); ?>">
                    <h5 class="blog-card__title mb-2">
                        <?php echo esc_html(wp_html_excerpt(get_the_title(), 80, '...')); ?>
                    </h5>
                </a>
            <?php endif; ?>

            <?php if (get_the_excerpt()): ?>
                <p class="blog-card__text">
                    <?php echo esc_html(wp_html_excerpt(get_the_excerpt(), 100, '...')); ?>
                </p>
            <?php endif; ?>

            <?php echo get_template_part('template-parts/blog-part/button') ?>
        </div>
    </article>
</div>