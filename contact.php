<?php
/**
 * Contact Page - Premium Design
 * Parshwanath Formatting OPC Pvt Ltd
 */

require_once __DIR__ . '/includes/config.php';

// Page SEO Variables
$page_title = 'Contact PFOPL - Get in Touch Today';
$page_description = 'Contact our team for CV formatting, web development or any digital service enquiry. Based in India, serving clients in UK, USA, Canada and Australia.';
$page_keywords = 'contact PFOPL, digital services enquiry, CV formatting contact, web development contact, recruitment services contact';
$canonical_url = SITE_URL . '/contact';
$og_image = SITE_URL . '/assets/images/og/contact.jpg';
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

    <main id="main-content" role="main">
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
                    <span class="current">Contact</span>
                </nav>
                <h1 class="page-hero-title" data-aos="fade-up" data-aos-delay="100">Contact <span class="gradient-text">Us</span></h1>
                <p class="page-hero-subtitle" data-aos="fade-up" data-aos-delay="200">Get in touch with our team for any enquiries</p>
            </div>
        </section>

        <!-- Contact Section - Premium -->
        <section class="section section-contact">
            <div class="container">
                <div class="contact-grid">
                    <!-- Contact Info -->
                    <div class="contact-info" data-aos="fade-right">
                        <span class="section-tag">Get in Touch</span>
                        <h2 class="section-title">Let's Start a <span class="gradient-text">Conversation</span></h2>
                        <p class="contact-intro">Have a question or want to discuss a project? We would love to hear from you. Reach out through any of the channels below or fill in the contact form.</p>

                        <div class="contact-cards">
                            <div class="contact-card">
                                <div class="contact-card-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-card-content">
                                    <h4>Email</h4>
                                    <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>
                                </div>
                            </div>
                            <div class="contact-card">
                                <div class="contact-card-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="contact-card-content">
                                    <h4>Phone</h4>
                                    <a href="tel:<?php echo CONTACT_PHONE_LINK; ?>"><?php echo CONTACT_PHONE; ?></a>
                                </div>
                            </div>
                            <div class="contact-card">
                                <div class="contact-card-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-card-content">
                                    <h4>Address</h4>
                                    <p><?php echo ADDRESS_FULL; ?></p>
                                </div>
                            </div>
                            <div class="contact-card">
                                <div class="contact-card-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-card-content">
                                    <h4>Business Hours</h4>
                                    <p>Mon - Sat: 9:00 AM - 7:00 PM IST</p>
                                </div>
                            </div>
                        </div>

                        <!-- Map -->
                        <div class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.0856440731675!2d73.16097111495654!3d22.31818598532176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8b8a0b8b8b7%3A0x7c7c7c7c7c7c7c7c!2sGotri%20Rd%2C%20Vadodara%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin"
                                width="100%"
                                height="250"
                                style="border:0; border-radius: 16px;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                title="PFOPL Office Location">
                            </iframe>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form-wrapper" data-aos="fade-left">
                        <div class="form-card">
                            <div class="form-card-header">
                                <h3>Send Us a Message</h3>
                                <p>Fill in the form below and we'll get back to you shortly.</p>
                            </div>
                            <form action="/php/contact-handler.php" method="POST" data-ajax class="contact-form">
                                <input type="hidden" name="csrf_token" value="<?php echo generateCSRFToken(); ?>">

                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="name">Full Name *</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Your name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address *</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="your@email.com" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="+44 123 456 7890">
                                    </div>
                                    <div class="form-group">
                                        <label for="service">Service Interest</label>
                                        <select id="service" name="service" class="form-control">
                                            <option value="">Select a service</option>
                                            <?php foreach ($services as $service): ?>
                                            <option value="<?php echo $service['slug']; ?>"><?php echo $service['title']; ?></option>
                                            <?php endforeach; ?>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="message">Your Message *</label>
                                    <textarea id="message" name="message" class="form-control" rows="5" placeholder="Tell us about your requirements..." required></textarea>
                                </div>

                                <div class="form-submit">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" data-original-text="Send Message">
                                        <span class="btn-text">Send Message</span>
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

    <!-- LocalBusiness Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "<?php echo SITE_NAME; ?>",
        "image": "<?php echo SITE_URL; ?>/assets/images/logo.svg",
        "url": "<?php echo SITE_URL; ?>",
        "telephone": "<?php echo CONTACT_PHONE_LINK; ?>",
        "email": "<?php echo CONTACT_EMAIL; ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo ADDRESS_STREET; ?>",
            "addressLocality": "<?php echo ADDRESS_CITY; ?>",
            "addressRegion": "<?php echo ADDRESS_STATE; ?>",
            "postalCode": "<?php echo ADDRESS_POSTCODE; ?>",
            "addressCountry": "IN"
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "opens": "09:00",
            "closes": "19:00"
        }
    }
    </script>

    <!-- Breadcrumb Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "<?php echo SITE_URL; ?>"},
            {"@type": "ListItem", "position": 2, "name": "Contact", "item": "<?php echo SITE_URL; ?>/contact"}
        ]
    }
    </script>
</body>
</html>
