<?php
/**
 * SEO Services Page
 * Parshwanath Formatting OPC Pvt Ltd
 */

require_once __DIR__ . '/../includes/config.php';

// Page SEO Variables
$page_title = 'SEO Services - Improve Your Search Rankings | PFOPL';
$page_description = 'Professional SEO services to boost your website visibility. On-page optimisation, content strategy and link building for sustainable growth.';
$page_keywords = 'SEO services, search engine optimisation, website ranking, on-page SEO, link building, local SEO';
$canonical_url = SITE_URL . '/services/seo';
$og_image = SITE_URL . '/assets/images/og/seo.jpg';
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
                        <span class="current">SEO Services</span>
                    </nav>
                    <h1>SEO Services</h1>
                    <p>
                        Improve your website visibility in search results and attract more qualified traffic.
                        Our SEO strategies focus on sustainable growth through technical optimisation,
                        quality content and authoritative backlinks.
                    </p>
                    <div class="service-highlight">
                        <i class="fas fa-chart-line"></i>
                        <span>Data-Driven Strategies</span>
                    </div>
                    <div class="service-highlight">
                        <i class="fas fa-file-alt"></i>
                        <span>Monthly Reporting</span>
                    </div>
                    <div class="hero-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">Get a Quote</a>
                        <a href="/contact" class="btn btn-outline-white btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEO Services -->
        <section class="section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Our SEO Services</h2>
                    <p>Comprehensive search engine optimisation to grow your organic traffic.</p>
                </div>
                <div class="benefits-grid">
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="0">
                        <div class="benefit-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Keyword Research</h4>
                            <p>Identify high-value keywords your target audience is searching for.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="50">
                        <div class="benefit-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>On-Page SEO</h4>
                            <p>Optimise titles, meta descriptions, headers and content structure.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="benefit-icon">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Technical SEO</h4>
                            <p>Fix site speed, mobile issues, crawl errors and indexing problems.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="150">
                        <div class="benefit-icon">
                            <i class="fas fa-pen"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Content Strategy</h4>
                            <p>Create content that ranks well and engages your audience.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="benefit-icon">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Link Building</h4>
                            <p>Acquire quality backlinks to build your site authority.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="250">
                        <div class="benefit-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Local SEO</h4>
                            <p>Optimise for local search and Google Business Profile.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process -->
        <section class="section section-alt">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Our SEO Process</h2>
                    <p>A structured approach to improving your search visibility.</p>
                </div>
                <div class="process-steps">
                    <div class="process-step" data-aos="fade-up" data-aos-delay="0">
                        <div class="process-number">1</div>
                        <h4>Audit</h4>
                        <p>Analyse your current SEO performance and identify opportunities.</p>
                    </div>
                    <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-number">2</div>
                        <h4>Strategy</h4>
                        <p>Develop a custom SEO plan based on your goals and competition.</p>
                    </div>
                    <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-number">3</div>
                        <h4>Implement</h4>
                        <p>Execute on-page, technical and off-page optimisations.</p>
                    </div>
                    <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-number">4</div>
                        <h4>Monitor</h4>
                        <p>Track rankings, traffic and conversions with regular reporting.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content" data-aos="fade-up">
                    <h2>Ready to Improve Your Rankings?</h2>
                    <p>Get a free SEO audit and learn how we can help grow your organic traffic.</p>
                    <div class="cta-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">Request SEO Audit</a>
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
        "name": "SEO Services",
        "description": "Professional SEO services to boost your website visibility with on-page optimisation, content strategy and link building.",
        "provider": {
            "@type": "Organization",
            "name": "<?php echo SITE_NAME; ?>",
            "url": "<?php echo SITE_URL; ?>"
        },
        "serviceType": "Search Engine Optimization"
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
            {"@type": "ListItem", "position": 3, "name": "SEO Services", "item": "<?php echo SITE_URL; ?>/services/seo"}
        ]
    }
    </script>
</body>
</html>
