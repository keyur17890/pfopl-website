<?php
/**
 * Social Media Management Service Page
 * Parshwanath Formatting OPC Pvt Ltd
 */

require_once __DIR__ . '/../includes/config.php';

// Page SEO Variables
$page_title = 'Social Media Management Services | PFOPL';
$page_description = 'Complete social media management for businesses. Content creation, scheduling, engagement and analytics to grow your online presence.';
$page_keywords = 'social media management, social media marketing, content creation, social media strategy, business social media';
$canonical_url = SITE_URL . '/services/social-media';
$og_image = SITE_URL . '/assets/images/og/social-media.jpg';
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
                        <span class="current">Social Media</span>
                    </nav>
                    <h1>Social Media Management Services</h1>
                    <p>
                        Build your brand presence and engage with your audience across social platforms.
                        From content creation to community management, we handle your social media so you
                        can focus on your business.
                    </p>
                    <div class="service-highlight">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Consistent Content Schedule</span>
                    </div>
                    <div class="service-highlight">
                        <i class="fas fa-chart-line"></i>
                        <span>Performance Tracking</span>
                    </div>
                    <div class="hero-buttons">
                        <a href="/get-quote" class="btn btn-white btn-lg">Get a Quote</a>
                        <a href="/contact" class="btn btn-outline-white btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Included -->
        <section class="section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>What We Offer</h2>
                    <p>Comprehensive social media services for your business.</p>
                </div>
                <div class="benefits-grid">
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="0">
                        <div class="benefit-icon">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Content Creation</h4>
                            <p>Engaging posts, graphics and videos tailored to each platform.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="50">
                        <div class="benefit-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Scheduling & Publishing</h4>
                            <p>Strategic posting at optimal times for maximum engagement.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="benefit-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Community Management</h4>
                            <p>Respond to comments, messages and build relationships with followers.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="150">
                        <div class="benefit-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Strategy Development</h4>
                            <p>Custom social media strategy aligned with your business goals.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="benefit-icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Analytics & Reporting</h4>
                            <p>Monthly reports showing growth, engagement and performance metrics.</p>
                        </div>
                    </div>
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="250">
                        <div class="benefit-icon">
                            <i class="fas fa-ad"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Paid Advertising</h4>
                            <p>Targeted ad campaigns to reach your ideal audience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Platforms -->
        <section class="section section-alt">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Platforms We Manage</h2>
                    <p>We work across all major social media platforms.</p>
                </div>
                <div class="services-grid">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="0">
                        <div class="service-icon">
                            <i class="fab fa-linkedin"></i>
                        </div>
                        <h3>LinkedIn</h3>
                        <p>Professional networking and B2B marketing for businesses and recruitment agencies.</p>
                    </div>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-icon">
                            <i class="fab fa-facebook"></i>
                        </div>
                        <h3>Facebook</h3>
                        <p>Build community and reach customers through organic posts and targeted ads.</p>
                    </div>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <h3>Instagram</h3>
                        <p>Visual storytelling and brand building through images, stories and reels.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content" data-aos="fade-up">
                    <h2>Ready to Grow Your Social Presence?</h2>
                    <p>Let us handle your social media while you focus on running your business.</p>
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
        "name": "Social Media Management Services",
        "description": "Complete social media management including content creation, scheduling, engagement and analytics.",
        "provider": {
            "@type": "Organization",
            "name": "<?php echo SITE_NAME; ?>",
            "url": "<?php echo SITE_URL; ?>"
        },
        "serviceType": "Social Media Management"
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
            {"@type": "ListItem", "position": 3, "name": "Social Media", "item": "<?php echo SITE_URL; ?>/services/social-media"}
        ]
    }
    </script>
</body>
</html>
