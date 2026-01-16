<?php
/**
 * Header Template
 * Include this file after the opening <body> tag
 */

// Determine current page for active nav highlighting
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$current_uri = $_SERVER['REQUEST_URI'];

// Check if we're on a service page
$is_service_page = strpos($current_uri, '/services') !== false;
?>

<header class="site-header" id="site-header">
    <nav class="navbar">
        <div class="container">
            <a href="/" class="logo" aria-label="<?php echo SITE_SHORT_NAME; ?> Home">
                <img src="/assets/images/logo.png" alt="<?php echo SITE_SHORT_NAME; ?> Logo" width="150" height="50" class="logo-default">
                <img src="/assets/images/logo-white.png" alt="<?php echo SITE_SHORT_NAME; ?> Logo" width="150" height="50" class="logo-white">
            </a>

            <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
                <span class="hamburger"></span>
            </button>

            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="/" class="nav-link <?php echo $current_page === 'index' ? 'active' : ''; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link <?php echo $current_page === 'about' ? 'active' : ''; ?>">About</a>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="/services" class="nav-link <?php echo $is_service_page || $current_page === 'services' ? 'active' : ''; ?>">
                            Services <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/services/cv-formatting">CV Formatting</a></li>
                            <li><a href="/services/web-development">Web Development</a></li>
                            <li><a href="/services/web-applications">Web Applications</a></li>
                            <li><a href="/services/social-media">Social Media</a></li>
                            <li><a href="/services/graphic-design">Graphic Design</a></li>
                            <li><a href="/services/data-processing">Data Processing</a></li>
                            <li><a href="/services/seo">SEO Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link <?php echo $current_page === 'contact' ? 'active' : ''; ?>">Contact</a>
                    </li>
                </ul>
                <a href="/get-quote" class="btn btn-primary nav-cta">Get Quote</a>
            </div>
        </div>
    </nav>
</header>
