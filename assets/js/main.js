/**
 * PFOPL Website JavaScript
 * Parshwanath Formatting OPC Pvt Ltd
 */

(function() {
    'use strict';

    // ============================================
    // DOM Ready
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        initAOS();
        initHeader();
        initMobileNav();
        initDropdowns();
        initCounters();
        initTestimonials();
        initFAQ();
        initForms();
        initSmoothScroll();
    });

    // ============================================
    // Initialize AOS (Animate On Scroll)
    // ============================================
    function initAOS() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-out-cubic',
                once: true,
                offset: 100,
                disable: 'mobile'
            });
        }
    }

    // ============================================
    // Header Scroll Effect
    // ============================================
    function initHeader() {
        const header = document.getElementById('site-header');
        if (!header) return;

        let lastScrollTop = 0;
        const scrollThreshold = 50;

        function handleScroll() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            // Add/remove scrolled class
            if (scrollTop > scrollThreshold) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            lastScrollTop = scrollTop;
        }

        // Throttled scroll handler
        let ticking = false;
        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    handleScroll();
                    ticking = false;
                });
                ticking = true;
            }
        });

        // Initial check
        handleScroll();
    }

    // ============================================
    // Mobile Navigation
    // ============================================
    function initMobileNav() {
        const navToggle = document.getElementById('nav-toggle');
        const navMenu = document.getElementById('nav-menu');

        if (!navToggle || !navMenu) return;

        navToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';

            this.classList.toggle('active');
            this.setAttribute('aria-expanded', !isExpanded);
            navMenu.classList.toggle('active');

            // Prevent body scroll when menu is open
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
                navToggle.classList.remove('active');
                navToggle.setAttribute('aria-expanded', 'false');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

        // Close menu when clicking on a link
        const navLinks = navMenu.querySelectorAll('.nav-link:not(.has-dropdown > .nav-link)');
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                navToggle.classList.remove('active');
                navToggle.setAttribute('aria-expanded', 'false');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }

    // ============================================
    // Dropdown Menus (Mobile)
    // ============================================
    function initDropdowns() {
        const dropdowns = document.querySelectorAll('.has-dropdown');

        dropdowns.forEach(function(dropdown) {
            const link = dropdown.querySelector('.nav-link');

            // Mobile touch handling
            link.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    dropdown.classList.toggle('active');
                }
            });
        });
    }

    // ============================================
    // Counter Animation
    // ============================================
    function initCounters() {
        const counters = document.querySelectorAll('[data-counter]');
        if (counters.length === 0) return;

        const animateCounter = function(counter) {
            const target = parseInt(counter.getAttribute('data-counter'), 10);
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;

            const updateCounter = function() {
                current += step;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };

            updateCounter();
        };

        // Intersection Observer for counters
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px'
        };

        const counterObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        counters.forEach(function(counter) {
            counterObserver.observe(counter);
        });
    }

    // ============================================
    // Testimonials Slider
    // ============================================
    function initTestimonials() {
        const slider = document.querySelector('.testimonials-slider');
        if (!slider) return;

        const testimonials = slider.querySelectorAll('.testimonial-card');
        const prevBtn = slider.querySelector('.testimonial-prev');
        const nextBtn = slider.querySelector('.testimonial-next');
        const dotsContainer = slider.querySelector('.testimonial-dots');

        if (testimonials.length <= 1) return;

        let currentIndex = 0;
        let autoPlayInterval;

        // Create dots
        if (dotsContainer) {
            testimonials.forEach(function(_, index) {
                const dot = document.createElement('span');
                dot.className = 'testimonial-dot' + (index === 0 ? ' active' : '');
                dot.addEventListener('click', function() {
                    goToSlide(index);
                });
                dotsContainer.appendChild(dot);
            });
        }

        const dots = dotsContainer ? dotsContainer.querySelectorAll('.testimonial-dot') : [];

        function updateSlider() {
            testimonials.forEach(function(testimonial, index) {
                testimonial.style.display = index === currentIndex ? 'block' : 'none';
                testimonial.style.opacity = index === currentIndex ? '1' : '0';
            });

            dots.forEach(function(dot, index) {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        function goToSlide(index) {
            currentIndex = index;
            updateSlider();
            resetAutoPlay();
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % testimonials.length;
            updateSlider();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
            updateSlider();
        }

        function startAutoPlay() {
            autoPlayInterval = setInterval(nextSlide, 5000);
        }

        function resetAutoPlay() {
            clearInterval(autoPlayInterval);
            startAutoPlay();
        }

        // Event listeners
        if (prevBtn) {
            prevBtn.addEventListener('click', function() {
                prevSlide();
                resetAutoPlay();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function() {
                nextSlide();
                resetAutoPlay();
            });
        }

        // Keyboard navigation
        slider.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                prevSlide();
                resetAutoPlay();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
                resetAutoPlay();
            }
        });

        // Touch/swipe support
        let touchStartX = 0;
        let touchEndX = 0;

        slider.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        slider.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
                resetAutoPlay();
            }
        }

        // Initial setup
        updateSlider();
        startAutoPlay();

        // Pause on hover
        slider.addEventListener('mouseenter', function() {
            clearInterval(autoPlayInterval);
        });

        slider.addEventListener('mouseleave', function() {
            startAutoPlay();
        });
    }

    // ============================================
    // FAQ Accordion
    // ============================================
    function initFAQ() {
        const faqItems = document.querySelectorAll('.faq-item');
        if (faqItems.length === 0) return;

        faqItems.forEach(function(item) {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');

            if (!question || !answer) return;

            question.addEventListener('click', function() {
                const isOpen = item.classList.contains('active');

                // Close all other items
                faqItems.forEach(function(otherItem) {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });

                // Toggle current item
                item.classList.toggle('active', !isOpen);
            });
        });
    }

    // ============================================
    // Form Handling
    // ============================================
    function initForms() {
        const forms = document.querySelectorAll('form[data-ajax]');

        forms.forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                handleFormSubmit(form);
            });
        });

        // Real-time validation
        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(function(input) {
            input.addEventListener('blur', function() {
                validateInput(input);
            });
        });
    }

    function handleFormSubmit(form) {
        const submitBtn = form.querySelector('[type="submit"]');
        const messageDiv = form.querySelector('.form-message');

        // Validate all inputs
        const inputs = form.querySelectorAll('.form-control[required]');
        let isValid = true;

        inputs.forEach(function(input) {
            if (!validateInput(input)) {
                isValid = false;
            }
        });

        if (!isValid) return;

        // Show loading state
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.classList.add('loading');
        }

        // Prepare form data
        const formData = new FormData(form);

        // Submit form
        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            if (messageDiv) {
                messageDiv.textContent = data.message;
                messageDiv.className = 'form-message ' + (data.success ? 'success' : 'error');
            }

            if (data.success) {
                form.reset();
            }
        })
        .catch(function(error) {
            if (messageDiv) {
                messageDiv.textContent = 'An error occurred. Please try again.';
                messageDiv.className = 'form-message error';
            }
        })
        .finally(function() {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.classList.remove('loading');
            }
        });
    }

    function validateInput(input) {
        const value = input.value.trim();
        const type = input.type;
        let isValid = true;

        // Remove previous error state
        input.classList.remove('error');

        // Required check
        if (input.hasAttribute('required') && !value) {
            isValid = false;
        }

        // Email validation
        if (type === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                isValid = false;
            }
        }

        // Phone validation
        if (type === 'tel' && value) {
            const phoneRegex = /^[\d\s+\-()]{10,}$/;
            if (!phoneRegex.test(value)) {
                isValid = false;
            }
        }

        // Add error state
        if (!isValid) {
            input.classList.add('error');
        }

        return isValid;
    }

    // ============================================
    // Smooth Scroll
    // ============================================
    function initSmoothScroll() {
        const links = document.querySelectorAll('a[href^="#"]:not([href="#"])');

        links.forEach(function(link) {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    e.preventDefault();
                    const headerOffset = 80;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // ============================================
    // Utility Functions
    // ============================================

    // Debounce function
    function debounce(func, wait) {
        let timeout;
        return function executedFunction() {
            const context = this;
            const args = arguments;
            const later = function() {
                timeout = null;
                func.apply(context, args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // Throttle function
    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(function() {
                    inThrottle = false;
                }, limit);
            }
        };
    }

})();
