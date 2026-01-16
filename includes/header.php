<?php
/**
 * Header Template - Premium Design with Accessibility
 * Include this file after the opening <body> tag
 */

// Determine current page for active nav highlighting
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$current_uri = $_SERVER['REQUEST_URI'];

// Check if we're on a service page
$is_service_page = strpos($current_uri, '/services') !== false;
?>

<!-- Skip to main content for accessibility -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<header class="site-header" id="site-header" role="banner">
    <nav class="navbar" role="navigation" aria-label="Main navigation">
        <div class="container">
            <a href="/" class="logo" aria-label="<?php echo SITE_SHORT_NAME; ?> - Return to homepage">
                <img src="/assets/images/logo.svg" alt="<?php echo SITE_SHORT_NAME; ?>" width="150" height="50" class="logo-default">
                <img src="/assets/images/logo-white.svg" alt="<?php echo SITE_SHORT_NAME; ?>" width="150" height="50" class="logo-white">
            </a>

            <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="nav-menu">
                <span class="hamburger" aria-hidden="true"></span>
            </button>

            <div class="nav-menu" id="nav-menu" role="menubar">
                <ul class="nav-list">
                    <li class="nav-item" role="none">
                        <a href="/" class="nav-link <?php echo $current_page === 'index' ? 'active' : ''; ?>" role="menuitem" <?php echo $current_page === 'index' ? 'aria-current="page"' : ''; ?>>Home</a>
                    </li>
                    <li class="nav-item" role="none">
                        <a href="/about" class="nav-link <?php echo $current_page === 'about' ? 'active' : ''; ?>" role="menuitem" <?php echo $current_page === 'about' ? 'aria-current="page"' : ''; ?>>About</a>
                    </li>
                    <li class="nav-item has-dropdown" role="none">
                        <a href="/services" class="nav-link <?php echo $is_service_page || $current_page === 'services' ? 'active' : ''; ?>" role="menuitem" aria-haspopup="true" aria-expanded="false" <?php echo $current_page === 'services' ? 'aria-current="page"' : ''; ?>>
                            Services <i class="fas fa-chevron-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-label="Services submenu">
                            <li role="none"><a href="/services/cv-formatting" role="menuitem">CV Formatting</a></li>
                            <li role="none"><a href="/services/web-development" role="menuitem">Web Development</a></li>
                            <li role="none"><a href="/services/web-applications" role="menuitem">Web Applications</a></li>
                            <li role="none"><a href="/services/social-media" role="menuitem">Social Media</a></li>
                            <li role="none"><a href="/services/graphic-design" role="menuitem">Graphic Design</a></li>
                            <li role="none"><a href="/services/data-processing" role="menuitem">Data Processing</a></li>
                            <li role="none"><a href="/services/seo" role="menuitem">SEO Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" role="none">
                        <a href="/contact" class="nav-link <?php echo $current_page === 'contact' ? 'active' : ''; ?>" role="menuitem" <?php echo $current_page === 'contact' ? 'aria-current="page"' : ''; ?>>Contact</a>
                    </li>
                </ul>
                <a href="/get-quote" class="btn btn-primary nav-cta">Get Quote</a>
            </div>
        </div>
    </nav>
</header>
