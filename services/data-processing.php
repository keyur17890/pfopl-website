<?php
/**
 * Data Processing Service Page
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
                        <span class="current">Data Processing</span>
                    </nav>
                    <h1>Data Processing & Entry Services</h1>
                    <p>
                        Accurate and efficient data processing services that help you manage information
                        effectively. From data entry to complex data conversion and cleansing, we handle
                        your data with precision.
                    </p>
                    <div class="service-highlight">
                        <i class="fas fa-check-double"></i>
                        <span>99.9% Accuracy Guarantee</span>
                    </div>
                    <div class="service-highlight">
                        <i class="fas fa-user-lock"></i>
                        <span>ISO 27001 Data Security</span>
                    </div>
                    <div class="hero-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">Get a Quote</a>
                        <a href="/contact" class="btn btn-outline-white btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Our Data Services</h2>
                    <p>Comprehensive data management solutions for your business.</p>
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

        <!-- Quality Assurance -->
        <section class="section section-alt">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Quality & Security</h2>
                    <p>Your data is handled with the highest standards of accuracy and security.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="feature-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4>ISO 9001 Certified</h4>
                        <p>Quality management system ensuring consistent, high-quality output.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>ISO 27001 Security</h4>
                        <p>Information security certification protecting your sensitive data.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <h4>Double Verification</h4>
                        <p>Multi-level quality checks to ensure accuracy before delivery.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h4>NDA Available</h4>
                        <p>We sign confidentiality agreements for sensitive projects.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content" data-aos="fade-up">
                    <h2>Have Data That Needs Processing?</h2>
                    <p>Share your requirements and receive a quote for accurate, secure data services.</p>
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
