<?php
$post_format_gallery = function_exists('get_field') ? get_field('post_format_gallery') : null;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-card d-flex flex-column h-100'); ?>>
    <div class="blog-card__header">
        <?php if (!empty($post_format_gallery)): ?>
            <?php get_template_part('template-parts/blog-part/gallery'); ?>

        <?php elseif (has_post_thumbnail()): ?>
            <div class="blog-card__image-wrap">
                <a href="<?php echo esc_url(get_permalink()); ?>">
                    <?php the_post_thumbnail(
                        'large',
                        array(
                            'class' => 'blog-card__image',
                            'alt' => esc_attr(get_the_title())
                        )
                    ); ?>
                </a>
            </div>
        <?php endif; ?>

        <?php get_template_part('template-parts/blog-part/badge'); ?>
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