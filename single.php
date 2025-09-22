<?php get_header(); ?>

<!-- Starting of the Breadcrumbs Area Here -->
<section class="breadcrumbs breadcrumbs--style-1"
    data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/global/breadcrumbs-bg.png">
    <div class="breadcrumbs__container container">
        <h2 class="breadcrumbs__title title-xl-white">Blog Details</h2>
        <ul class="breadcrumbs__list m-0 mt-4">
            <li class="breadcrumbs__item">
                <a href="/" class="breadcrumbs__link">Home</a>
                <svg class="breadcrumbs__icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M9 18L15 12L9 6" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </li>
            <li class="breadcrumbs__item">
                <a href="./blog-details.html" class="breadcrumbs__link">Blog Details</a>
            </li>
        </ul>
    </div>
</section>
<!-- End of the Breadcrumbs Area Here -->

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

<?php get_footer();







