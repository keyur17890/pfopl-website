<?php
/**
 * Services Overview Page - Premium Design
 * Parshwanath Formatting OPC Pvt Ltd
 */

require_once __DIR__ . '/includes/config.php';

// Page SEO Variables
$page_title = 'Our Services - CV Formatting, Web Development & More';
$page_description = 'Explore our range of digital services including CV formatting, web development, SEO, graphic design and data processing for recruitment agencies worldwide.';
$page_keywords = 'digital services, CV formatting, web development, SEO services, graphic design, data processing, recruitment services';
$canonical_url = SITE_URL . '/services';
$og_image = SITE_URL . '/assets/images/og/services.jpg';
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <?php include __DIR__ . '/includes/seo-head.php'; ?>
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

    <?php include __DIR__ . '/includes/header.php'; ?>

    <main id="main-content" role="main">
        <!-- Page Hero - Premium -->
        <section class="page-hero">
            <div class="page-hero-bg">
                <div class="page-hero-glow"></div>
                <div class="page-hero-grid"></div>
            </div>
            <div class="container">
                <nav class="breadcrumbs" aria-label="Breadcrumb" data-aos="fade-up">
                    <a href="/">Home</a>
                    <span class="separator"><i class="fas fa-chevron-right"></i></span>
                    <span class="current">Services</span>
                </nav>
                <h1 class="page-hero-title" data-aos="fade-up" data-aos-delay="100">Our <span class="gradient-text">Services</span></h1>
                <p class="page-hero-subtitle" data-aos="fade-up" data-aos-delay="200">Comprehensive digital solutions for recruitment agencies and businesses</p>
            </div>
        </section>

        <!-- Services Overview - Premium -->
        <section class="section section-services-overview">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">What We Offer</span>
                    <h2 class="section-title">Professional <span class="gradient-text">Digital Services</span></h2>
                    <p class="section-subtitle">Tailored solutions designed to help your business operate more efficiently.</p>
                </div>
                <div class="services-overview-grid">
                    <?php foreach ($services as $index => $service): ?>
                    <div class="service-overview-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 50; ?>">
                        <div class="service-overview-card-inner">
                            <div class="service-overview-icon">
                                <i class="fas <?php echo $service['icon']; ?>"></i>
                            </div>
                            <div class="service-overview-content">
                                <h3><?php echo $service['title']; ?></h3>
                                <p><?php echo $service['description']; ?></p>
                                <a href="/services/<?php echo $service['slug']; ?>" class="service-overview-link">
                                    <span>Learn More</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
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
                    <h2 class="section-title">Why Choose <span class="gradient-text">PFOPL</span></h2>
                    <p class="section-subtitle">The advantages of working with our experienced team.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="feature-card-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4 class="feature-card-title">Fast Turnaround</h4>
                        <p class="feature-card-text">Quick delivery on all services without compromising on quality.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h4 class="feature-card-title">ISO Certified</h4>
                        <p class="feature-card-text">Quality and security assured through international certifications.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card-icon">
                            <i class="fas fa-pound-sign"></i>
                        </div>
                        <h4 class="feature-card-title">Competitive Pricing</h4>
                        <p class="feature-card-text">Professional services at rates that work for your budget.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4 class="feature-card-title">Dedicated Support</h4>
                        <p class="feature-card-text">Responsive communication and personalised service.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process - Premium -->
        <section class="section section-process">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">Our Process</span>
                    <h2 class="section-title">How We <span class="gradient-text">Work</span></h2>
                    <p class="section-subtitle">A straightforward process to get you the services you need.</p>
                </div>
                <div class="process-grid">
                    <div class="process-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="process-card-number">01</div>
                        <div class="process-card-content">
                            <h4>Discuss</h4>
                            <p>Share your requirements and we will understand your specific needs.</p>
                        </div>
                        <div class="process-card-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                    </div>
                    <div class="process-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-card-number">02</div>
                        <div class="process-card-content">
                            <h4>Quote</h4>
                            <p>Receive a clear, detailed proposal with pricing and timeline.</p>
                        </div>
                        <div class="process-card-icon">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                    </div>
                    <div class="process-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-card-number">03</div>
                        <div class="process-card-content">
                            <h4>Deliver</h4>
                            <p>We complete the work according to agreed specifications.</p>
                        </div>
                        <div class="process-card-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                    </div>
                    <div class="process-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-card-number">04</div>
                        <div class="process-card-content">
                            <h4>Support</h4>
                            <p>Ongoing assistance and revisions as needed.</p>
                        </div>
                        <div class="process-card-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
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
                    <h2 class="cta-title">Ready to <span>Get Started?</span></h2>
                    <p class="cta-text">Tell us about your project and receive a detailed quote.</p>
                    <div class="cta-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">
                            <span class="btn-text">Request a Quote</span>
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

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <!-- Breadcrumb Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "<?php echo SITE_URL; ?>"},
            {"@type": "ListItem", "position": 2, "name": "Services", "item": "<?php echo SITE_URL; ?>/services"}
        ]
    }
    </script>
</body>
</html>
