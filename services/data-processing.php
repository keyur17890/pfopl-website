<?php
/**
 * Data Processing Service Page - Premium Design
 * Parshwanath Formatting OPC Pvt Ltd
 */

require_once __DIR__ . '/../includes/config.php';

// Page SEO Variables
$page_title = 'Data Processing & Entry Services | PFOPL';
$page_description = 'Accurate data processing, entry and conversion services. ISO certified quality assurance with fast turnaround for businesses worldwide.';
$page_keywords = 'data processing services, data entry, data conversion, database management, business data services';
$canonical_url = SITE_URL . '/services/data-processing';
$og_image = SITE_URL . '/assets/images/og/data-processing.jpg';
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
                        <span class="current">Data Processing</span>
                    </nav>
                    <h1>Data Processing & <span class="gradient-text">Entry</span> Services</h1>
                    <p>
                        Accurate and efficient data processing services that help you manage information
                        effectively. From data entry to complex data conversion and cleansing, we handle
                        your data with precision.
                    </p>
                    <div class="service-highlights">
                        <div class="service-highlight">
                            <i class="fas fa-check-double"></i>
                            <span>99.9% Accuracy Guarantee</span>
                        </div>
                        <div class="service-highlight">
                            <i class="fas fa-user-lock"></i>
                            <span>ISO 27001 Data Security</span>
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

        <!-- Services - Premium -->
        <section class="section section-services">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">What We Offer</span>
                    <h2 class="section-title">Our Data <span class="gradient-text">Services</span></h2>
                    <p class="section-subtitle">Comprehensive data management solutions for your business.</p>
                </div>
                <div class="benefits-grid">
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="0">
                        <div class="benefit-icon">
                            <i class="fas fa-keyboard"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Data Entry</h4>
                            <p>Accurate manual and automated data entry into your systems or databases.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="50">
                        <div class="benefit-icon">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Data Conversion</h4>
                            <p>Convert data between formats: PDF to Excel, images to text, and more.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="benefit-icon">
                            <i class="fas fa-broom"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Data Cleansing</h4>
                            <p>Remove duplicates, correct errors and standardise your data.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="150">
                        <div class="benefit-icon">
                            <i class="fas fa-file-excel"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Spreadsheet Management</h4>
                            <p>Create, update and maintain complex spreadsheets and databases.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="benefit-icon">
                            <i class="fas fa-file-import"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Data Migration</h4>
                            <p>Move data securely between systems with validation checks.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="250">
                        <div class="benefit-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Data Research</h4>
                            <p>Gather and compile data from various sources as per your requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quality Assurance - Premium -->
        <section class="section section-features">
            <div class="section-bg">
                <div class="section-glow"></div>
            </div>
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">Quality Assurance</span>
                    <h2 class="section-title">Quality & <span class="gradient-text">Security</span></h2>
                    <p class="section-subtitle">Your data is handled with the highest standards of accuracy and security.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="feature-card-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4 class="feature-card-title">ISO 9001 Certified</h4>
                        <p class="feature-card-text">Quality management system ensuring consistent, high-quality output.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="feature-card-title">ISO 27001 Security</h4>
                        <p class="feature-card-text">Information security certification protecting your sensitive data.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card-icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <h4 class="feature-card-title">Double Verification</h4>
                        <p class="feature-card-text">Multi-level quality checks to ensure accuracy before delivery.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h4 class="feature-card-title">NDA Available</h4>
                        <p class="feature-card-text">We sign confidentiality agreements for sensitive projects.</p>
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
                    <h2 class="cta-title">Have Data That Needs <span>Processing?</span></h2>
                    <p class="cta-text">Share your requirements and receive a quote for accurate, secure data services.</p>
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
        "name": "Data Processing & Entry Services",
        "description": "Accurate data processing, entry and conversion services with ISO certified quality assurance.",
        "provider": {
            "@type": "Organization",
            "name": "<?php echo SITE_NAME; ?>",
            "url": "<?php echo SITE_URL; ?>"
        },
        "serviceType": "Data Processing"
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
            {"@type": "ListItem", "position": 3, "name": "Data Processing", "item": "<?php echo SITE_URL; ?>/services/data-processing"}
        ]
    }
    </script>
</body>
</html>
