<?php
/**
 * Footer Template
 * Include this file before the closing </body> tag
 */
?>

<footer class="site-footer">
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">
                <!-- Company Info -->
                <div class="footer-col footer-about">
                    <a href="/" class="footer-logo">
                        <img src="/assets/images/logo-white.png" alt="<?php echo SITE_SHORT_NAME; ?>" width="120" height="40">
                    </a>
                    <p class="footer-tagline"><?php echo SITE_TAGLINE; ?></p>
                    <p class="footer-description">
                        Professional digital services for recruitment agencies and businesses worldwide since <?php echo COMPANY_FOUNDED; ?>.
                    </p>
                    <div class="footer-certifications">
                        <span class="cert-badge">ISO 9001:2015</span>
                        <span class="cert-badge">ISO 27001:2022</span>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-col">
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/get-quote">Get Quote</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="footer-col">
                    <h4 class="footer-heading">Services</h4>
                    <ul class="footer-links">
                        <li><a href="/services/cv-formatting">CV Formatting</a></li>
                        <li><a href="/services/web-development">Web Development</a></li>
                        <li><a href="/services/web-applications">Web Applications</a></li>
                        <li><a href="/services/graphic-design">Graphic Design</a></li>
                        <li><a href="/services/data-processing">Data Processing</a></li>
                        <li><a href="/services/seo">SEO Services</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-col">
                    <h4 class="footer-heading">Contact Us</h4>
                    <ul class="footer-contact">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php echo ADDRESS_FULL; ?></span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:<?php echo CONTACT_PHONE_LINK; ?>"><?php echo CONTACT_PHONE; ?></a>
                        </li>
                    </ul>
                    <div class="footer-social">
                        <a href="<?php echo SOCIAL_LINKEDIN; ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <p class="copyright">
                    &copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.
                </p>
                <p class="footer-legal">
                    <a href="/privacy-policy">Privacy Policy</a>
                    <span class="separator">|</span>
                    <a href="/terms">Terms of Service</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Organisation Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "<?php echo SITE_NAME; ?>",
    "alternateName": "<?php echo SITE_SHORT_NAME; ?>",
    "url": "<?php echo SITE_URL; ?>",
    "logo": "<?php echo SITE_URL; ?>/assets/images/logo.png",
    "description": "<?php echo SITE_DESCRIPTION; ?>",
    "foundingDate": "<?php echo COMPANY_FOUNDED; ?>",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?php echo ADDRESS_STREET; ?>",
        "addressLocality": "<?php echo ADDRESS_CITY; ?>",
        "addressRegion": "<?php echo ADDRESS_STATE; ?>",
        "postalCode": "<?php echo ADDRESS_POSTCODE; ?>",
        "addressCountry": "IN"
    },
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "<?php echo CONTACT_PHONE_LINK; ?>",
        "contactType": "customer service",
        "email": "<?php echo CONTACT_EMAIL; ?>",
        "availableLanguage": ["English", "Hindi"]
    },
    "sameAs": [
        "<?php echo SOCIAL_LINKEDIN; ?>",
        "<?php echo SOCIAL_FACEBOOK; ?>"
    ]
}
</script>

<!-- JavaScript Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Main JavaScript -->
<script src="/assets/js/main.js"></script>
