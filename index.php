<?php get_header(); ?>

<?php if (is_single()): ?>

    <!-- Starting of the Blog Details Area Here -->
    <section class="blog-details">
        <div class="container">
            <div class="row g-4 g-xl-5">
                <div class="col-lg-8">
                    <div class="blog-details__content">
                        <div class="blog-details__thumbnail-wrap">
                            <?php
                            if (has_post_thumbnail()) {
                                echo get_the_post_thumbnail(get_the_ID(), 'full', array(
                                    'class' => 'blog-details__thumbnail',
                                    'alt' => esc_attr(get_the_title()),
                                ));
                            }
                            ?>
                        </div>

                        <h2 class="blog-details__highlight-title mt-4 mb-6"><?php echo esc_html(get_the_title()); ?></h2>

                        <div class="blog-details__content">
                            <?php
                            $content = apply_filters('the_content', get_the_content());
                            echo wp_kses_post($content);
                            ?>
                        </div>

                        <div class="blog-details__share p-4 p-lg-6 mt-10 mt-xl-15 mt-xxl-20">
                            <h3 class="blog-details__share-title mb-0"><?php echo esc_html__('Share :', 'xroof') ?></h3>
                            <?php xroof_blog_share(); ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-15 mt-xl-0">
                    <div class="sidebar sidebar--right">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of the Blog Details Area Here -->

<?php else: ?>

    <!-- Starting of the Blog Area Here -->
    <section class="blog blog--style-1">
        <div class="blog__container container">
            <div class="row g-4 overflow-hidden pb-2">
                <?php if (have_posts()): ?>
                    <div class="col-12 col-md-6 col-xl-4">
                        <?php while (have_posts()):
                            the_post(); ?>
                            <?php get_template_part('template-parts/content', get_post_format()); ?>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <p><?php _e('No Posts To Display.'); ?></p>
                <?php endif; ?>

                <?php xroof_navigation(); ?>
            </div>
        </div>
    </section>
    <!-- End of the Blog Area Here -->

<?php endif; ?>


<?php get_footer();