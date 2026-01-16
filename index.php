<?php
/**
 * PFOPL Homepage
 * Parshwanath Formatting OPC Pvt Ltd
 */

require_once __DIR__ . '/includes/config.php';

// Page SEO Variables
$page_title = 'PFOPL - CV Formatting & Digital Services for Recruiters';
$page_description = 'Professional CV formatting with 1-3 hour turnaround. ISO certified digital services trusted by 200+ recruitment agencies in UK, USA, Canada and Australia.';
$page_keywords = 'CV formatting services, resume formatting, recruitment agency services, digital services India, web development, SEO services, data processing';
$canonical_url = SITE_URL;
$og_image = SITE_URL . '/assets/images/og/home.jpg';
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <?php include __DIR__ . '/includes/seo-head.php'; ?>
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content" data-aos="fade-up">
                    <span class="hero-tagline">ISO Certified Digital Services</span>
                    <h1>Professional <span>CV Formatting</span> & Digital Solutions for Recruitment Agencies</h1>
                    <p class="hero-description">
                        Trusted by 200+ recruitment agencies worldwide. We deliver precision-crafted CVs in just 1-3 hours,
                        backed by ISO 9001 and ISO 27001 certifications for quality and security.
                    </p>
                    <div class="hero-buttons">
                        <a href="/services/cv-formatting" class="btn btn-primary btn-lg">Our CV Services</a>
                        <a href="/get-quote" class="btn btn-outline-white btn-lg">Get a Quote</a>
                    </div>
                    <div class="hero-stats">
                        <div class="hero-stat">
                            <span class="hero-stat-value" data-counter="200">0</span>
                            <span class="hero-stat-label">Global Clients</span>
                        </div>
                        <div class="hero-stat">
                            <span class="hero-stat-value" data-counter="9">0</span>
                            <span class="hero-stat-label">Years Experience</span>
                        </div>
                        <div class="hero-stat">
                            <span class="hero-stat-value" data-counter="7">0</span>
                            <span class="hero-stat-label">Payment Currencies</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-shapes">
                <div class="hero-shape hero-shape-1"></div>
                <div class="hero-shape hero-shape-2"></div>
                <div class="hero-shape hero-shape-3"></div>
            </div>
        </section>

        <!-- About Introduction -->
        <section class="section">
            <div class="container">
                <div class="about-intro">
                    <div class="about-image" data-aos="fade-right">
                        <img src="/assets/images/about-home.jpg" alt="PFOPL office team delivering professional digital services" width="600" height="400" loading="lazy">
                    </div>
                    <div class="about-text" data-aos="fade-left">
                        <h2>Your Trusted Partner for Digital Excellence Since 2016</h2>
                        <p>
                            Parshwanath Formatting OPC Pvt Ltd (PFOPL) has been delivering exceptional digital services
                            to recruitment agencies and businesses across the globe since 2016. Based in Vadodara, India,
                            we combine technical expertise with a deep understanding of the recruitment industry.
                        </p>
                        <p>
                            Our dual ISO certifications (9001:2015 for Quality and 27001:2022 for Information Security)
                            demonstrate our commitment to delivering reliable, secure services that meet international standards.
                        </p>
                        <a href="/about" class="btn btn-secondary">Learn More About Us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="section section-alt" id="services">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Our Professional Services</h2>
                    <p>Comprehensive digital solutions designed specifically for recruitment agencies and businesses requiring reliable, high-quality support.</p>
                </div>
                <div class="services-grid">
                    <?php
                    $featured_services = array_filter($services, function($s) { return $s['featured']; });
                    foreach ($featured_services as $index => $service):
                    ?>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                        <div class="service-icon">
                            <i class="fas <?php echo $service['icon']; ?>"></i>
                        </div>
                        <h3><?php echo $service['title']; ?></h3>
                        <p><?php echo $service['description']; ?></p>
                        <a href="/services/<?php echo $service['slug']; ?>" class="service-link">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Why Recruitment Agencies Choose PFOPL</h2>
                    <p>We understand the unique demands of the recruitment industry and deliver solutions that help you work faster and more efficiently.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>1-3 Hour Turnaround</h4>
                        <p>Get professionally formatted CVs delivered within hours, not days. Perfect for urgent client requirements.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4>Dual ISO Certified</h4>
                        <p>ISO 9001:2015 and ISO 27001:2022 certified, ensuring quality management and information security.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4>7 Currency Payments</h4>
                        <p>Pay conveniently in GBP, USD, EUR, AUD, CAD, SGD or INR through secure payment channels.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Data Security</h4>
                        <p>Your candidate data is protected with enterprise-grade security measures and strict confidentiality protocols.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="0">
                        <span class="stat-value"><span data-counter="200">0</span>+</span>
                        <span class="stat-label">Clients Worldwide</span>
                    </div>
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                        <span class="stat-value"><span data-counter="9">0</span>+</span>
                        <span class="stat-label">Years of Excellence</span>
                    </div>
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                        <span class="stat-value"><span data-counter="50000">0</span>+</span>
                        <span class="stat-label">CVs Formatted</span>
                    </div>
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                        <span class="stat-value"><span data-counter="99">0</span>%</span>
                        <span class="stat-label">Client Satisfaction</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="section section-alt">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>What Our Clients Say</h2>
                    <p>Trusted by recruitment agencies across the UK, USA, Canada and Australia.</p>
                </div>
                <div class="testimonials-slider" data-aos="fade-up" tabindex="0">
                    <div class="testimonial-card">
                        <p class="testimonial-quote">
                            PFOPL has transformed our CV processing workflow completely. What used to take us hours now takes minutes.
                            Their team consistently delivers polished, professional CVs that impress our clients.
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-info">
                                <h4>Sarah Mitchell</h4>
                                <p>Operations Manager, TechRecruit UK</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p class="testimonial-quote">
                            We have been working with PFOPL for over three years now. Their attention to detail and quick turnaround
                            times have made them an essential part of our recruitment operations.
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-info">
                                <h4>Michael Chen</h4>
                                <p>Director, Pacific Staffing Solutions</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p class="testimonial-quote">
                            The security certifications gave us confidence to work with PFOPL on sensitive candidate data.
                            Their professionalism and reliability are outstanding. Highly recommended for any recruitment agency.
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-info">
                                <h4>Emma Thompson</h4>
                                <p>Managing Partner, Elite Executive Search</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-nav">
                        <button class="testimonial-prev" aria-label="Previous testimonial">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="testimonial-next" aria-label="Next testimonial">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <div class="testimonial-dots"></div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content" data-aos="fade-up">
                    <h2>Ready to Streamline Your CV Processing?</h2>
                    <p>Join 200+ recruitment agencies who trust PFOPL for their digital service needs. Get a free quote today.</p>
                    <div class="cta-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">Request a Quote</a>
                        <a href="/contact" class="btn btn-outline-white btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
