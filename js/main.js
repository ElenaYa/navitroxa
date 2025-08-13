
document.addEventListener('DOMContentLoaded', function() {
    
    initializeNavigation();
    initializeCookieBanner();
    initializeScrollAnimations();
    initializeFAQ();
    initializeContactForm();
    initializeScrollEffects();
    initializeFeaturesTabs();
    
    function initializeCookieBanner() {
        const cookieBanner = document.getElementById('cookie-banner');
        const acceptBtn = document.getElementById('accept-cookies');
        const declineBtn = document.getElementById('decline-cookies');
        
        const cookieConsent = localStorage.getItem('cookieConsent');
        
        if (!cookieConsent) {
            setTimeout(() => {
                cookieBanner.classList.add('show');
            }, 1000);
        }
        
        if (acceptBtn) {
            acceptBtn.addEventListener('click', function() {
                localStorage.setItem('cookieConsent', 'accepted');
                cookieBanner.classList.remove('show');
                
                loadAnalytics();
            });
        }
        
        if (declineBtn) {
            declineBtn.addEventListener('click', function() {
                localStorage.setItem('cookieConsent', 'declined');
                cookieBanner.classList.remove('show');
            });
        }
    }
    
    function loadAnalytics() {
        if (typeof gtag === 'undefined') {
            const script = document.createElement('script');
            script.async = true;
            script.src = 'https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID';
            document.head.appendChild(script);
            
            script.onload = function() {
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'GA_MEASUREMENT_ID');
            };
        }
    }

    function initializeFeaturesTabs() {
        const tabs = document.querySelectorAll('.features-tab');
        const panels = document.querySelectorAll('.feature-panel');
        if (!tabs.length || !panels.length) return;
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const id = tab.getAttribute('data-panel');
                tabs.forEach(t => t.classList.toggle('active', t === tab));
                panels.forEach(p => p.classList.toggle('active', p.getAttribute('data-id') === id));
            });
        });
    }
    
    function initializeNavigation() {
        const navToggle = document.getElementById('nav-toggle');
        const navMenu = document.getElementById('nav-menu');
        const navLinks = document.querySelectorAll('.nav-link');
        
        if (navToggle) {
            navToggle.addEventListener('click', function() {
                navToggle.classList.toggle('active');
                navMenu.classList.toggle('active');
                
                document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
            });
        }
        
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
        
        document.addEventListener('click', function(e) {
            if (!navMenu.contains(e.target) && !navToggle.contains(e.target)) {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
        
        let lastScrollTop = 0;
        const header = document.querySelector('.header');
        
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.98)';
                header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.boxShadow = 'none';
            }
            
            lastScrollTop = scrollTop;
        });
    }
    
    function initializeScrollAnimations() {
        const animatedElements = document.querySelectorAll('[data-animate]');
        
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-on-scroll', 'animated');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        animatedElements.forEach(element => {
            element.classList.add('animate-on-scroll');
            observer.observe(element);
        });
        
        const counters = document.querySelectorAll('.stat-number, .stat-number-big, .result-number, .trust-number');
        
        const counterObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        counters.forEach(counter => {
            counterObserver.observe(counter);
        });
    }
    
    function animateCounter(element) {
        const target = element.textContent.trim();
        const isPercentage = target.includes('%');
        const isCurrency = target.includes('₽') || target.includes('М');
        const hasPlus = target.includes('+');
        const hasMinus = target.includes('-');
        
        let num = parseInt(target.replace(/[^\d]/g, ''));
        if (isNaN(num)) return;
        
        const duration = 2000;
        const steps = 60;
        const increment = num / steps;
        let current = 0;
        
        const timer = setInterval(() => {
            current += increment;
            
            if (current >= num) {
                current = num;
                clearInterval(timer);
            }
            
            let displayValue = Math.floor(current);
            let displayText = displayValue.toString();
            
            if (hasPlus) displayText = '+' + displayText;
            if (hasMinus) displayText = '-' + displayText;
            if (isPercentage) displayText += '%';
            if (isCurrency) {
                if (target.includes('М')) displayText += 'М₽';
                else displayText += '₽';
            }
            
            element.textContent = displayText;
        }, duration / steps);
    }
    
    function initializeFAQ() {
        const faqItems = document.querySelectorAll('.faq-item');
        
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            
            if (question) {
                question.addEventListener('click', function() {
                    const isActive = item.classList.contains('active');
                    
                    faqItems.forEach(otherItem => {
                        otherItem.classList.remove('active');
                    });
                    
                    if (!isActive) {
                        item.classList.add('active');
                    }
                });
            }
        });
    }
    
    function initializeContactForm() {
        const contactForm = document.getElementById('contact-form');
        
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const formData = new FormData(contactForm);
                const data = Object.fromEntries(formData);
                
                if (!validateForm(data)) {
                    return;
                }
                
                submitForm(data);
            });
        }
    }
    
    function validateForm(data) {
        const errors = [];
        
        if (!data.name || data.name.trim().length < 2) {
            errors.push('Пожалуйста, введите ваше имя');
        }
        
        if (!data.email || !isValidEmail(data.email)) {
            errors.push('Пожалуйста, введите корректный email');
        }
        
        if (!data.message || data.message.trim().length < 10) {
            errors.push('Пожалуйста, введите сообщение (минимум 10 символов)');
        }
        
        if (!data.privacy) {
            errors.push('Необходимо согласие с политикой конфиденциальности');
        }
        
        if (errors.length > 0) {
            showFormErrors(errors);
            return false;
        }
        
        return true;
    }
    
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    function showFormErrors(errors) {
        const existingErrors = document.querySelectorAll('.form-error');
        existingErrors.forEach(error => error.remove());
        
        const errorContainer = document.createElement('div');
        errorContainer.className = 'form-error';
        errorContainer.style.cssText = `
            background: #fee2e2;
            border: 1px solid #fecaca;
            color: #dc2626;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
        `;
        
        const errorList = document.createElement('ul');
        errorList.style.cssText = 'margin: 0; padding-left: 1.5rem;';
        
        errors.forEach(error => {
            const errorItem = document.createElement('li');
            errorItem.textContent = error;
            errorItem.style.marginBottom = '0.5rem';
            errorList.appendChild(errorItem);
        });
        
        errorContainer.appendChild(errorList);
        
        const contactForm = document.getElementById('contact-form');
        contactForm.insertBefore(errorContainer, contactForm.firstChild);
        
        errorContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
    
    function submitForm(data) {
        const submitButton = document.querySelector('#contact-form button[type="submit"]');
        const originalText = submitButton.innerHTML;
        
        submitButton.innerHTML = 'Отправка...';
        submitButton.disabled = true;
        
        setTimeout(() => {
            showSuccessMessage();
            
            document.getElementById('contact-form').reset();
            
            submitButton.innerHTML = originalText;
            submitButton.disabled = false;
            
            if (typeof gtag !== 'undefined') {
                gtag('event', 'form_submit', {
                    'event_category': 'Contact',
                    'event_label': 'Contact Form'
                });
            }
        }, 2000);
    }
    
    function showSuccessMessage() {
        const existingMessages = document.querySelectorAll('.form-success, .form-error');
        existingMessages.forEach(message => message.remove());
        
        const successContainer = document.createElement('div');
        successContainer.className = 'form-success';
        successContainer.style.cssText = `
            background: #dcfce7;
            border: 1px solid #bbf7d0;
            color: #16a34a;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            text-align: center;
        `;
        
        successContainer.innerHTML = `
            <strong>Спасибо!</strong> Ваше сообщение успешно отправлено. 
            Мы свяжемся с вами в течение 24 часов.
        `;
        
        const contactForm = document.getElementById('contact-form');
        contactForm.insertBefore(successContainer, contactForm.firstChild);
        
        successContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
        
        setTimeout(() => {
            successContainer.remove();
        }, 5000);
    }
    
    function initializeScrollEffects() {
        const heroSection = document.querySelector('.hero-section');
        if (heroSection) {
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const rate = scrolled * -0.5;
                
                const heroBackground = heroSection.querySelector('.hero-background');
                if (heroBackground) {
                    heroBackground.style.transform = `translateY(${rate}px)`;
                }
            });
        }
        
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        anchorLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                if (href === '#') return;
                
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    
                    const headerHeight = document.querySelector('.header').offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }
    
    window.showCookieSettings = function() {
        const cookieBanner = document.getElementById('cookie-banner');
        if (cookieBanner) {
            cookieBanner.classList.add('show');
        }
    };
    
    function initializeLazyLoading() {
        const images = document.querySelectorAll('img[loading="lazy"]');
        
        const imageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.classList.remove('lazy');
                    observer.unobserve(img);
                }
            });
        });
        
        images.forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    initializeLazyLoading();
    
    window.addEventListener('error', function(e) {
    });
    
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
    const optimizedScrollHandler = debounce(function() {
    }, 16); 
    
    window.addEventListener('scroll', optimizedScrollHandler);
    
    const cookieConsent = localStorage.getItem('cookieConsent');
    if (cookieConsent === 'accepted') {
        loadAnalytics();
    }
});

function throttle(func, delay) {
    let timeoutId;
    let lastExecTime = 0;
    return function (...args) {
        const currentTime = Date.now();
        
        if (currentTime - lastExecTime > delay) {
            func.apply(this, args);
            lastExecTime = currentTime;
        } else {
            clearTimeout(timeoutId);
            timeoutId = setTimeout(() => {
                func.apply(this, args);
                lastExecTime = Date.now();
            }, delay - (currentTime - lastExecTime));
        }
    };
}

function trackEvent(eventName, eventData = {}) {
    if (typeof gtag !== 'undefined') {
        gtag('event', eventName, eventData);
    }
    
    if (typeof fbq !== 'undefined') {
        fbq('track', eventName, eventData);
    }
    
}

document.addEventListener('click', function(e) {
    const button = e.target.closest('.btn');
    if (button) {
        const buttonText = button.textContent.trim();
        const buttonType = button.classList.contains('btn-primary') ? 'primary' : 'secondary';
        
        trackEvent('button_click', {
            button_text: buttonText,
            button_type: buttonType,
            page_location: window.location.pathname
        });
    }
});

document.addEventListener('focus', function(e) {
    if (e.target.matches('input, textarea, select')) {
        trackEvent('form_interaction', {
            field_name: e.target.name || e.target.id,
            field_type: e.target.type || e.target.tagName.toLowerCase(),
            page_location: window.location.pathname
        });
    }
}, true);

let maxScrollDepth = 0;
window.addEventListener('scroll', throttle(function() {
    const scrollDepth = Math.round((window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100);
    
    if (scrollDepth > maxScrollDepth) {
        maxScrollDepth = scrollDepth;
        
        if ([25, 50, 75, 90].includes(scrollDepth)) {
            trackEvent('scroll_depth', {
                scroll_depth: scrollDepth,
                page_location: window.location.pathname
            });
        }
    }
}, 1000));

let timeOnPage = 0;
const timeTracker = setInterval(function() {
    timeOnPage += 10;
    
    if ([30, 60, 120, 300].includes(timeOnPage)) {
        trackEvent('time_on_page', {
            time_seconds: timeOnPage,
            page_location: window.location.pathname
        });
    }
}, 10000); 

document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
        clearInterval(timeTracker);
    }
});

if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('/sw.js')
            .then(function(registration) {
            })
            .catch(function(err) {
            });
    });
}