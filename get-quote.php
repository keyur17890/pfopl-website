<?php
/**
 * Get Quote Page - Premium Design
 * Parshwanath Formatting OPC Pvt Ltd
 */

require_once __DIR__ . '/includes/config.php';

// Page SEO Variables
$page_title = 'Request a Quote - Free Consultation | PFOPL';
$page_description = 'Get a free quote for CV formatting, web development or digital services. Fast response within 24 hours. No obligation consultation available.';
$page_keywords = 'get quote, free quote, CV formatting quote, web development quote, digital services pricing';
$canonical_url = SITE_URL . '/get-quote';
$og_image = SITE_URL . '/assets/images/og/quote.jpg';
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
                    <span class="current">Get Quote</span>
                </nav>
                <h1 class="page-hero-title" data-aos="fade-up" data-aos-delay="100">Request a <span class="gradient-text">Quote</span></h1>
                <p class="page-hero-subtitle" data-aos="fade-up" data-aos-delay="200">Tell us about your project and receive a detailed proposal</p>
            </div>
        </section>

        <!-- Quote Form Section - Premium -->
        <section class="section section-contact">
            <div class="container">
                <div class="contact-grid">
                    <!-- Info -->
                    <div class="contact-info" data-aos="fade-right">
                        <span class="section-tag">Free Consultation</span>
                        <h2 class="section-title">No-Obligation <span class="gradient-text">Quote</span></h2>
                        <p class="contact-intro">Share your requirements and our team will provide a detailed quote within 24 hours. We offer competitive pricing with no hidden costs.</p>

                        <div class="contact-cards">
                            <div class="contact-card">
                                <div class="contact-card-icon">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div class="contact-card-content">
                                    <h4>Quick Response</h4>
                                    <p>Receive your quote within 24 hours</p>
                                </div>
                            </div>
                            <div class="contact-card">
                                <div class="contact-card-icon">
                                    <i class="fas fa-file-invoice"></i>
                                </div>
                                <div class="contact-card-content">
                                    <h4>Detailed Proposal</h4>
                                    <p>Clear breakdown of costs and timeline</p>
                                </div>
                            </div>
                            <div class="contact-card">
                                <div class="contact-card-icon">
                                    <i class="fas fa-hand-holding-usd"></i>
                                </div>
                                <div class="contact-card-content">
                                    <h4>No Obligation</h4>
                                    <p>Free consultation with no pressure</p>
                                </div>
                            </div>
                            <div class="contact-card">
                                <div class="contact-card-icon">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div class="contact-card-content">
                                    <h4>Multi-Currency</h4>
                                    <p>Pay in GBP, USD, EUR, AUD, CAD, SGD or INR</p>
                                </div>
                            </div>
                        </div>

                        <!-- Call to Action Box -->
                        <div class="quote-cta-box">
                            <h4>Prefer to Talk?</h4>
                            <p>Call us directly or send an email for immediate assistance.</p>
                            <div class="quote-cta-links">
                                <a href="tel:<?php echo CONTACT_PHONE_LINK; ?>" class="quote-cta-link">
                                    <i class="fas fa-phone-alt"></i> <?php echo CONTACT_PHONE; ?>
                                </a>
                                <a href="mailto:<?php echo CONTACT_EMAIL; ?>" class="quote-cta-link">
                                    <i class="fas fa-envelope"></i> <?php echo CONTACT_EMAIL; ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Quote Form -->
                    <div class="contact-form-wrapper" data-aos="fade-left">
                        <div class="form-card">
                            <div class="form-card-header">
                                <h3>Project Details</h3>
                                <p>Tell us about your project requirements.</p>
                            </div>
                            <form action="/php/contact-handler.php" method="POST" data-ajax class="contact-form">
                                <input type="hidden" name="csrf_token" value="<?php echo generateCSRFToken(); ?>">
                                <input type="hidden" name="form_type" value="quote">

                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="name">Full Name *</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Your name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="company">Company Name</label>
                                        <input type="text" id="company" name="company" class="form-control" placeholder="Your company">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="email">Email Address *</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="your@email.com" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="+44 123 456 7890">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="service">Service Required *</label>
                                        <select id="service" name="service" class="form-control" required>
                                            <option value="">Select a service</option>
                                            <?php foreach ($services as $service): ?>
                                            <option value="<?php echo $service['slug']; ?>"><?php echo $service['title']; ?></option>
                                            <?php endforeach; ?>
                                            <option value="multiple">Multiple Services</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="budget">Estimated Budget</label>
                                        <select id="budget" name="budget" class="form-control">
                                            <option value="">Select budget range</option>
                                            <option value="under-500">Under £500</option>
                                            <option value="500-1000">£500 - £1,000</option>
                                            <option value="1000-5000">£1,000 - £5,000</option>
                                            <option value="5000-10000">£5,000 - £10,000</option>
                                            <option value="over-10000">Over £10,000</option>
                                            <option value="discuss">Prefer to Discuss</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="details">Project Details *</label>
                                    <textarea id="details" name="message" class="form-control" rows="5" placeholder="Please describe your project requirements, timeline, and any specific features or specifications..." required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="how_found">How Did You Find Us?</label>
                                    <select id="how_found" name="how_found" class="form-control">
                                        <option value="">Select an option</option>
                                        <option value="google">Google Search</option>
                                        <option value="referral">Referral</option>
                                        <option value="linkedin">LinkedIn</option>
                                        <option value="social">Social Media</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="form-submit">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" data-original-text="Submit Quote Request">
                                        <span class="btn-text">Submit Quote Request</span>
                                        <span class="btn-icon"><i class="fas fa-paper-plane"></i></span>
                                    </button>
                                </div>

                                <div class="form-message"></div>
                            </form>
                        </div>
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
            {"@type": "ListItem", "position": 2, "name": "Get Quote", "item": "<?php echo SITE_URL; ?>/get-quote"}
        ]
    }
    </script>
</body>
</html>
