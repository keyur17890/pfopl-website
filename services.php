<?php
/**
 * Services Overview Page
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
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main>
        <!-- Page Hero -->
        <section class="page-hero">
            <div class="container">
                <nav class="breadcrumbs" aria-label="Breadcrumb">
                    <a href="/">Home</a>
                    <span>/</span>
                    <span class="current">Services</span>
                </nav>
                <h1>Our Services</h1>
                <p>Comprehensive digital solutions for recruitment agencies and businesses</p>
            </div>
        </section>

        <!-- Services Overview -->
        <section class="section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>What We Offer</h2>
                    <p>Professional digital services designed to help your business operate more efficiently.</p>
                </div>
                <div class="services-overview">
                    <?php foreach ($services as $index => $service): ?>
                    <div class="service-overview-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 50; ?>">
                        <div class="service-overview-icon">
                            <i class="fas <?php echo $service['icon']; ?>"></i>
                        </div>
                        <div class="service-overview-content">
                            <h3><?php echo $service['title']; ?></h3>
                            <p><?php echo $service['description']; ?></p>
                            <a href="/services/<?php echo $service['slug']; ?>" class="service-link">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="section section-alt">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Why Choose PFOPL</h2>
                    <p>The advantages of working with our experienced team.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Fast Turnaround</h4>
                        <p>Quick delivery on all services without compromising on quality.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4>ISO Certified</h4>
                        <p>Quality and security assured through international certifications.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-icon">
                            <i class="fas fa-pound-sign"></i>
                        </div>
                        <h4>Competitive Pricing</h4>
                        <p>Professional services at rates that work for your budget.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>Dedicated Support</h4>
                        <p>Responsive communication and personalised service.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process -->
        <section class="section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>How We Work</h2>
                    <p>A straightforward process to get you the services you need.</p>
                </div>
                <div class="process-steps">
                    <div class="process-step" data-aos="fade-up" data-aos-delay="0">
                        <div class="process-number">1</div>
                        <h4>Discuss</h4>
                        <p>Share your requirements and we will understand your specific needs.</p>
                    </div>
                    <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-number">2</div>
                        <h4>Quote</h4>
                        <p>Receive a clear, detailed proposal with pricing and timeline.</p>
                    </div>
                    <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-number">3</div>
                        <h4>Deliver</h4>
                        <p>We complete the work according to agreed specifications.</p>
                    </div>
                    <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-number">4</div>
                        <h4>Support</h4>
                        <p>Ongoing assistance and revisions as needed.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content" data-aos="fade-up">
                    <h2>Ready to Get Started?</h2>
                    <p>Tell us about your project and receive a detailed quote.</p>
                    <div class="cta-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">Request a Quote</a>
                        <a href="/contact" class="btn btn-outline-white btn-lg">Contact Us</a>
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
