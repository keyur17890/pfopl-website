<?php
/**
 * Web Development Service Page
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
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main>
        <!-- Service Hero -->
        <section class="service-detail-hero">
            <div class="container">
                <div class="service-detail-content">
                    <nav class="breadcrumbs" aria-label="Breadcrumb">
                        <a href="/">Home</a>
                        <span>/</span>
                        <a href="/services">Services</a>
                        <span>/</span>
                        <span class="current">Web Development</span>
                    </nav>
                    <h1>Web Design & Development Services</h1>
                    <p>
                        Build your online presence with a professional website that represents your brand,
                        engages visitors, and drives business growth. From simple brochure sites to
                        complex web solutions.
                    </p>
                    <div class="service-highlight">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Mobile-First Responsive Design</span>
                    </div>
                    <div class="service-highlight">
                        <i class="fas fa-search"></i>
                        <span>SEO-Friendly Structure</span>
                    </div>
                    <div class="hero-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">Get a Quote</a>
                        <a href="/contact" class="btn btn-outline-white btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Offer -->
        <section class="section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Our Web Development Services</h2>
                    <p>Comprehensive solutions for your online presence.</p>
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

        <!-- Features -->
        <section class="section section-alt">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Why Choose Our Web Development</h2>
                    <p>Quality websites built with your business goals in mind.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4>Responsive Design</h4>
                        <p>Your website looks perfect on desktops, tablets and mobile devices.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4>SEO Built-In</h4>
                        <p>Search engine optimised structure to help your site rank better.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Secure & Reliable</h4>
                        <p>SSL certificates and security best practices to protect your site.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>Ongoing Support</h4>
                        <p>Continued assistance after launch to keep your site running smoothly.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content" data-aos="fade-up">
                    <h2>Ready to Build Your Website?</h2>
                    <p>Discuss your web development project with our team and get a detailed proposal.</p>
                    <div class="cta-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">Get a Free Quote</a>
                        <a href="/contact" class="btn btn-outline-white btn-lg">Contact Us</a>
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
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "<?php echo SITE_URL; ?>"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Services",
                "item": "<?php echo SITE_URL; ?>/services"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Web Development",
                "item": "<?php echo SITE_URL; ?>/services/web-development"
            }
        ]
    }
    </script>
</body>
</html>
