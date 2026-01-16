<?php
/**
 * PFOPL Homepage - Premium Design
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
        <!-- Hero Section - Premium Full Width -->
        <section class="hero">
            <!-- Animated Background -->
            <div class="hero-bg">
                <div class="hero-glow-1"></div>
                <div class="hero-glow-2"></div>
                <div class="hero-glow-3"></div>
                <div class="hero-grid"></div>
            </div>

            <div class="hero-container">
                <div class="hero-content" data-aos="fade-up">
                    <span class="hero-badge">
                        <i class="fas fa-certificate"></i> ISO 9001 & ISO 27001 Certified
                    </span>
                    <h1 class="hero-title">
                        Professional <span class="gradient-text">CV Formatting</span> & Digital Solutions for Recruitment Agencies
                    </h1>
                    <p class="hero-description">
                        Trusted by 200+ recruitment agencies worldwide. We deliver precision-crafted CVs in just 1-3 hours,
                        backed by ISO certifications for quality and security.
                    </p>
                    <div class="hero-buttons">
                        <a href="/services/cv-formatting" class="btn btn-primary btn-lg">
                            <span class="btn-text">Explore Services</span>
                            <span class="btn-icon"><i class="fas fa-arrow-right"></i></span>
                        </a>
                        <a href="/get-quote" class="btn btn-glass btn-lg">
                            <span class="btn-text">Get a Quote</span>
                            <span class="btn-icon"><i class="fas fa-paper-plane"></i></span>
                        </a>
                    </div>
                </div>

                <!-- Floating Cards -->
                <div class="hero-visual">
                    <div class="floating-card floating-card-1" data-aos="fade-up" data-aos-delay="200">
                        <div class="floating-card-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="floating-card-text">
                            <span class="floating-card-value">1-3 Hours</span>
                            <span class="floating-card-label">Turnaround</span>
                        </div>
                    </div>
                    <div class="floating-card floating-card-2" data-aos="fade-up" data-aos-delay="400">
                        <div class="floating-card-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="floating-card-text">
                            <span class="floating-card-value">200+</span>
                            <span class="floating-card-label">Global Clients</span>
                        </div>
                    </div>
                    <div class="floating-card floating-card-3" data-aos="fade-up" data-aos-delay="600">
                        <div class="floating-card-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="floating-card-text">
                            <span class="floating-card-value">9+ Years</span>
                            <span class="floating-card-label">Experience</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="hero-scroll">
                <span>Scroll to explore</span>
                <div class="scroll-indicator">
                    <div class="scroll-dot"></div>
                </div>
            </div>
        </section>

        <!-- About Introduction - Premium -->
        <section class="section section-about">
            <div class="container">
                <div class="about-grid">
                    <div class="about-image" data-aos="fade-right">
                        <div class="image-wrapper">
                            <img src="/assets/images/about-home.jpg" alt="PFOPL office team delivering professional digital services" width="600" height="400" loading="lazy">
                            <div class="image-accent"></div>
                        </div>
                        <div class="experience-badge">
                            <span class="experience-years" data-counter="9">0</span>
                            <span class="experience-text">Years of Excellence</span>
                        </div>
                    </div>
                    <div class="about-content" data-aos="fade-left">
                        <span class="section-tag">About Us</span>
                        <h2 class="section-title">Your Trusted Partner for <span class="gradient-text">Digital Excellence</span> Since 2016</h2>
                        <p class="about-text">
                            Parshwanath Formatting OPC Pvt Ltd (PFOPL) has been delivering exceptional digital services
                            to recruitment agencies and businesses across the globe since 2016. Based in Vadodara, India,
                            we combine technical expertise with a deep understanding of the recruitment industry.
                        </p>
                        <div class="about-features">
                            <div class="about-feature">
                                <div class="about-feature-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <span>ISO 9001:2015 Quality Certified</span>
                            </div>
                            <div class="about-feature">
                                <div class="about-feature-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <span>ISO 27001:2022 Security Certified</span>
                            </div>
                            <div class="about-feature">
                                <div class="about-feature-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <span>24/7 Support Available</span>
                            </div>
                        </div>
                        <a href="/about" class="btn btn-secondary">
                            <span class="btn-text">Learn More About Us</span>
                            <span class="btn-icon"><i class="fas fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section - Premium -->
        <section class="section section-services" id="services">
            <div class="section-bg">
                <div class="section-glow"></div>
            </div>
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">Our Services</span>
                    <h2 class="section-title">Professional <span class="gradient-text">Digital Services</span></h2>
                    <p class="section-subtitle">Comprehensive digital solutions designed specifically for recruitment agencies and businesses requiring reliable, high-quality support.</p>
                </div>
                <div class="services-grid">
                    <?php
                    $featured_services = array_filter($services, function($s) { return $s['featured']; });
                    foreach ($featured_services as $index => $service):
                    ?>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                        <div class="service-card-glow"></div>
                        <div class="service-card-inner">
                            <div class="service-card-icon">
                                <i class="fas <?php echo $service['icon']; ?>"></i>
                            </div>
                            <h3 class="service-card-title"><?php echo $service['title']; ?></h3>
                            <p class="service-card-text"><?php echo $service['description']; ?></p>
                            <a href="/services/<?php echo $service['slug']; ?>" class="service-card-link">
                                <span>Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="services-cta" data-aos="fade-up">
                    <a href="/services" class="btn btn-primary">
                        <span class="btn-text">View All Services</span>
                        <span class="btn-icon"><i class="fas fa-th-large"></i></span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Why Choose Us - Premium -->
        <section class="section section-features">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">Why Choose Us</span>
                    <h2 class="section-title">Why Recruitment Agencies <span class="gradient-text">Choose PFOPL</span></h2>
                    <p class="section-subtitle">We understand the unique demands of the recruitment industry and deliver solutions that help you work faster and more efficiently.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="feature-card-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4 class="feature-card-title">1-3 Hour Turnaround</h4>
                        <p class="feature-card-text">Get professionally formatted CVs delivered within hours, not days. Perfect for urgent client requirements.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h4 class="feature-card-title">Dual ISO Certified</h4>
                        <p class="feature-card-text">ISO 9001:2015 and ISO 27001:2022 certified, ensuring quality management and information security.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card-icon">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        <h4 class="feature-card-title">7 Currency Payments</h4>
                        <p class="feature-card-text">Pay conveniently in GBP, USD, EUR, AUD, CAD, SGD or INR through secure payment channels.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="feature-card-title">Data Security</h4>
                        <p class="feature-card-text">Your candidate data is protected with enterprise-grade security measures and strict confidentiality protocols.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section - Glass Morphism -->
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
                            <div class="stat-label">Clients Worldwide</div>
                        </div>
                    </div>
                    <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="stat-card-inner">
                            <div class="stat-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="stat-value"><span data-counter="9" data-suffix="+">0</span></div>
                            <div class="stat-label">Years of Excellence</div>
                        </div>
                    </div>
                    <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="stat-card-inner">
                            <div class="stat-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="stat-value"><span data-counter="50000" data-suffix="+">0</span></div>
                            <div class="stat-label">CVs Formatted</div>
                        </div>
                    </div>
                    <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="stat-card-inner">
                            <div class="stat-icon">
                                <i class="fas fa-smile"></i>
                            </div>
                            <div class="stat-value"><span data-counter="99" data-suffix="%">0</span></div>
                            <div class="stat-label">Client Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section - Premium -->
        <section class="section section-testimonials">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <span class="section-tag">Testimonials</span>
                    <h2 class="section-title">What Our <span class="gradient-text">Clients Say</span></h2>
                    <p class="section-subtitle">Trusted by recruitment agencies across the UK, USA, Canada and Australia.</p>
                </div>
                <div class="testimonials-slider" data-aos="fade-up">
                    <div class="testimonials-track">
                        <div class="testimonial-card active">
                            <div class="testimonial-content">
                                <div class="testimonial-quote-icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <p class="testimonial-text">
                                    PFOPL has transformed our CV processing workflow completely. What used to take us hours now takes minutes.
                                    Their team consistently delivers polished, professional CVs that impress our clients.
                                </p>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-avatar">
                                        <span>SM</span>
                                    </div>
                                    <div class="testimonial-author-info">
                                        <h4>Sarah Mitchell</h4>
                                        <p>Operations Manager, TechRecruit UK</p>
                                    </div>
                                </div>
                                <div class="testimonial-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="testimonial-quote-icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <p class="testimonial-text">
                                    We have been working with PFOPL for over three years now. Their attention to detail and quick turnaround
                                    times have made them an essential part of our recruitment operations.
                                </p>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-avatar">
                                        <span>MC</span>
                                    </div>
                                    <div class="testimonial-author-info">
                                        <h4>Michael Chen</h4>
                                        <p>Director, Pacific Staffing Solutions</p>
                                    </div>
                                </div>
                                <div class="testimonial-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="testimonial-quote-icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <p class="testimonial-text">
                                    The security certifications gave us confidence to work with PFOPL on sensitive candidate data.
                                    Their professionalism and reliability are outstanding. Highly recommended for any recruitment agency.
                                </p>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-avatar">
                                        <span>ET</span>
                                    </div>
                                    <div class="testimonial-author-info">
                                        <h4>Emma Thompson</h4>
                                        <p>Managing Partner, Elite Executive Search</p>
                                    </div>
                                </div>
                                <div class="testimonial-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-controls">
                        <button class="testimonial-prev" aria-label="Previous testimonial">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <div class="testimonial-dots"></div>
                        <button class="testimonial-next" aria-label="Next testimonial">
                            <i class="fas fa-chevron-right"></i>
                        </button>
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
                    <h2 class="cta-title">Ready to Streamline Your <span>CV Processing?</span></h2>
                    <p class="cta-text">Join 200+ recruitment agencies who trust PFOPL for their digital service needs. Get a free quote today.</p>
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
                    <div class="cta-trust">
                        <span class="cta-trust-text">Trusted by leading recruitment agencies</span>
                        <div class="cta-trust-badges">
                            <span class="trust-badge"><i class="fas fa-shield-alt"></i> ISO Certified</span>
                            <span class="trust-badge"><i class="fas fa-lock"></i> Secure</span>
                            <span class="trust-badge"><i class="fas fa-clock"></i> 24/7 Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
