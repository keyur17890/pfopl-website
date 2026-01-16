<?php
/**
 * Graphic Design Service Page
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
                        <span class="current">Graphic Design</span>
                    </nav>
                    <h1>Professional Graphic Design Services</h1>
                    <p>
                        Create a lasting impression with professional graphic design that captures your
                        brand identity. From logos to marketing materials, we design visual assets that
                        communicate your message effectively.
                    </p>
                    <div class="service-highlight">
                        <i class="fas fa-palette"></i>
                        <span>Creative Brand Identity</span>
                    </div>
                    <div class="service-highlight">
                        <i class="fas fa-sync"></i>
                        <span>Unlimited Revisions</span>
                    </div>
                    <div class="hero-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">Get a Quote</a>
                        <a href="/contact" class="btn btn-outline-white btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Design Services -->
        <section class="section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Our Design Services</h2>
                    <p>Creative solutions for all your visual communication needs.</p>
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

        <!-- Why Choose Us -->
        <section class="section section-alt">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Why Choose Our Design Services</h2>
                    <p>Quality design that makes your business look professional.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="feature-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4>Creative Concepts</h4>
                        <p>Fresh, original designs that differentiate your brand from competitors.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Quick Turnaround</h4>
                        <p>Fast delivery without compromising on design quality.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-icon">
                            <i class="fas fa-file-download"></i>
                        </div>
                        <h4>All File Formats</h4>
                        <p>Receive designs in print-ready and web-optimised formats.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-icon">
                            <i class="fas fa-redo"></i>
                        </div>
                        <h4>Revisions Included</h4>
                        <p>We refine designs until you are completely satisfied.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content" data-aos="fade-up">
                    <h2>Need Design Work?</h2>
                    <p>Share your design requirements and we will bring your vision to life.</p>
                    <div class="cta-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">Get a Quote</a>
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
