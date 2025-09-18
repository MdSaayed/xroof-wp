<!-- Starting of the offcanvas Area Here-->
<div class="offcanvas offcanvas--style-1">
    <div class="offcanvas__header">
        <div class="offcanvas__logo">
            <a href="/" class="offcanvas__logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/global/logo-black.png" alt="Logo"
                    class="offcanvas__logo-img">
            </a>
        </div>
        <button id="offcanvas-close" class="offcanvas__close" aria-label="Close navigation">
            &times;
        </button>
    </div>

    <ul id="offcanvas-nav-menu" class="nav__menu">
        <li class="nav__item nav__item-has-children">
            <a href="#" class="nav__link">Home</a>
            <ul class="nav__submenu">
                <li class="nav__item  current-menu-item"><a href="./index.html" class="nav__link">Home 01</a></li>
                <li class="nav__item"><a href="./index-2.html" class="nav__link">Home 02</a></li>
                <li class="nav__item"><a href="./index-3.html" class="nav__link">Home 03</a></li>
            </ul>
        </li>

        <li class="nav__item nav__item-has-children">
            <a href="#" class="nav__link">Services</a>
            <ul class="nav__submenu">
                <li class="nav__item"><a href="./services.html" class="nav__link">Services 01</a></li>
                <li class="nav__item"><a href="./services-details.html" class="nav__link">Services Details</a></li>
            </ul>
        </li>

        <li class="nav__item nav__item-has-children">
            <a href="#" class="nav__link">Project</a>
            <ul class="nav__submenu">
                <li class="nav__item"><a href="./project.html" class="nav__link">Project 01</a></li>
                <li class="nav__item"><a href="./project-details.html" class="nav__link">Project Details</a></li>
            </ul>
        </li>

        <li class="nav__item"><a href="./about.html" class="nav__link">About</a></li>

        <li class="nav__item nav__item-has-children">
            <a href="#" class="nav__link">Pages</a>
            <ul class="nav__submenu">
                <li class="nav__item"><a href="./blog.html" class="nav__link">Blog 01</a></li>
                <li class="nav__item"><a href="./blog-details.html" class="nav__link">Blog Details</a></li>
                <li class="nav__item"><a href="./team.html" class="nav__link">Team 01</a></li>
                <li class="nav__item"><a href="./faq.html" class="nav__link">Faq 01</a></li>
                <li class="nav__item"><a href="./404.html" class="nav__link">404</a></li>
            </ul>
        </li>

        <li class="nav__item"><a href="./contact.html" class="nav__link">Contact</a></li>
    </ul>

    <div class="offcanvas__actions mt-6">
        <a href="./contact.html" class="offcanvas__btn btn-icon-right-primary">
            Get Started
            <svg width="40" height="4" viewBox="0 0 10 7" fill="none">
                <path
                    d="M9.07926 2.38846C9.15803 2.13084 9.01303 1.85814 8.75541 1.77938L4.55719 0.495857C4.29957 0.417094 4.02687 0.562088 3.94811 0.819712C3.86934 1.07734 4.01434 1.35003 4.27196 1.42879L8.00371 2.5697L6.8628 6.30145C6.78404 6.55908 6.92903 6.83177 7.18666 6.91054C7.44428 6.9893 7.71697 6.8443 7.79574 6.58668L9.07926 2.38846ZM8.61279 2.24585L8.38379 1.81516L0.362471 6.08018L0.591471 6.51086L0.820471 6.94155L8.84179 2.67654L8.61279 2.24585Z"
                    fill="black" />
            </svg>
        </a>

    </div>
</div>
<!-- End of the offcanvas Area Here-->