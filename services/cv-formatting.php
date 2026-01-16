<?php
/**
 * CV Formatting Service Page
 * Primary Service - Parshwanath Formatting OPC Pvt Ltd
 */

require_once __DIR__ . '/../includes/config.php';

// Page SEO Variables
$page_title = 'CV Formatting Services - 1-3 Hour Turnaround | PFOPL';
$page_description = 'Fast, professional CV formatting trusted by recruiters. ATS-optimised formats delivered in 1-3 hours. Serving UK, USA, Canada and Australia agencies.';
$page_keywords = 'CV formatting services, resume formatting, ATS optimised CV, recruitment agency CV services, fast CV turnaround, professional CV formatting';
$canonical_url = SITE_URL . '/services/cv-formatting';
$og_image = SITE_URL . '/assets/images/og/cv-formatting.jpg';
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
                        <span class="current">CV Formatting</span>
                    </nav>
                    <h1>Professional CV Formatting Services</h1>
                    <p>
                        Transform raw candidate CVs into polished, professional documents that win interviews.
                        Our expert team delivers ATS-optimised, visually appealing CVs within 1-3 hours.
                    </p>
                    <div class="service-highlight">
                        <i class="fas fa-clock"></i>
                        <span>1-3 Hour Turnaround Time</span>
                    </div>
                    <div class="service-highlight">
                        <i class="fas fa-check-circle"></i>
                        <span>ATS-Optimised Formats</span>
                    </div>
                    <div class="hero-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">Get a Quote</a>
                        <a href="/contact" class="btn btn-outline-white btn-lg">Contact Us</a>
                    </div>
                </div>
                <div class="service-detail-image">
                    <img src="/assets/images/services/cv-formatting-hero.jpg" alt="Professional CV formatting service example showing before and after" width="500" height="400">
                </div>
            </div>
        </section>

        <!-- What We Offer -->
        <section class="section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>What Our CV Formatting Service Includes</h2>
                    <p>Comprehensive formatting solutions that make your candidates stand out to employers.</p>
                </div>
                <div class="benefits-grid">
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="0">
                        <div class="benefit-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Professional Layout</h4>
                            <p>Clean, modern designs that present candidate information clearly and professionally.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="50">
                        <div class="benefit-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>ATS Compatibility</h4>
                            <p>Formats optimised for Applicant Tracking Systems used by employers worldwide.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="benefit-icon">
                            <i class="fas fa-spell-check"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Grammar Check</h4>
                            <p>Thorough proofreading to eliminate spelling and grammatical errors.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="150">
                        <div class="benefit-icon">
                            <i class="fas fa-align-left"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Consistent Formatting</h4>
                            <p>Uniform fonts, spacing, and alignment throughout the document.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="benefit-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Multiple Formats</h4>
                            <p>Delivered in Word, PDF and other formats as required.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="250">
                        <div class="benefit-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Custom Branding</h4>
                            <p>Option to include your agency branding on formatted CVs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="section section-alt">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Our Simple Process</h2>
                    <p>Getting your CVs formatted is quick and straightforward.</p>
                </div>
                <div class="process-steps">
                    <div class="process-step" data-aos="fade-up" data-aos-delay="0">
                        <div class="process-number">1</div>
                        <h4>Submit</h4>
                        <p>Send your raw CVs via email or our secure portal.</p>
                    </div>
                    <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-number">2</div>
                        <h4>Format</h4>
                        <p>Our team professionally formats each CV to your specifications.</p>
                    </div>
                    <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-number">3</div>
                        <h4>Review</h4>
                        <p>Quality check ensures accuracy and consistency.</p>
                    </div>
                    <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-number">4</div>
                        <h4>Deliver</h4>
                        <p>Receive polished CVs within 1-3 hours.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Our Service -->
        <section class="section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Why Recruiters Trust Our CV Formatting</h2>
                    <p>Nine years of experience serving recruitment agencies worldwide.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="feature-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h4>Express Delivery</h4>
                        <p>Most CVs are completed within 1-3 hours. Rush service available for urgent requirements.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Scalable Capacity</h4>
                        <p>Handle bulk CV formatting requests without delays. Perfect for high-volume recruitment drives.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h4>ISO 27001 Certified</h4>
                        <p>Your candidate data is protected by internationally recognised information security standards.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <h4>Free Revisions</h4>
                        <p>Not satisfied? We offer revisions to ensure the CV meets your exact requirements.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Regions Served -->
        <section class="section section-alt">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Serving Recruitment Agencies Globally</h2>
                    <p>We work with recruitment professionals across multiple regions and time zones.</p>
                </div>
                <div class="services-grid">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="service-icon">
                            <i class="fas fa-flag"></i>
                        </div>
                        <h3>United Kingdom</h3>
                        <p>Supporting UK recruitment agencies with CV formats that meet local market expectations and employer preferences.</p>
                    </div>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-icon">
                            <i class="fas fa-flag"></i>
                        </div>
                        <h3>United States</h3>
                        <p>Resume formatting optimised for American employers, including federal resume formats where required.</p>
                    </div>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-icon">
                            <i class="fas fa-flag"></i>
                        </div>
                        <h3>Canada & Australia</h3>
                        <p>Regional CV formats for Canadian and Australian job markets with appropriate terminology and standards.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Frequently Asked Questions</h2>
                    <p>Common questions about our CV formatting service.</p>
                </div>
                <div class="faq-list" data-aos="fade-up">
                    <div class="faq-item">
                        <button class="faq-question">
                            How fast can you format a CV?
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>We deliver most formatted CVs within 1-3 hours of receiving your request. For urgent requirements, we also offer express service with even faster turnaround times.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            What formats do you deliver CVs in?
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>We typically deliver in Microsoft Word (.docx) and PDF formats. If you need other formats such as plain text or specific ATS-compatible formats, we can accommodate your requirements.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            Can you match our company branding?
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Yes, we can create custom CV templates that incorporate your agency logo, colours, and branding elements. Simply share your brand guidelines with us.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            How do you handle confidential candidate data?
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>We are ISO 27001:2022 certified for information security. All candidate data is handled with strict confidentiality protocols, secure file transfers, and access controls.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            What if I need changes to a formatted CV?
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>We offer free revisions to ensure you are completely satisfied with the final result. Simply let us know what changes you need and we will make them promptly.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            Do you offer bulk or volume pricing?
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Yes, we offer competitive pricing for agencies with regular or bulk CV formatting requirements. Contact us to discuss a tailored pricing plan for your needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content" data-aos="fade-up">
                    <h2>Ready to Streamline Your CV Formatting?</h2>
                    <p>Join recruitment agencies worldwide who trust PFOPL for fast, professional CV formatting.</p>
                    <div class="cta-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">Get a Free Quote</a>
                        <a href="/contact" class="btn btn-outline-white btn-lg">Speak to Our Team</a>
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
        "name": "CV Formatting Services",
        "description": "Professional CV and resume formatting with 1-3 hour turnaround time for recruitment agencies.",
        "provider": {
            "@type": "Organization",
            "name": "<?php echo SITE_NAME; ?>",
            "url": "<?php echo SITE_URL; ?>"
        },
        "areaServed": ["GB", "US", "CA", "AU", "SG", "HK"],
        "serviceType": "CV Formatting"
    }
    </script>

    <!-- FAQ Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How fast can you format a CV?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deliver most formatted CVs within 1-3 hours of receiving your request. For urgent requirements, we also offer express service with even faster turnaround times."
                }
            },
            {
                "@type": "Question",
                "name": "What formats do you deliver CVs in?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We typically deliver in Microsoft Word (.docx) and PDF formats. If you need other formats such as plain text or specific ATS-compatible formats, we can accommodate your requirements."
                }
            },
            {
                "@type": "Question",
                "name": "Can you match our company branding?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we can create custom CV templates that incorporate your agency logo, colours, and branding elements. Simply share your brand guidelines with us."
                }
            },
            {
                "@type": "Question",
                "name": "How do you handle confidential candidate data?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We are ISO 27001:2022 certified for information security. All candidate data is handled with strict confidentiality protocols, secure file transfers, and access controls."
                }
            },
            {
                "@type": "Question",
                "name": "What if I need changes to a formatted CV?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We offer free revisions to ensure you are completely satisfied with the final result. Simply let us know what changes you need and we will make them promptly."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer bulk or volume pricing?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we offer competitive pricing for agencies with regular or bulk CV formatting requirements. Contact us to discuss a tailored pricing plan for your needs."
                }
            }
        ]
    }
    </script>

    <!-- Breadcrumb Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "<?php echo SITE_URL; ?>"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Services",
                "item": "<?php echo SITE_URL; ?>/services"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "CV Formatting",
                "item": "<?php echo SITE_URL; ?>/services/cv-formatting"
            }
        ]
    }
    </script>
</body>
</html>
