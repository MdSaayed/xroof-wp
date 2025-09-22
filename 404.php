<?php get_header(); ?>

<section class="error error--style-1"
    data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/global/error-bg.png">
    <div class="error__container">
        <div class="error__area">
            <h1 class="error__title pb-4 pb-xl-8">Error 404</h1>
            <h2 class="error__subtitle title-xl mt-4 mt-xl-8 mb-4">Oops! Page not found</h2>
            <p class="error__text body-text mb-10 mb-xl-15 mb-xx-20">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
                luctus nec ullamcorper mattis, pulvinar
            </p>

            <div class="error__btn-wrap d-flex justify-content-center">
                <a href="<?php echo get_home_url(); ?>" class="error__btn btn-icon-right-primary">
                    Back To Home
                    <svg width="40" height="4" viewBox="0 0 10 7" fill="none">
                        <path
                            d="M9.07926 2.38846C9.15803 2.13084 9.01303 1.85814 8.75541 1.77938L4.55719 0.495857C4.29957 0.417094 4.02687 0.562088 3.94811 0.819712C3.86934 1.07734 4.01434 1.35003 4.27196 1.42879L8.00371 2.5697L6.8628 6.30145C6.78404 6.55908 6.92903 6.83177 7.18666 6.91054C7.44428 6.9893 7.71697 6.8443 7.79574 6.58668L9.07926 2.38846ZM8.61279 2.24585L8.38379 1.81516L0.362471 6.08018L0.591471 6.51086L0.820471 6.94155L8.84179 2.67654L8.61279 2.24585Z"
                            fill="black" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer();