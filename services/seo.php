<?php
/**
 * SEO Services Page - Premium Design
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

    <main id="main-content" role="main">
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
                        <span class="current">SEO Services</span>
                    </nav>
                    <h1><span class="gradient-text">SEO</span> Services</h1>
                    <p>
                        Improve your website visibility in search results and attract more qualified traffic.
                        Our SEO strategies focus on sustainable growth through technical optimisation,
                        quality content and authoritative backlinks.
                    </p>
                    <div class="service-highlights">
                        <div class="service-highlight">
                            <i class="fas fa-chart-line"></i>
                            <span>Data-Driven Strategies</span>
                        </div>
                        <div class="service-highlight">
                            <i class="fas fa-file-alt"></i>
                            <span>Monthly Reporting</span>
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

        <!-- SEO Services - Premium -->
        <section class="section section-services">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">What We Offer</span>
                    <h2 class="section-title">Our SEO <span class="gradient-text">Services</span></h2>
                    <p class="section-subtitle">Comprehensive search engine optimisation to grow your organic traffic.</p>
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

        <!-- Process - Premium -->
        <section class="section section-process">
            <div class="section-bg">
                <div class="section-glow"></div>
            </div>
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">Our Process</span>
                    <h2 class="section-title">SEO <span class="gradient-text">Process</span></h2>
                    <p class="section-subtitle">A structured approach to improving your search visibility.</p>
                </div>
                <div class="process-grid">
                    <div class="process-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="process-card-number">01</div>
                        <div class="process-card-content">
                            <h4>Audit</h4>
                            <p>Analyse your current SEO performance and identify opportunities.</p>
                        </div>
                        <div class="process-card-icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                    </div>
                    <div class="process-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-card-number">02</div>
                        <div class="process-card-content">
                            <h4>Strategy</h4>
                            <p>Develop a custom SEO plan based on your goals and competition.</p>
                        </div>
                        <div class="process-card-icon">
                            <i class="fas fa-chess"></i>
                        </div>
                    </div>
                    <div class="process-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-card-number">03</div>
                        <div class="process-card-content">
                            <h4>Implement</h4>
                            <p>Execute on-page, technical and off-page optimisations.</p>
                        </div>
                        <div class="process-card-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                    </div>
                    <div class="process-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-card-number">04</div>
                        <div class="process-card-content">
                            <h4>Monitor</h4>
                            <p>Track rankings, traffic and conversions with regular reporting.</p>
                        </div>
                        <div class="process-card-icon">
                            <i class="fas fa-chart-bar"></i>
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
                    <h2 class="cta-title">Ready to Improve <span>Your Rankings?</span></h2>
                    <p class="cta-text">Get a free SEO audit and learn how we can help grow your organic traffic.</p>
                    <div class="cta-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">
                            <span class="btn-text">Request SEO Audit</span>
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
