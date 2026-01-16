<?php
/**
 * Footer Template - Premium Design
 * Include this file before the closing </body> tag
 */
?>

<footer class="site-footer">
    <div class="footer-glow"></div>
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">
                <!-- Company Info -->
                <div class="footer-col footer-about">
                    <a href="/" class="footer-logo">
                        <img src="/assets/images/logo-white.svg" alt="<?php echo SITE_SHORT_NAME; ?>" width="150" height="50">
                    </a>
                    <p class="footer-tagline"><?php echo SITE_TAGLINE; ?></p>
                    <p class="footer-description">
                        Professional digital services for recruitment agencies and businesses worldwide since <?php echo COMPANY_FOUNDED; ?>.
                    </p>
                    <div class="footer-certifications">
                        <span class="cert-badge"><i class="fas fa-certificate"></i> ISO 9001:2015</span>
                        <span class="cert-badge"><i class="fas fa-shield-alt"></i> ISO 27001:2022</span>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-col">
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="/"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="/about"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="/services"><i class="fas fa-chevron-right"></i> Services</a></li>
                        <li><a href="/contact"><i class="fas fa-chevron-right"></i> Contact</a></li>
                        <li><a href="/get-quote"><i class="fas fa-chevron-right"></i> Get Quote</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="footer-col">
                    <h4 class="footer-heading">Services</h4>
                    <ul class="footer-links">
                        <li><a href="/services/cv-formatting"><i class="fas fa-chevron-right"></i> CV Formatting</a></li>
                        <li><a href="/services/web-development"><i class="fas fa-chevron-right"></i> Web Development</a></li>
                        <li><a href="/services/web-applications"><i class="fas fa-chevron-right"></i> Web Applications</a></li>
                        <li><a href="/services/graphic-design"><i class="fas fa-chevron-right"></i> Graphic Design</a></li>
                        <li><a href="/services/data-processing"><i class="fas fa-chevron-right"></i> Data Processing</a></li>
                        <li><a href="/services/seo"><i class="fas fa-chevron-right"></i> SEO Services</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-col">
                    <h4 class="footer-heading">Contact Us</h4>
                    <ul class="footer-contact">
                        <li>
                            <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <span><?php echo ADDRESS_FULL; ?></span>
                        </li>
                        <li>
                            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                            <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>
                        </li>
                        <li>
                            <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                            <a href="tel:<?php echo CONTACT_PHONE_LINK; ?>"><?php echo CONTACT_PHONE; ?></a>
                        </li>
                    </ul>
                    <div class="footer-social">
                        <a href="<?php echo SOCIAL_LINKEDIN; ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="social-link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="social-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Twitter" class="social-link">
                            <i class="fab fa-twitter"></i>
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

<!-- Back to Top Button -->
<button class="back-to-top" id="backToTop" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
</button>

<!-- Organisation Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "<?php echo SITE_NAME; ?>",
    "alternateName": "<?php echo SITE_SHORT_NAME; ?>",
    "url": "<?php echo SITE_URL; ?>",
    "logo": "<?php echo SITE_URL; ?>/assets/images/logo.svg",
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

<script>
// Back to Top functionality
(function() {
    const backToTop = document.getElementById('backToTop');
    if (!backToTop) return;

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTop.classList.add('visible');
        } else {
            backToTop.classList.remove('visible');
        }
    });

    backToTop.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
})();
</script>
