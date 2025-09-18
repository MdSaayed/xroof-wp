<?php
$header_top_hours = get_theme_mod('header_top_hours', __('Mon - Fri : 8.00 AM - 7.00 PM', 'xroof'));
$header_top_address = get_theme_mod('header_top_address', __('678 Washington DC, USA', 'xroof'));
$address_top_url = get_theme_mod('address_top_url', __('#', 'xroof'));
$header_topbar_switch = get_theme_mod('header_topbar_switch', false);
$header_right_switch = get_theme_mod('header_right_switch', false);
$header_button_text = get_theme_mod('header_button_text', __('Get Started', 'xroof'));
$header_button_link = get_theme_mod('header_button_link', __('#', 'xroof'));
?>


<!-- Starting of the Header One Area Here -->
<header class="header header--style-1">
    <?php if (!empty($header_topbar_switch)): ?>
        <div class="header__top py-4">
            <div class="header__top-container container py-0">
                <div class="header__top-content">
                    <?php if (!empty($header_top_hours)): ?>
                        <div class="header__info-wrap">
                            <p class="header__info-text"><?php echo esc_html($header_top_hours); ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($header_top_address)): ?>
                        <div class="header__info-wrap">
                            <a href="<?php echo esc_url($address_top_url); ?>" class="header__info-link">
                                <p class="header__info-text header__info-text--address">
                                    <?php echo esc_html($header_top_address); ?>
                                </p>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php xroof_header_social() ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="header__bottom">
        <div class="header__container container py-5">
            <nav class="nav">
                <div class="nav__logo">
                    <?php xroof_header_logo() ?>
                </div>

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_class' => 'nav__menu',
                        'menu_id' => '',
                        'container' => '',
                        'fallback_cb' => 'Xroof_Walker_Nav_Menu::fallback',
                        'walker' => new Xroof_Walker_Nav_Menu,
                    )
                );
                ?>

                <div class="nav__btn-wrap d-flex gap-2">
                    <?php if (!empty($header_right_switch) && !empty($header_button_link)): ?>
                        <a href="<?php echo esc_url($header_button_link); ?>" class="nav__btn btn-icon-right-primary">
                            <?php echo esc_html($header_button_text); ?>
                            <svg width="40" height="4" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.07926 2.38846C9.15803 2.13084 9.01303 1.85814 8.75541 1.77938L4.55719 0.495857C4.29957 0.417094 4.02687 0.562088 3.94811 0.819712C3.86934 1.07734 4.01434 1.35003 4.27196 1.42879L8.00371 2.5697L6.8628 6.30145C6.78404 6.55908 6.92903 6.83177 7.18666 6.91054C7.44428 6.9893 7.71697 6.8443 7.79574 6.58668L9.07926 2.38846ZM8.61279 2.24585L8.38379 1.81516L0.362471 6.08018L0.591471 6.51086L0.820471 6.94155L8.84179 2.67654L8.61279 2.24585Z"
                                    fill="black" />
                            </svg>
                        </a>
                    <?php endif; ?>

                    <button id="offcanvas-toggle" class="nav__toggle"
                        aria-label="<?php echo esc_attr__('Toggle navigation', 'xroof'); ?>">
                        ☰
                    </button>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- End of the Header One Area Here -->


<!-- Template parts -->
<?php echo get_template_part('template-parts/header/offcanvas') ?>
<?php echo get_template_part('template-parts/header/preloader') ?>
























<!-- Starting of the Hero One Area Here-->
<section class="hero hero--style-1"
    data-bg-img="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hero/hero-one-bg.png'); ?>">
    <div class="hero__container container">
        <div class="row g-5">
            <div class="col col-12 col-xl-6">
                <div class="hero__left">
                    <div class="hero__subtitle-wrap flex-items-center mb-4 gap-4">
                        <svg width="32" height="29" viewBox="0 0 32 29" fill="none">
                            <path
                                d="M31.7395 11.0518L30.4823 9.7946C30.1351 9.44737 29.5723 9.44737 29.2251 9.7946L28.5967 10.4229L26.9912 8.81737C27.3039 7.63349 27.0112 6.32293 26.0828 5.3946L23.5689 2.88071C20.0978 -0.590403 14.4695 -0.590403 10.9978 2.88071L16.0262 5.3946V6.43626C16.0262 7.37904 16.4006 8.28349 17.0678 8.95015L19.7978 11.6802C20.7262 12.6085 22.0367 12.9013 23.2206 12.5885L24.8262 14.194L24.1978 14.8224C23.8506 15.1696 23.8506 15.7324 24.1978 16.0796L25.4551 17.3368C25.8023 17.684 26.3651 17.684 26.7123 17.3368L31.7406 12.3085C32.0867 11.9618 32.0867 11.399 31.7395 11.0518ZM15.8106 10.2074C15.6051 10.0018 15.4306 9.7746 15.2634 9.54348L1.09117 22.7752C-0.329384 24.1018 -0.367718 26.3413 1.00617 27.7157C2.38006 29.0902 4.62006 29.0518 5.94673 27.6307L19.1762 13.4602C18.9562 13.2985 18.7373 13.134 18.5406 12.9374L15.8106 10.2074Z"
                                fill="#EE212B" />
                        </svg>
                        <p class="hero__subtitle subtitle-white mb-0">Welcome To XRooF</p>
                    </div>
                    <h1 class="hero__title title-xxl">Reliable Roofing & Fixing <span
                            class="hero__title--highlight highlight">Services</span> In
                        USA</h1>

                    <p class="hero__desc body-text">We provide professional roofing services with expert care, ensuring
                        durable protection and reliable results.</p>

                    <div class="hero__btn-wrap flex-items-center flex-wrap gap-4 mt-8">
                        <a href="./contact.html" class="hero__btn btn-icon-right-primary">Book An Appointment
                            <svg width="40" height="4" viewBox="0 0 10 7" fill="none">
                                <path
                                    d="M9.07926 2.38846C9.15803 2.13084 9.01303 1.85814 8.75541 1.77938L4.55719 0.495857C4.29957 0.417094 4.02687 0.562088 3.94811 0.819712C3.86934 1.07734 4.01434 1.35003 4.27196 1.42879L8.00371 2.5697L6.8628 6.30145C6.78404 6.55908 6.92903 6.83177 7.18666 6.91054C7.44428 6.9893 7.71697 6.8443 7.79574 6.58668L9.07926 2.38846ZM8.61279 2.24585L8.38379 1.81516L0.362471 6.08018L0.591471 6.51086L0.820471 6.94155L8.84179 2.67654L8.61279 2.24585Z"
                                    fill="black" />
                            </svg>
                        </a>

                        <a href="tel:+1234567890" class="hero__btn btn-phn-primary">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none">
                                <path
                                    d="M19.7529 15.604L16.956 12.8071C15.9571 11.8082 14.2589 12.2078 13.8594 13.5063C13.5597 14.4054 12.5608 14.9048 11.6618 14.705C9.66395 14.2055 6.96691 11.6084 6.46746 9.51069C6.16779 8.61164 6.76713 7.61273 7.66615 7.3131C8.96472 6.91354 9.36428 5.2154 8.36538 4.2165L5.56845 1.41957C4.76932 0.720333 3.57064 0.720333 2.87141 1.41957L0.973487 3.31748C-0.924431 5.31529 1.17327 10.6095 5.86812 15.3043C10.563 19.9992 15.8572 22.1968 17.855 20.199L19.7529 18.301C20.4522 17.5019 20.4522 16.3032 19.7529 15.604Z"
                                    fill="#EE212B" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col col-12 col-xl-6">
                <div class="hero__right d-flex justify-content-end">
                    <div class="hero__right-content">
                        <div class="hero__shape-arrow mb-8">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/shape/hero-1-arrow.png'); ?>"
                                alt="<?php echo esc_attr__('Hero Arrow Shape', 'xroof'); ?>"
                                class="hero__shape-arrow-img">
                        </div>

                        <div class="hero__form-wrap px-6 py-8 px-xxl-12 py-xxl-14">
                            <h2 class="hero__form-title mb-12">Request A Free Quote</h2>

                            <form class="hero__form">
                                <input type="text" placeholder="Name" required class="hero__form-input">
                                <input type="email" placeholder="Email Address" required class="hero__form-input">
                                <input type="tel" placeholder="Phone Number" required class="hero__form-input">
                                <input type="text" placeholder="Services" required class="hero__form-input">

                                <input type="submit" value="Submit Now" class="hero__form-submit btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hero__stats">
        <div class="hero__stats-container container">
            <div class="hero__stats d-flex flex-wrap">
                <div class="hero__stats-item">
                    <h3 class="hero__stats-number" data-start="300" data-end="1500" data-duration="1000"
                        data-format="k">2.5k
                    </h3>
                    <p class="hero__stats-text">Completed Projects</p>
                </div>

                <div class="hero__stats-item">
                    <h3 class="hero__stats-number" data-start="300" data-end="1800" data-duration="1000"
                        data-format="k">2.5k
                    </h3>
                    <p class="hero__stats-text">Happy Customers</p>
                </div>
            </div>
        </div>
    </div>

    <div class="hero__img-wrap">
        <img src="./assets/img/hero/hero-1-man.png" alt="" class="hero__img">
    </div>
</section>
<!-- End of the Hero One Area Here-->