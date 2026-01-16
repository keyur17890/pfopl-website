<?php
/**
 * About Page
 * Parshwanath Formatting OPC Pvt Ltd
 */

require_once __DIR__ . '/includes/config.php';

// Page SEO Variables
$page_title = 'About PFOPL - ISO Certified Digital Services Since 2016';
$page_description = 'Learn about Parshwanath Formatting, an ISO 9001 and 27001 certified company providing CV formatting and digital services to global recruitment agencies since 2016.';
$page_keywords = 'about PFOPL, Parshwanath Formatting, ISO certified, digital services company, recruitment agency services, CV formatting company';
$canonical_url = SITE_URL . '/about';
$og_image = SITE_URL . '/assets/images/og/about.jpg';
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
                    <span class="current">About Us</span>
                </nav>
                <h1>About PFOPL</h1>
                <p>Your trusted partner for digital excellence since 2016</p>
            </div>
        </section>

        <!-- Company Story -->
        <section class="section">
            <div class="container">
                <div class="about-intro">
                    <div class="about-image" data-aos="fade-right">
                        <img src="/assets/images/about-office.jpg" alt="PFOPL office in Vadodara, India" width="600" height="400" loading="lazy">
                    </div>
                    <div class="about-text" data-aos="fade-left">
                        <h2>Our Story</h2>
                        <p>
                            Parshwanath Formatting OPC Pvt Ltd (PFOPL) was founded in 2016 with a clear mission:
                            to provide recruitment agencies with reliable, high-quality digital support services
                            that help them operate more efficiently.
                        </p>
                        <p>
                            What started as a CV formatting service has grown into a comprehensive digital services
                            company serving over 200 clients across the UK, USA, Canada, Australia and beyond. Our
                            growth has been built on delivering consistent quality, meeting tight deadlines, and
                            maintaining the highest standards of data security.
                        </p>
                        <p>
                            Based in Vadodara, Gujarat, India, we combine the advantages of skilled professionals
                            with competitive pricing, making professional digital services accessible to businesses
                            of all sizes.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Vision -->
        <section class="section section-alt">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Our Mission & Values</h2>
                    <p>The principles that guide everything we do.</p>
                </div>
                <div class="services-grid">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="service-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>Our Mission</h3>
                        <p>To deliver exceptional digital services that help recruitment agencies and businesses operate more efficiently, with a focus on quality, speed and security.</p>
                    </div>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Our Vision</h3>
                        <p>To be the preferred digital services partner for recruitment agencies worldwide, recognised for our reliability, expertise and commitment to client success.</p>
                    </div>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Our Values</h3>
                        <p>Precision in every task, integrity in every interaction, and dedication to exceeding client expectations drive our work every day.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Certifications -->
        <section class="section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Our Certifications</h2>
                    <p>Internationally recognised standards that demonstrate our commitment to quality and security.</p>
                </div>
                <div class="certifications-grid">
                    <div class="cert-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="cert-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h4>ISO 9001:2015</h4>
                        <p>Quality Management System certification ensuring consistent, high-quality service delivery through documented processes and continuous improvement.</p>
                    </div>
                    <div class="cert-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="cert-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>ISO 27001:2022</h4>
                        <p>Information Security Management certification demonstrating our commitment to protecting client data through robust security controls and procedures.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Timeline -->
        <section class="section section-alt">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Our Journey</h2>
                    <p>Key milestones in our growth and development.</p>
                </div>
                <div class="timeline">
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-year">2016</div>
                        <div class="timeline-content">
                            <h4>Company Founded</h4>
                            <p>PFOPL was established in Vadodara, India, initially focusing on CV formatting services for UK recruitment agencies.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-year">2018</div>
                        <div class="timeline-content">
                            <h4>Service Expansion</h4>
                            <p>Expanded our offerings to include web development, graphic design and data processing services.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-year">2020</div>
                        <div class="timeline-content">
                            <h4>Global Reach</h4>
                            <p>Extended services to clients in USA, Canada and Australia, with multi-currency payment options.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-year">2022</div>
                        <div class="timeline-content">
                            <h4>ISO Certifications</h4>
                            <p>Achieved ISO 9001:2015 and ISO 27001:2022 certifications, validating our quality and security practices.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-year">2024</div>
                        <div class="timeline-content">
                            <h4>200+ Clients</h4>
                            <p>Reached the milestone of serving over 200 clients globally with a growing team of specialists.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <section class="stats-section">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="0">
                        <span class="stat-value"><span data-counter="200">0</span>+</span>
                        <span class="stat-label">Clients Served</span>
                    </div>
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                        <span class="stat-value"><span data-counter="9">0</span>+</span>
                        <span class="stat-label">Years in Business</span>
                    </div>
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                        <span class="stat-value"><span data-counter="6">0</span></span>
                        <span class="stat-label">Countries Served</span>
                    </div>
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                        <span class="stat-value">2</span>
                        <span class="stat-label">ISO Certifications</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content" data-aos="fade-up">
                    <h2>Ready to Work With Us?</h2>
                    <p>Discover how PFOPL can support your business with reliable digital services.</p>
                    <div class="cta-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">Get a Quote</a>
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
            {"@type": "ListItem", "position": 2, "name": "About", "item": "<?php echo SITE_URL; ?>/about"}
        ]
    }
    </script>
</body>
</html>
