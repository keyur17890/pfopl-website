<?php
/**
 * Web Applications Service Page
 * Parshwanath Formatting OPC Pvt Ltd
 */

require_once __DIR__ . '/../includes/config.php';

// Page SEO Variables
$page_title = 'Custom Web Application Development | PFOPL';
$page_description = 'Bespoke web applications tailored to your business needs. Secure, scalable solutions from an ISO 27001 certified development team.';
$page_keywords = 'web application development, custom web apps, business applications, software development, bespoke web solutions';
$canonical_url = SITE_URL . '/services/web-applications';
$og_image = SITE_URL . '/assets/images/og/web-applications.jpg';
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
                        <span class="current">Web Applications</span>
                    </nav>
                    <h1>Custom Web Application Development</h1>
                    <p>
                        Transform your business processes with bespoke web applications designed to solve
                        your specific challenges. From internal tools to customer-facing portals, we build
                        solutions that drive efficiency.
                    </p>
                    <div class="service-highlight">
                        <i class="fas fa-cogs"></i>
                        <span>Tailored to Your Workflow</span>
                    </div>
                    <div class="service-highlight">
                        <i class="fas fa-lock"></i>
                        <span>ISO 27001 Security Standards</span>
                    </div>
                    <div class="hero-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">Discuss Your Project</a>
                        <a href="/contact" class="btn btn-outline-white btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Build -->
        <section class="section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Applications We Build</h2>
                    <p>Custom solutions for various business needs.</p>
                </div>
                <div class="benefits-grid">
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="0">
                        <div class="benefit-icon">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>CRM Systems</h4>
                            <p>Custom customer relationship management tools tailored to your sales process.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="50">
                        <div class="benefit-icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Project Management</h4>
                            <p>Track tasks, deadlines and team collaboration with purpose-built tools.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="benefit-icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Client Portals</h4>
                            <p>Secure portals for clients to access documents, track progress and communicate.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="150">
                        <div class="benefit-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Data Management</h4>
                            <p>Database applications to organise, analyse and report on business data.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="benefit-icon">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>API Integrations</h4>
                            <p>Connect your systems with third-party services and automate workflows.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="250">
                        <div class="benefit-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Reporting Dashboards</h4>
                            <p>Visual dashboards that provide insights into your key business metrics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Development Process -->
        <section class="section section-alt">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Our Development Process</h2>
                    <p>A structured approach to deliver your application successfully.</p>
                </div>
                <div class="process-steps">
                    <div class="process-step" data-aos="fade-up" data-aos-delay="0">
                        <div class="process-number">1</div>
                        <h4>Discovery</h4>
                        <p>Understand your requirements and define the project scope.</p>
                    </div>
                    <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-number">2</div>
                        <h4>Design</h4>
                        <p>Create wireframes and designs for your approval.</p>
                    </div>
                    <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-number">3</div>
                        <h4>Development</h4>
                        <p>Build the application with regular progress updates.</p>
                    </div>
                    <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-number">4</div>
                        <h4>Launch</h4>
                        <p>Deploy, test and provide training for your team.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content" data-aos="fade-up">
                    <h2>Have an Application Idea?</h2>
                    <p>Tell us about your project and we will provide a detailed proposal and timeline.</p>
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
        "name": "Custom Web Application Development",
        "description": "Bespoke web applications tailored to your business needs with secure, scalable solutions.",
        "provider": {
            "@type": "Organization",
            "name": "<?php echo SITE_NAME; ?>",
            "url": "<?php echo SITE_URL; ?>"
        },
        "serviceType": "Web Application Development"
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
            {"@type": "ListItem", "position": 3, "name": "Web Applications", "item": "<?php echo SITE_URL; ?>/services/web-applications"}
        ]
    }
    </script>
</body>
</html>
