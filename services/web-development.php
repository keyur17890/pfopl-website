<?php
/**
 * Web Development Service Page - Premium Design
 * Parshwanath Formatting OPC Pvt Ltd
 */

require_once __DIR__ . '/../includes/config.php';

// Page SEO Variables
$page_title = 'Web Design & Development Services | PFOPL';
$page_description = 'Custom responsive websites for businesses. Professional web development with modern design, fast loading and SEO-friendly structure. Get a quote today.';
$page_keywords = 'web development services, website design, responsive websites, custom web development, business websites, professional web design';
$canonical_url = SITE_URL . '/services/web-development';
$og_image = SITE_URL . '/assets/images/og/web-development.jpg';
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <?php include __DIR__ . '/../includes/seo-head.php'; ?>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-logo">PFOPL</div>
            <div class="preloader-spinner"></div>
        </div>
    </div>

    <!-- Scroll Progress -->
    <div class="scroll-progress"></div>

    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main>
        <!-- Service Hero - Premium -->
        <section class="service-detail-hero">
            <div class="page-hero-bg">
                <div class="page-hero-glow"></div>
                <div class="page-hero-grid"></div>
            </div>
            <div class="container">
                <div class="service-detail-content" data-aos="fade-right">
                    <nav class="breadcrumbs" aria-label="Breadcrumb">
                        <a href="/">Home</a>
                        <span class="separator"><i class="fas fa-chevron-right"></i></span>
                        <a href="/services">Services</a>
                        <span class="separator"><i class="fas fa-chevron-right"></i></span>
                        <span class="current">Web Development</span>
                    </nav>
                    <h1>Web Design & <span class="gradient-text">Development</span> Services</h1>
                    <p>
                        Build your online presence with a professional website that represents your brand,
                        engages visitors, and drives business growth. From simple brochure sites to
                        complex web solutions.
                    </p>
                    <div class="service-highlights">
                        <div class="service-highlight">
                            <i class="fas fa-mobile-alt"></i>
                            <span>Mobile-First Responsive Design</span>
                        </div>
                        <div class="service-highlight">
                            <i class="fas fa-search"></i>
                            <span>SEO-Friendly Structure</span>
                        </div>
                    </div>
                    <div class="hero-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">
                            <span class="btn-text">Get a Quote</span>
                            <span class="btn-icon"><i class="fas fa-paper-plane"></i></span>
                        </a>
                        <a href="/contact" class="btn btn-glass-white btn-lg">
                            <span class="btn-text">Contact Us</span>
                            <span class="btn-icon"><i class="fas fa-envelope"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Offer - Premium -->
        <section class="section section-services">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">What We Offer</span>
                    <h2 class="section-title">Our Web Development <span class="gradient-text">Services</span></h2>
                    <p class="section-subtitle">Comprehensive solutions for your online presence.</p>
                </div>
                <div class="benefits-grid">
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="0">
                        <div class="benefit-icon">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Business Websites</h4>
                            <p>Professional websites that showcase your services and attract clients.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="50">
                        <div class="benefit-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>E-commerce Solutions</h4>
                            <p>Online stores with secure payment processing and inventory management.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="benefit-icon">
                            <i class="fas fa-blog"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Content Management</h4>
                            <p>Easy-to-use CMS platforms that let you update content independently.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="150">
                        <div class="benefit-icon">
                            <i class="fas fa-redo"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Website Redesign</h4>
                            <p>Modernise your existing website with fresh design and improved functionality.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="benefit-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Hosting & Maintenance</h4>
                            <p>Reliable hosting solutions with ongoing support and maintenance.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="250">
                        <div class="benefit-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Performance Optimisation</h4>
                            <p>Fast-loading websites optimised for speed and user experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features - Premium -->
        <section class="section section-features">
            <div class="section-bg">
                <div class="section-glow"></div>
            </div>
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">Our Advantages</span>
                    <h2 class="section-title">Why Choose Our <span class="gradient-text">Web Development</span></h2>
                    <p class="section-subtitle">Quality websites built with your business goals in mind.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="feature-card-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4 class="feature-card-title">Responsive Design</h4>
                        <p class="feature-card-text">Your website looks perfect on desktops, tablets and mobile devices.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4 class="feature-card-title">SEO Built-In</h4>
                        <p class="feature-card-text">Search engine optimised structure to help your site rank better.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="feature-card-title">Secure & Reliable</h4>
                        <p class="feature-card-text">SSL certificates and security best practices to protect your site.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4 class="feature-card-title">Ongoing Support</h4>
                        <p class="feature-card-text">Continued assistance after launch to keep your site running smoothly.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section - Premium -->
        <section class="section section-cta">
            <div class="cta-bg">
                <div class="cta-gradient"></div>
                <div class="cta-pattern"></div>
            </div>
            <div class="container">
                <div class="cta-content" data-aos="fade-up">
                    <span class="section-tag section-tag-light">Get Started</span>
                    <h2 class="cta-title">Ready to Build <span>Your Website?</span></h2>
                    <p class="cta-text">Discuss your web development project with our team and get a detailed proposal.</p>
                    <div class="cta-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">
                            <span class="btn-text">Get a Free Quote</span>
                            <span class="btn-icon"><i class="fas fa-paper-plane"></i></span>
                        </a>
                        <a href="/contact" class="btn btn-glass-white btn-lg">
                            <span class="btn-text">Contact Us</span>
                            <span class="btn-icon"><i class="fas fa-envelope"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>

    <!-- Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Web Design & Development Services",
        "description": "Custom responsive websites for businesses with modern design and SEO-friendly structure.",
        "provider": {
            "@type": "Organization",
            "name": "<?php echo SITE_NAME; ?>",
            "url": "<?php echo SITE_URL; ?>"
        },
        "areaServed": ["GB", "US", "CA", "AU", "IN"],
        "serviceType": "Web Development"
    }
    </script>

    <!-- Breadcrumb Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "<?php echo SITE_URL; ?>"},
            {"@type": "ListItem", "position": 2, "name": "Services", "item": "<?php echo SITE_URL; ?>/services"},
            {"@type": "ListItem", "position": 3, "name": "Web Development", "item": "<?php echo SITE_URL; ?>/services/web-development"}
        ]
    }
    </script>
</body>
</html>
