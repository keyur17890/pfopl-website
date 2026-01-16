<?php
/**
 * About Page - Premium Design
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

    <main>
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
                    <span class="current">About Us</span>
                </nav>
                <h1 class="page-hero-title" data-aos="fade-up" data-aos-delay="100">About <span class="gradient-text">PFOPL</span></h1>
                <p class="page-hero-subtitle" data-aos="fade-up" data-aos-delay="200">Your trusted partner for digital excellence since 2016</p>
            </div>
        </section>

        <!-- Company Story - Premium -->
        <section class="section section-about-story">
            <div class="container">
                <div class="about-grid">
                    <div class="about-image" data-aos="fade-right">
                        <div class="image-wrapper">
                            <img src="/assets/images/about-office.jpg" alt="PFOPL office in Vadodara, India" width="600" height="400" loading="lazy">
                            <div class="image-accent"></div>
                        </div>
                    </div>
                    <div class="about-content" data-aos="fade-left">
                        <span class="section-tag">Our Story</span>
                        <h2 class="section-title">Building <span class="gradient-text">Digital Excellence</span></h2>
                        <p class="about-text">
                            Parshwanath Formatting OPC Pvt Ltd (PFOPL) was founded in 2016 with a clear mission:
                            to provide recruitment agencies with reliable, high-quality digital support services
                            that help them operate more efficiently.
                        </p>
                        <p class="about-text">
                            What started as a CV formatting service has grown into a comprehensive digital services
                            company serving over 200 clients across the UK, USA, Canada, Australia and beyond.
                        </p>
                        <p class="about-text">
                            Based in Vadodara, Gujarat, India, we combine skilled professionals
                            with competitive pricing, making professional digital services accessible to businesses
                            of all sizes.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Vision - Premium -->
        <section class="section section-services">
            <div class="section-bg">
                <div class="section-glow"></div>
            </div>
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">Our Purpose</span>
                    <h2 class="section-title">Mission & <span class="gradient-text">Values</span></h2>
                    <p class="section-subtitle">The principles that guide everything we do.</p>
                </div>
                <div class="services-grid">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="service-card-glow"></div>
                        <div class="service-card-inner">
                            <div class="service-card-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h3 class="service-card-title">Our Mission</h3>
                            <p class="service-card-text">To deliver exceptional digital services that help recruitment agencies and businesses operate more efficiently, with a focus on quality, speed and security.</p>
                        </div>
                    </div>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card-glow"></div>
                        <div class="service-card-inner">
                            <div class="service-card-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3 class="service-card-title">Our Vision</h3>
                            <p class="service-card-text">To be the preferred digital services partner for recruitment agencies worldwide, recognised for our reliability, expertise and commitment to client success.</p>
                        </div>
                    </div>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card-glow"></div>
                        <div class="service-card-inner">
                            <div class="service-card-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h3 class="service-card-title">Our Values</h3>
                            <p class="service-card-text">Precision in every task, integrity in every interaction, and dedication to exceeding client expectations drive our work every day.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Certifications - Premium -->
        <section class="section section-certifications">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">Quality Assurance</span>
                    <h2 class="section-title">Our <span class="gradient-text">Certifications</span></h2>
                    <p class="section-subtitle">Internationally recognised standards that demonstrate our commitment to quality and security.</p>
                </div>
                <div class="certifications-grid">
                    <div class="cert-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="cert-card-inner">
                            <div class="cert-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <h4>ISO 9001:2015</h4>
                            <p>Quality Management System</p>
                            <span class="cert-desc">Ensuring consistent, high-quality service delivery through documented processes and continuous improvement.</span>
                        </div>
                    </div>
                    <div class="cert-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="cert-card-inner">
                            <div class="cert-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4>ISO 27001:2022</h4>
                            <p>Information Security</p>
                            <span class="cert-desc">Demonstrating our commitment to protecting client data through robust security controls and procedures.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Timeline - Premium -->
        <section class="section section-timeline">
            <div class="section-bg">
                <div class="section-glow"></div>
            </div>
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">Milestones</span>
                    <h2 class="section-title">Our <span class="gradient-text">Journey</span></h2>
                    <p class="section-subtitle">Key milestones in our growth and development.</p>
                </div>
                <div class="timeline">
                    <div class="timeline-line"></div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-marker">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="timeline-card">
                            <span class="timeline-year">2016</span>
                            <h4>Company Founded</h4>
                            <p>PFOPL was established in Vadodara, India, initially focusing on CV formatting services for UK recruitment agencies.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-marker">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                        <div class="timeline-card">
                            <span class="timeline-year">2018</span>
                            <h4>Service Expansion</h4>
                            <p>Expanded our offerings to include web development, graphic design and data processing services.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-marker">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="timeline-card">
                            <span class="timeline-year">2020</span>
                            <h4>Global Reach</h4>
                            <p>Extended services to clients in USA, Canada and Australia, with multi-currency payment options.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-marker">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div class="timeline-card">
                            <span class="timeline-year">2022</span>
                            <h4>ISO Certifications</h4>
                            <p>Achieved ISO 9001:2015 and ISO 27001:2022 certifications, validating our quality and security practices.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-marker">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="timeline-card">
                            <span class="timeline-year">2024</span>
                            <h4>200+ Clients</h4>
                            <p>Reached the milestone of serving over 200 clients globally with a growing team of specialists.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats - Premium -->
        <section class="section section-stats">
            <div class="stats-bg">
                <div class="stats-gradient"></div>
            </div>
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="stat-card-inner">
                            <div class="stat-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-value"><span data-counter="200" data-suffix="+">0</span></div>
                            <div class="stat-label">Clients Served</div>
                        </div>
                    </div>
                    <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="stat-card-inner">
                            <div class="stat-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="stat-value"><span data-counter="9" data-suffix="+">0</span></div>
                            <div class="stat-label">Years in Business</div>
                        </div>
                    </div>
                    <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="stat-card-inner">
                            <div class="stat-icon">
                                <i class="fas fa-globe-americas"></i>
                            </div>
                            <div class="stat-value"><span data-counter="6">0</span></div>
                            <div class="stat-label">Countries Served</div>
                        </div>
                    </div>
                    <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="stat-card-inner">
                            <div class="stat-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="stat-value">2</div>
                            <div class="stat-label">ISO Certifications</div>
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
                    <h2 class="cta-title">Ready to <span>Work With Us?</span></h2>
                    <p class="cta-text">Discover how PFOPL can support your business with reliable digital services.</p>
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
