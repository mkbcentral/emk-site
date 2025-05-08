document.addEventListener('DOMContentLoaded', function() {
    // Scroll Progress Indicator
    const scrollProgress = document.getElementById('scroll-progress');
    
    window.addEventListener('scroll', () => {
        const scrollTop = window.scrollY;
        const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrollPercentage = (scrollTop / scrollHeight) * 100;
        
        scrollProgress.style.width = scrollPercentage + '%';
    });
    
    // Header animation on scroll
    const header = document.getElementById('header');
    let lastScrollY = window.scrollY;

    window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;
        
        if (currentScrollY > 50) {
            header.classList.add('scrolled', 'bg-blue-900/95');
            
            if (currentScrollY > lastScrollY) {
                // Scrolling down - don't hide header anymore
                header.style.transform = 'translateY(0)';
            } else {
                // Scrolling up
                header.style.transform = 'translateY(0)';
            }
        } else {
            header.classList.remove('scrolled', 'bg-blue-900/95');
            header.style.transform = 'translateY(0)';
        }
        
        lastScrollY = currentScrollY;
    });

    // Mobile Menu Toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        if (mobileMenuButton.querySelector('i').classList.contains('fa-bars')) {
            mobileMenuButton.querySelector('i').classList.replace('fa-bars', 'fa-times');
        } else {
            mobileMenuButton.querySelector('i').classList.replace('fa-times', 'fa-bars');
        }
    });

    // Mobile Expertise Dropdown Toggle
    const mobileExpertiseToggle = document.getElementById('mobile-expertise-toggle');
    const mobileExpertiseMenu = document.getElementById('mobile-expertise-menu');

    mobileExpertiseToggle.addEventListener('click', () => {
        mobileExpertiseMenu.classList.toggle('hidden');
        const icon = mobileExpertiseToggle.querySelector('i');
        if (mobileExpertiseMenu.classList.contains('hidden')) {
            icon.style.transform = 'rotate(0deg)';
        } else {
            icon.style.transform = 'rotate(180deg)';
        }
    });

    // Mobile Services Dropdown Toggle
    const mobileServicesToggle = document.getElementById('mobile-services-toggle');
    const mobileServicesMenu = document.getElementById('mobile-services-menu');

    mobileServicesToggle.addEventListener('click', () => {
        mobileServicesMenu.classList.toggle('hidden');
        const icon = mobileServicesToggle.querySelector('i');
        if (mobileServicesMenu.classList.contains('hidden')) {
            icon.style.transform = 'rotate(0deg)';
        } else {
            icon.style.transform = 'rotate(180deg)';
        }
    });

    // Mobile Conformité Dropdown Toggle
    const mobileConformiteToggle = document.getElementById('mobile-conformite-toggle');
    const mobileConformiteMenu = document.getElementById('mobile-conformite-menu');

    if (mobileConformiteToggle) {
        mobileConformiteToggle.addEventListener('click', () => {
            mobileConformiteMenu.classList.toggle('hidden');
            const icon = mobileConformiteToggle.querySelector('i');
            if (mobileConformiteMenu.classList.contains('hidden')) {
                icon.style.transform = 'rotate(0deg)';
            } else {
                icon.style.transform = 'rotate(180deg)';
            }
        });
    }

    // Mobile Contrats Dropdown Toggle
    const mobileContratsToggle = document.getElementById('mobile-contrats-toggle');
    const mobileContratsMenu = document.getElementById('mobile-contrats-menu');

    if (mobileContratsToggle) {
        mobileContratsToggle.addEventListener('click', () => {
            mobileContratsMenu.classList.toggle('hidden');
            const icon = mobileContratsToggle.querySelector('i');
            if (mobileContratsMenu.classList.contains('hidden')) {
                icon.style.transform = 'rotate(0deg)';
            } else {
                icon.style.transform = 'rotate(180deg)';
            }
        });
    }

    // Mobile Presentation Dropdown Toggle
    const mobilePresentationToggle = document.getElementById('mobile-presentation-toggle');
    const mobilePresentationMenu = document.getElementById('mobile-presentation-menu');

    if (mobilePresentationToggle) {
        mobilePresentationToggle.addEventListener('click', () => {
            mobilePresentationMenu.classList.toggle('hidden');
            const icon = mobilePresentationToggle.querySelector('i');
            if (mobilePresentationMenu.classList.contains('hidden')) {
                icon.style.transform = 'rotate(0deg)';
            } else {
                icon.style.transform = 'rotate(180deg)';
            }
        });
    }

    // Carousel functionality
    const carousel = document.getElementById('carousel');
    const carouselInner = carousel.querySelector('.carousel-inner');
    const slides = Array.from(carousel.querySelectorAll('.carousel-slide'));
    const indicators = Array.from(document.querySelectorAll('#carousel-indicators button'));
    const prevButton = document.getElementById('prev-slide');
    const nextButton = document.getElementById('next-slide');
    
    let currentSlide = 0;
    const slideCount = slides.length;
    let autoplayInterval;

    // Initialize carousel
    function initCarousel() {
        slides[0].classList.add('active');
        
        // Add animation delay to elements
        slides.forEach(slide => {
            const animatedElements = slide.querySelectorAll('[data-animation]');
            animatedElements.forEach((el, index) => {
                el.style.setProperty('--delay', `${index * 200}ms`);
            });
        });
        
        startAutoplay();
        updateCarousel();
    }

    // Update carousel position and active states
    function updateCarousel() {
        carouselInner.style.transform = `translateX(-${currentSlide * 100}%)`;
        
        // Remove active class from all slides and add to current
        slides.forEach((slide, index) => {
            if (index === currentSlide) {
                slide.classList.add('active');
            } else {
                slide.classList.remove('active');
            }
        });
        
        // Update indicators
        indicators.forEach((indicator, index) => {
            if (index === currentSlide) {
                indicator.classList.add('active', 'bg-white', 'w-4');
                indicator.classList.remove('bg-white/50', 'w-3');
            } else {
                indicator.classList.remove('active', 'bg-white', 'w-4');
                indicator.classList.add('bg-white/50', 'w-3');
            }
        });
    }

    // Go to specific slide
    function goToSlide(index) {
        // Reset animations
        const currentAnimatedElements = slides[currentSlide].querySelectorAll('[data-animation]');
        currentAnimatedElements.forEach(el => {
            const animationType = el.getAttribute('data-animation');
            if (animationType === 'slide-up') {
                el.style.opacity = '0';
                el.style.transform = 'translateY(10px)';
            } else if (animationType === 'slide-right') {
                el.style.opacity = '0';
                el.style.transform = 'translateX(-10px)';
            } else if (animationType === 'zoom-in') {
                el.style.opacity = '0';
                el.style.transform = 'scale(0.9)';
            }
        });
        
        currentSlide = index;
        
        if (currentSlide < 0) {
            currentSlide = slideCount - 1;
        } else if (currentSlide >= slideCount) {
            currentSlide = 0;
        }
        
        updateCarousel();
        restartAutoplay();
    }

    // Autoplay functionality
    function startAutoplay() {
        autoplayInterval = setInterval(() => {
            goToSlide(currentSlide + 1);
        }, 6000);
    }

    function restartAutoplay() {
        clearInterval(autoplayInterval);
        startAutoplay();
    }

    // Event listeners for controls
    prevButton.addEventListener('click', () => {
        goToSlide(currentSlide - 1);
    });

    nextButton.addEventListener('click', () => {
        goToSlide(currentSlide + 1);
    });

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            goToSlide(index);
        });
    });

    // Initialize the carousel
    initCarousel();

    // Animation on scroll for other sections
    const animateOnScroll = document.querySelectorAll('.animate-on-scroll');
    
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const animation = el.getAttribute('data-animation');
                
                el.classList.add('animated');
                
                if (animation === 'fade-right') {
                    el.style.animation = 'fadeInRight 1s forwards';
                } else if (animation === 'fade-left') {
                    el.style.animation = 'fadeInLeft 1s forwards';
                } else {
                    el.style.animation = 'fadeInUp 1s forwards';
                }
                
                observer.unobserve(el);
            }
        });
    }, observerOptions);
    
    animateOnScroll.forEach(el => {
        observer.observe(el);
    });

    // Add scroll parallax effect to sponsors section
    const sponsorsSection = document.getElementById('sponsors');
    if (sponsorsSection) {
        window.addEventListener('scroll', () => {
            const scrollPosition = window.scrollY;
            const sectionTop = sponsorsSection.offsetTop;
            const sectionHeight = sponsorsSection.offsetHeight;
            
            // Only apply effect when section is in viewport
            if (scrollPosition > sectionTop - window.innerHeight && 
                scrollPosition < sectionTop + sectionHeight) {
                const parallaxOffset = (scrollPosition - (sectionTop - window.innerHeight)) * 0.2;
                sponsorsSection.style.backgroundPosition = `center ${50 + (parallaxOffset / 10)}%`;
                
                // Add fluid movement to sponsor cards
                const sponsorCards = sponsorsSection.querySelectorAll('.sponsor-card');
                sponsorCards.forEach((card, index) => {
                    const offset = Math.sin(scrollPosition / 500 + index) * 10;
                    card.style.transform = `translateY(${offset}px)`;
                });
            }
        });
    }

    // Gallery Horizontal Scroll
    const galleryScroller = document.querySelector('.gallery-scroller');
    const scrollLeftBtn = document.getElementById('scroll-left');
    const scrollRightBtn = document.getElementById('scroll-right');
    
    if (galleryScroller && scrollLeftBtn && scrollRightBtn) {
        const scrollAmount = 400; // Amount to scroll in pixels
        
        scrollLeftBtn.addEventListener('click', () => {
            smoothScroll(-scrollAmount);
        });
        
        scrollRightBtn.addEventListener('click', () => {
            smoothScroll(scrollAmount);
        });
        
        function smoothScroll(amount) {
            const currentScroll = galleryScroller.scrollLeft;
            const targetScroll = currentScroll + amount;
            
            // Apply CSS animation
            galleryScroller.style.setProperty('--scroll-distance', `-${amount}px`);
            galleryScroller.classList.add('animating');
            
            setTimeout(() => {
                galleryScroller.classList.remove('animating');
                galleryScroller.scrollLeft = targetScroll;
            }, 500); // Match the animation duration
        }
        
        // Add hover effect when mouse moves over gallery items
        const galleryItems = document.querySelectorAll('.gallery-item');
        galleryItems.forEach(item => {
            item.addEventListener('mousemove', (e) => {
                const { left, top, width, height } = item.getBoundingClientRect();
                const x = (e.clientX - left) / width - 0.5;
                const y = (e.clientY - top) / height - 0.5;
                
                item.style.transform = `scale(1.05) perspective(1000px) rotateY(${x * 10}deg) rotateX(${y * -10}deg)`;
            });
            
            item.addEventListener('mouseleave', () => {
                item.style.transform = 'scale(1) rotateY(0) rotateX(0)';
            });
        });
    }
});