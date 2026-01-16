<?php
/**
 * Graphic Design Service Page - Premium Design
 * Parshwanath Formatting OPC Pvt Ltd
 */

require_once __DIR__ . '/../includes/config.php';

// Page SEO Variables
$page_title = 'Professional Graphic Design Services | PFOPL';
$page_description = 'Creative graphic design for branding, marketing materials, social media graphics and more. Quality designs that represent your business professionally.';
$page_keywords = 'graphic design services, logo design, branding, marketing materials, social media graphics, business design';
$canonical_url = SITE_URL . '/services/graphic-design';
$og_image = SITE_URL . '/assets/images/og/graphic-design.jpg';
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
                        <span class="current">Graphic Design</span>
                    </nav>
                    <h1>Professional <span class="gradient-text">Graphic Design</span> Services</h1>
                    <p>
                        Create a lasting impression with professional graphic design that captures your
                        brand identity. From logos to marketing materials, we design visual assets that
                        communicate your message effectively.
                    </p>
                    <div class="service-highlights">
                        <div class="service-highlight">
                            <i class="fas fa-palette"></i>
                            <span>Creative Brand Identity</span>
                        </div>
                        <div class="service-highlight">
                            <i class="fas fa-sync"></i>
                            <span>Unlimited Revisions</span>
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

        <!-- Design Services - Premium -->
        <section class="section section-services">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">What We Offer</span>
                    <h2 class="section-title">Our Design <span class="gradient-text">Services</span></h2>
                    <p class="section-subtitle">Creative solutions for all your visual communication needs.</p>
                </div>
                <div class="benefits-grid">
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="0">
                        <div class="benefit-icon">
                            <i class="fas fa-fingerprint"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Logo Design</h4>
                            <p>Distinctive logos that capture your brand essence and stand out.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="50">
                        <div class="benefit-icon">
                            <i class="fas fa-id-card"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Business Stationery</h4>
                            <p>Business cards, letterheads and email signatures that represent your brand.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="benefit-icon">
                            <i class="fas fa-image"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Social Media Graphics</h4>
                            <p>Eye-catching posts, banners and profile images for social platforms.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="150">
                        <div class="benefit-icon">
                            <i class="fas fa-file-image"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Marketing Collateral</h4>
                            <p>Brochures, flyers, posters and promotional materials.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="benefit-icon">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Presentation Design</h4>
                            <p>Professional PowerPoint and pitch deck designs that impress.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="250">
                        <div class="benefit-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Brand Guidelines</h4>
                            <p>Comprehensive brand style guides for consistent visual identity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us - Premium -->
        <section class="section section-features">
            <div class="section-bg">
                <div class="section-glow"></div>
            </div>
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">Our Advantages</span>
                    <h2 class="section-title">Why Choose Our <span class="gradient-text">Design Services</span></h2>
                    <p class="section-subtitle">Quality design that makes your business look professional.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="feature-card-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4 class="feature-card-title">Creative Concepts</h4>
                        <p class="feature-card-text">Fresh, original designs that differentiate your brand from competitors.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4 class="feature-card-title">Quick Turnaround</h4>
                        <p class="feature-card-text">Fast delivery without compromising on design quality.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card-icon">
                            <i class="fas fa-file-download"></i>
                        </div>
                        <h4 class="feature-card-title">All File Formats</h4>
                        <p class="feature-card-text">Receive designs in print-ready and web-optimised formats.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card-icon">
                            <i class="fas fa-redo"></i>
                        </div>
                        <h4 class="feature-card-title">Revisions Included</h4>
                        <p class="feature-card-text">We refine designs until you are completely satisfied.</p>
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
                    <h2 class="cta-title">Need <span>Design Work?</span></h2>
                    <p class="cta-text">Share your design requirements and we will bring your vision to life.</p>
                    <div class="cta-buttons">
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
    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>

    <!-- Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Professional Graphic Design Services",
        "description": "Creative graphic design for branding, marketing materials, social media graphics and more.",
        "provider": {
            "@type": "Organization",
            "name": "<?php echo SITE_NAME; ?>",
            "url": "<?php echo SITE_URL; ?>"
        },
        "serviceType": "Graphic Design"
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
            {"@type": "ListItem", "position": 3, "name": "Graphic Design", "item": "<?php echo SITE_URL; ?>/services/graphic-design"}
        ]
    }
    </script>
</body>
</html>
