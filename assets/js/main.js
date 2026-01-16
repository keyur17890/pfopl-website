/**
 * PFOPL Premium Interactive Website JavaScript
 * Parshwanath Formatting OPC Pvt Ltd
 * $10,000 Premium Interactive Experience
 */

(function() {
    'use strict';

    // ============================================
    // Preloader
    // ============================================
    window.addEventListener('load', function() {
        const preloader = document.querySelector('.preloader');
        if (preloader) {
            setTimeout(function() {
                preloader.classList.add('loaded');
                document.body.classList.add('loaded');
                // Remove preloader from DOM after animation
                setTimeout(function() {
                    preloader.remove();
                }, 500);
            }, 800);
        }
    });

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
        initParallax();
        initMagneticButtons();
        initTextReveal();
        initScrollProgress();
        initTiltEffect();
        initCursorFollower();
        initScrollAnimations();
        initTypingEffect();
    });

    // ============================================
    // Initialize AOS (Animate On Scroll)
    // ============================================
    function initAOS() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 1000,
                easing: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)',
                once: true,
                offset: 50,
                delay: 100
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
        const scrollThreshold = 100;

        function handleScroll() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            // Add/remove scrolled class
            if (scrollTop > scrollThreshold) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            // Hide/show header on scroll
            if (scrollTop > lastScrollTop && scrollTop > 500) {
                header.style.transform = 'translateY(-100%)';
            } else {
                header.style.transform = 'translateY(0)';
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
    // Counter Animation - Premium Version
    // ============================================
    function initCounters() {
        const counters = document.querySelectorAll('[data-counter]');
        if (counters.length === 0) return;

        const animateCounter = function(counter) {
            const target = parseInt(counter.getAttribute('data-counter'), 10);
            const duration = 2500;
            const startTime = performance.now();
            const suffix = counter.getAttribute('data-suffix') || '';
            const prefix = counter.getAttribute('data-prefix') || '';

            // Easing function for smooth animation
            function easeOutExpo(t) {
                return t === 1 ? 1 : 1 - Math.pow(2, -10 * t);
            }

            const updateCounter = function(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const easedProgress = easeOutExpo(progress);
                const current = Math.floor(easedProgress * target);

                counter.textContent = prefix + current.toLocaleString() + suffix;

                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = prefix + target.toLocaleString() + suffix;
                    // Add completion animation
                    counter.classList.add('counter-complete');
                }
            };

            requestAnimationFrame(updateCounter);
        };

        // Intersection Observer for counters
        const observerOptions = {
            threshold: 0.3,
            rootMargin: '0px'
        };

        const counterObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    // Add delay for staggered effect
                    const delay = entry.target.dataset.delay || 0;
                    setTimeout(function() {
                        animateCounter(entry.target);
                    }, delay);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        counters.forEach(function(counter, index) {
            counter.dataset.delay = index * 150;
            counterObserver.observe(counter);
        });
    }

    // ============================================
    // Testimonials Slider - Premium Version
    // ============================================
    function initTestimonials() {
        const slider = document.querySelector('.testimonials-slider');
        if (!slider) return;

        const track = slider.querySelector('.testimonials-track');
        const testimonials = slider.querySelectorAll('.testimonial-card');
        const prevBtn = slider.querySelector('.testimonial-prev');
        const nextBtn = slider.querySelector('.testimonial-next');
        const dotsContainer = slider.querySelector('.testimonial-dots');

        if (testimonials.length <= 1) return;

        let currentIndex = 0;
        let autoPlayInterval;
        let isAnimating = false;

        // Create dots
        if (dotsContainer) {
            testimonials.forEach(function(_, index) {
                const dot = document.createElement('span');
                dot.className = 'testimonial-dot' + (index === 0 ? ' active' : '');
                dot.addEventListener('click', function() {
                    if (!isAnimating) goToSlide(index);
                });
                dotsContainer.appendChild(dot);
            });
        }

        const dots = dotsContainer ? dotsContainer.querySelectorAll('.testimonial-dot') : [];

        function updateSlider() {
            isAnimating = true;

            testimonials.forEach(function(testimonial, index) {
                testimonial.classList.remove('active', 'prev', 'next');

                if (index === currentIndex) {
                    testimonial.classList.add('active');
                } else if (index === (currentIndex - 1 + testimonials.length) % testimonials.length) {
                    testimonial.classList.add('prev');
                } else if (index === (currentIndex + 1) % testimonials.length) {
                    testimonial.classList.add('next');
                }
            });

            dots.forEach(function(dot, index) {
                dot.classList.toggle('active', index === currentIndex);
            });

            setTimeout(function() {
                isAnimating = false;
            }, 600);
        }

        function goToSlide(index) {
            if (isAnimating || index === currentIndex) return;
            currentIndex = index;
            updateSlider();
            resetAutoPlay();
        }

        function nextSlide() {
            if (isAnimating) return;
            currentIndex = (currentIndex + 1) % testimonials.length;
            updateSlider();
        }

        function prevSlide() {
            if (isAnimating) return;
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
        slider.setAttribute('tabindex', '0');
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
    // FAQ Accordion - Premium Version
    // ============================================
    function initFAQ() {
        const faqItems = document.querySelectorAll('.faq-item');
        if (faqItems.length === 0) return;

        faqItems.forEach(function(item) {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');

            if (!question || !answer) return;

            // Set initial height for animation
            if (item.classList.contains('active')) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }

            question.addEventListener('click', function() {
                const isOpen = item.classList.contains('active');

                // Close all other items with animation
                faqItems.forEach(function(otherItem) {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        otherItem.classList.remove('active');
                        const otherAnswer = otherItem.querySelector('.faq-answer');
                        if (otherAnswer) {
                            otherAnswer.style.maxHeight = '0';
                        }
                    }
                });

                // Toggle current item with animation
                item.classList.toggle('active', !isOpen);

                if (!isOpen) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                } else {
                    answer.style.maxHeight = '0';
                }
            });
        });
    }

    // ============================================
    // Form Handling - Premium Version
    // ============================================
    function initForms() {
        const forms = document.querySelectorAll('form[data-ajax]');

        forms.forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                handleFormSubmit(form);
            });
        });

        // Real-time validation with visual feedback
        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(function(input) {
            // Focus animation
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });

            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
                validateInput(input);

                // Add filled class for label animation
                if (input.value.trim()) {
                    input.classList.add('filled');
                } else {
                    input.classList.remove('filled');
                }
            });

            // Real-time validation
            input.addEventListener('input', function() {
                if (input.classList.contains('error')) {
                    validateInput(input);
                }
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

        if (!isValid) {
            // Shake animation on form
            form.classList.add('shake');
            setTimeout(function() {
                form.classList.remove('shake');
            }, 500);
            return;
        }

        // Show loading state
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.classList.add('loading');
            const btnText = submitBtn.querySelector('.btn-text');
            if (btnText) {
                btnText.textContent = 'Sending...';
            }
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
                messageDiv.style.display = 'block';

                // Animate message appearance
                messageDiv.style.animation = 'slideIn 0.5s ease-out';
            }

            if (data.success) {
                form.reset();
                // Remove filled classes
                form.querySelectorAll('.form-control').forEach(function(input) {
                    input.classList.remove('filled');
                });

                // Success animation
                form.classList.add('success');
                setTimeout(function() {
                    form.classList.remove('success');
                }, 2000);
            }
        })
        .catch(function(error) {
            if (messageDiv) {
                messageDiv.textContent = 'An error occurred. Please try again.';
                messageDiv.className = 'form-message error';
                messageDiv.style.display = 'block';
            }
        })
        .finally(function() {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.classList.remove('loading');
                const btnText = submitBtn.querySelector('.btn-text');
                if (btnText) {
                    btnText.textContent = submitBtn.dataset.originalText || 'Send Message';
                }
            }
        });
    }

    function validateInput(input) {
        const value = input.value.trim();
        const type = input.type;
        const formGroup = input.closest('.form-group');
        let isValid = true;
        let errorMessage = '';

        // Remove previous error state
        input.classList.remove('error', 'valid');
        if (formGroup) {
            formGroup.classList.remove('has-error', 'has-success');
            const errorEl = formGroup.querySelector('.error-message');
            if (errorEl) errorEl.remove();
        }

        // Required check
        if (input.hasAttribute('required') && !value) {
            isValid = false;
            errorMessage = 'This field is required';
        }

        // Email validation
        if (type === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                isValid = false;
                errorMessage = 'Please enter a valid email address';
            }
        }

        // Phone validation
        if (type === 'tel' && value) {
            const phoneRegex = /^[\d\s+\-()]{10,}$/;
            if (!phoneRegex.test(value)) {
                isValid = false;
                errorMessage = 'Please enter a valid phone number';
            }
        }

        // Add state classes
        if (!isValid) {
            input.classList.add('error');
            if (formGroup) {
                formGroup.classList.add('has-error');
                const errorEl = document.createElement('span');
                errorEl.className = 'error-message';
                errorEl.textContent = errorMessage;
                formGroup.appendChild(errorEl);
            }
        } else if (value) {
            input.classList.add('valid');
            if (formGroup) {
                formGroup.classList.add('has-success');
            }
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
                    const headerOffset = 100;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    // Smooth scroll with custom easing
                    smoothScrollTo(offsetPosition, 1000);
                }
            });
        });
    }

    function smoothScrollTo(target, duration) {
        const start = window.pageYOffset;
        const distance = target - start;
        let startTime = null;

        function easeInOutCubic(t) {
            return t < 0.5
                ? 4 * t * t * t
                : 1 - Math.pow(-2 * t + 2, 3) / 2;
        }

        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const progress = Math.min(timeElapsed / duration, 1);
            const ease = easeInOutCubic(progress);

            window.scrollTo(0, start + distance * ease);

            if (timeElapsed < duration) {
                requestAnimationFrame(animation);
            }
        }

        requestAnimationFrame(animation);
    }

    // ============================================
    // Parallax Effects
    // ============================================
    function initParallax() {
        const parallaxElements = document.querySelectorAll('[data-parallax]');
        if (parallaxElements.length === 0) return;

        let ticking = false;

        function updateParallax() {
            const scrolled = window.pageYOffset;

            parallaxElements.forEach(function(el) {
                const speed = parseFloat(el.dataset.parallax) || 0.5;
                const rect = el.getBoundingClientRect();
                const visible = rect.top < window.innerHeight && rect.bottom > 0;

                if (visible) {
                    const yPos = -(scrolled - el.offsetTop) * speed;
                    el.style.transform = `translate3d(0, ${yPos}px, 0)`;
                }
            });
        }

        window.addEventListener('scroll', function() {
            if (!ticking) {
                requestAnimationFrame(function() {
                    updateParallax();
                    ticking = false;
                });
                ticking = true;
            }
        });

        // Mouse parallax for hero section
        const hero = document.querySelector('.hero');
        if (hero) {
            const glowOrbs = hero.querySelectorAll('.hero-glow-1, .hero-glow-2, .hero-glow-3');
            const floatingCards = hero.querySelectorAll('.floating-card');

            hero.addEventListener('mousemove', function(e) {
                const rect = hero.getBoundingClientRect();
                const x = (e.clientX - rect.left) / rect.width - 0.5;
                const y = (e.clientY - rect.top) / rect.height - 0.5;

                glowOrbs.forEach(function(orb, index) {
                    const speed = (index + 1) * 20;
                    orb.style.transform = `translate(${x * speed}px, ${y * speed}px)`;
                });

                floatingCards.forEach(function(card, index) {
                    const speed = (index + 1) * 10;
                    card.style.transform = `translate(${x * speed}px, ${y * speed}px) rotate(${x * 5}deg)`;
                });
            });

            hero.addEventListener('mouseleave', function() {
                glowOrbs.forEach(function(orb) {
                    orb.style.transform = '';
                });
                floatingCards.forEach(function(card) {
                    card.style.transform = '';
                });
            });
        }
    }

    // ============================================
    // Magnetic Buttons
    // ============================================
    function initMagneticButtons() {
        const magneticElements = document.querySelectorAll('.btn-primary, .btn-secondary, .nav-cta');

        magneticElements.forEach(function(el) {
            el.addEventListener('mousemove', function(e) {
                const rect = el.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;

                el.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px)`;
            });

            el.addEventListener('mouseleave', function() {
                el.style.transform = '';
            });
        });
    }

    // ============================================
    // Text Reveal Animation
    // ============================================
    function initTextReveal() {
        const revealElements = document.querySelectorAll('[data-reveal]');
        if (revealElements.length === 0) return;

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const revealObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        revealElements.forEach(function(el) {
            revealObserver.observe(el);
        });
    }

    // ============================================
    // Scroll Progress Indicator
    // ============================================
    function initScrollProgress() {
        const progressBar = document.querySelector('.scroll-progress');
        if (!progressBar) return;

        let ticking = false;

        function updateProgress() {
            const scrolled = window.pageYOffset;
            const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
            const progress = (scrolled / maxScroll) * 100;
            progressBar.style.width = progress + '%';
        }

        window.addEventListener('scroll', function() {
            if (!ticking) {
                requestAnimationFrame(function() {
                    updateProgress();
                    ticking = false;
                });
                ticking = true;
            }
        });
    }

    // ============================================
    // 3D Tilt Effect for Cards
    // ============================================
    function initTiltEffect() {
        const tiltElements = document.querySelectorAll('.service-card, .feature-card, .stat-card');

        tiltElements.forEach(function(el) {
            el.addEventListener('mousemove', function(e) {
                const rect = el.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = (y - centerY) / 10;
                const rotateY = (centerX - x) / 10;

                el.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
            });

            el.addEventListener('mouseleave', function() {
                el.style.transform = '';
            });
        });
    }

    // ============================================
    // Custom Cursor Follower
    // ============================================
    function initCursorFollower() {
        // Only on desktop
        if (window.innerWidth < 992) return;

        const cursor = document.createElement('div');
        cursor.className = 'cursor-follower';
        document.body.appendChild(cursor);

        const cursorDot = document.createElement('div');
        cursorDot.className = 'cursor-dot';
        document.body.appendChild(cursorDot);

        let mouseX = 0, mouseY = 0;
        let cursorX = 0, cursorY = 0;

        document.addEventListener('mousemove', function(e) {
            mouseX = e.clientX;
            mouseY = e.clientY;

            // Instant position for dot
            cursorDot.style.left = mouseX + 'px';
            cursorDot.style.top = mouseY + 'px';
        });

        // Smooth follow animation
        function animateCursor() {
            const dx = mouseX - cursorX;
            const dy = mouseY - cursorY;

            cursorX += dx * 0.15;
            cursorY += dy * 0.15;

            cursor.style.left = cursorX + 'px';
            cursor.style.top = cursorY + 'px';

            requestAnimationFrame(animateCursor);
        }
        animateCursor();

        // Scale cursor on hover
        const hoverElements = document.querySelectorAll('a, button, .service-card, .feature-card');
        hoverElements.forEach(function(el) {
            el.addEventListener('mouseenter', function() {
                cursor.classList.add('hover');
                cursorDot.classList.add('hover');
            });
            el.addEventListener('mouseleave', function() {
                cursor.classList.remove('hover');
                cursorDot.classList.remove('hover');
            });
        });

        // Hide cursor on scroll
        let scrollTimeout;
        window.addEventListener('scroll', function() {
            cursor.style.opacity = '0';
            cursorDot.style.opacity = '0';

            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(function() {
                cursor.style.opacity = '1';
                cursorDot.style.opacity = '1';
            }, 100);
        });
    }

    // ============================================
    // Scroll-triggered Animations
    // ============================================
    function initScrollAnimations() {
        const animatedElements = document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right, .scale-in');

        if (animatedElements.length === 0) return;

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const animationObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    animationObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        animatedElements.forEach(function(el, index) {
            el.style.transitionDelay = (index * 0.1) + 's';
            animationObserver.observe(el);
        });
    }

    // ============================================
    // Typing Effect
    // ============================================
    function initTypingEffect() {
        const typingElements = document.querySelectorAll('[data-typing]');

        typingElements.forEach(function(el) {
            const text = el.dataset.typing;
            const speed = parseInt(el.dataset.speed) || 100;
            let index = 0;
            el.textContent = '';

            const typeObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        typeText();
                        typeObserver.unobserve(entry.target);
                    }
                });
            });

            typeObserver.observe(el);

            function typeText() {
                if (index < text.length) {
                    el.textContent += text.charAt(index);
                    index++;
                    setTimeout(typeText, speed);
                }
            }
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

    // Detect if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Add CSS for animations
    const style = document.createElement('style');
    style.textContent = `
        .cursor-follower {
            position: fixed;
            width: 40px;
            height: 40px;
            border: 2px solid rgba(6, 182, 212, 0.5);
            border-radius: 50%;
            pointer-events: none;
            z-index: 99999;
            transform: translate(-50%, -50%);
            transition: transform 0.2s ease, width 0.2s ease, height 0.2s ease, opacity 0.3s ease;
            mix-blend-mode: difference;
        }
        .cursor-follower.hover {
            width: 60px;
            height: 60px;
            border-color: rgba(6, 182, 212, 0.8);
        }
        .cursor-dot {
            position: fixed;
            width: 8px;
            height: 8px;
            background: var(--color-primary, #06b6d4);
            border-radius: 50%;
            pointer-events: none;
            z-index: 100000;
            transform: translate(-50%, -50%);
            transition: transform 0.1s ease, opacity 0.3s ease;
        }
        .cursor-dot.hover {
            transform: translate(-50%, -50%) scale(1.5);
        }
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        .fade-in-up.animated {
            opacity: 1;
            transform: translateY(0);
        }
        .fade-in-left {
            opacity: 0;
            transform: translateX(-30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        .fade-in-left.animated {
            opacity: 1;
            transform: translateX(0);
        }
        .fade-in-right {
            opacity: 0;
            transform: translateX(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        .fade-in-right.animated {
            opacity: 1;
            transform: translateX(0);
        }
        .scale-in {
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        .scale-in.animated {
            opacity: 1;
            transform: scale(1);
        }
        [data-reveal] {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        [data-reveal].revealed {
            opacity: 1;
            transform: translateY(0);
        }
        .counter-complete {
            animation: pulse 0.5s ease;
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        .shake {
            animation: shake 0.5s ease;
        }
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            20%, 60% { transform: translateX(-5px); }
            40%, 80% { transform: translateX(5px); }
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .error-message {
            color: #ef4444;
            font-size: 0.75rem;
            margin-top: 0.25rem;
            display: block;
            animation: slideIn 0.3s ease;
        }
        .form-group.has-error .form-control {
            border-color: #ef4444;
        }
        .form-group.has-success .form-control {
            border-color: #10b981;
        }
    `;
    document.head.appendChild(style);

})();
