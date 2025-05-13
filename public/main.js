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
        
        if (currentScrollY > 100) {
            header.classList.add('scrolled');
            header.classList.add('bg-white', 'shadow-lg'); 
            header.classList.remove('bg-transparent', 'bg-blue-900');
            
            // Hide entire contact information section when scrolling
            const contactInfoSection = document.getElementById('contact-info-section');
            if (contactInfoSection) {
                contactInfoSection.style.transition = 'all 0.3s ease-in-out';
                contactInfoSection.style.opacity = '0';
                contactInfoSection.style.transform = 'translateY(-20px)';
                setTimeout(() => {
                    contactInfoSection.classList.add('hidden');
                }, 300);
            }
            
            // Change text color to match the white background
            header.querySelectorAll('.text-gray-700, .text-blue-100, .text-white, .text-blue-200, .text-blue-300').forEach(el => {
                el.classList.add('text-blue-900');
                el.classList.remove('text-gray-700', 'text-blue-100', 'text-white', 'text-blue-200', 'text-blue-300');
            });
            
            if (currentScrollY > lastScrollY) {
                // Scrolling down - keep header visible
                header.style.transform = 'translateY(0)';
            } else {
                // Scrolling up
                header.style.transform = 'translateY(0)';
            }
        } else {
            header.classList.remove('scrolled', 'bg-white', 'shadow-lg'); 
            header.classList.add('bg-transparent');
            
            // Show entire contact information section when at the top
            const contactInfoSection = document.getElementById('contact-info-section');
            if (contactInfoSection) {
                contactInfoSection.classList.remove('hidden');
                setTimeout(() => {
                    contactInfoSection.style.opacity = '1';
                    contactInfoSection.style.transform = 'translateY(0)';
                }, 50);
            }
            
            // Restore original text colors
            header.querySelectorAll('.text-blue-900').forEach(el => {
                if (el.tagName === 'A' && !el.closest('#contact-info-section')) {
                    el.classList.add('text-blue-100');
                } else if (el.classList.contains('text-4xl')) {
                    el.classList.add('text-white');
                } else if (el.classList.contains('text-lg') && !el.classList.contains('nav-link')) {
                    el.classList.add('text-blue-200');
                } else if (!el.closest('#contact-info-section')) {
                    el.classList.add('text-blue-300');
                } else {
                    el.classList.add('text-gray-700');
                }
                el.classList.remove('text-blue-900');
            });
            
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
    if (carousel) {
        const carouselInner = carousel.querySelector('.carousel-inner');
        const slides = Array.from(carousel.querySelectorAll('.carousel-slide'));
        const indicators = Array.from(document.querySelectorAll('#carousel-indicators button'));
        const prevButton = document.getElementById('prev-slide');
        const nextButton = document.getElementById('next-slide');
        
        let currentSlide = 0;
        const slideCount = slides.length;
        let autoplayInterval;

        // Update carousel position and active states
        function updateCarousel() {
            //carouselInner.style.transition = 'transform 0.7s cubic-bezier(0.33, 1, 0.68, 1)';
            carouselInner.style.transform = `translateX(-${currentSlide * 100}%)`;
            
            // Remove active class from all slides and add to current
            slides.forEach((slide, index) => {
                if (index === currentSlide) {
                    slide.classList.add('active');
                    slide.style.opacity = '1';
                    slide.style.transform = 'scale(1)';
                    
                    // Add parallax effect to active slide
                    const bgImage = slide.querySelector('.parallax-bg');
                    if (bgImage) {
                        bgImage.style.transform = 'scale(1.1)';
                        bgImage.style.transition = 'transform 0.7s ease-out';
                    }
                    
                   
                } else {
                    slide.classList.remove('active');
                    slide.style.opacity = '0.7';
                    slide.style.transform = 'scale(0.95)';
                    
                    // Reset parallax effect on non-active slides
                    const bgImage = slide.querySelector('.parallax-bg');
                    if (bgImage) {
                        bgImage.style.transform = 'scale(1)';
                    }
                }
            });
        }

        // Go to specific slide
        function goToSlide(index) {
            // Add transition effect to elements in current slide
            if (slides[currentSlide]) {
                const elements = slides[currentSlide].querySelectorAll('.hero-element');
                elements.forEach(el => {
                    el.style.opacity = '0';
                    el.style.transform = 'translateY(20px)';
                });
            }
            
            currentSlide = index;
            
            if (currentSlide < 0) {
                currentSlide = slideCount - 1;
            } else if (currentSlide >= slideCount) {
                currentSlide = 0;
            }
            
            updateCarousel();
            
            // Animate elements in new active slide
            setTimeout(() => {
                const activeElements = slides[currentSlide].querySelectorAll('.hero-element');
                activeElements.forEach((el, i) => {
                    el.style.transition = 'all 0.8s cubic-bezier(0.16, 1, 0.3, 1)';
                    el.style.transitionDelay = `${i * 0.1 + 0.3}s`;
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                });
            }, 300);
            
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
        if (prevButton) {
            prevButton.addEventListener('click', () => {
                goToSlide(currentSlide - 1);
            });
        }

        if (nextButton) {
            nextButton.addEventListener('click', () => {
                goToSlide(currentSlide + 1);
            });
        }

        if (indicators.length > 0) {
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    goToSlide(index);
                });
            });
        }

        // Add parallax effect on mouse move
        carousel.addEventListener('mousemove', (e) => {
            if (slides[currentSlide]) {
                const slide = slides[currentSlide];
                const bgImage = slide.querySelector('.parallax-bg');
                
                if (bgImage) {
                    const { left, top, width, height } = carousel.getBoundingClientRect();
                    const x = (e.clientX - left) / width - 0.5;
                    const y = (e.clientY - top) / height - 0.5;
                    
                    bgImage.style.transform = `scale(1.1) translate(${x * 20}px, ${y * 20}px)`;
                }
            }
        });
        
        carousel.addEventListener('mouseleave', () => {
            if (slides[currentSlide]) {
                const bgImage = slides[currentSlide].querySelector('.parallax-bg');
                if (bgImage) {
                    bgImage.style.transform = 'scale(1.1) translate(0, 0)';
                }
            }
        });

        // Initialize the carousel
        function initCarousel() {
            slides[0].classList.add('active');
            slides[0].style.opacity = '1';
            slides[0].style.transform = 'scale(1)';
            
            // Initialize non-active slides
            for (let i = 1; i < slides.length; i++) {
                slides[i].style.opacity = '0.7';
                slides[i].style.transform = 'scale(0.95)';
            }
            
            // Add animation delay to elements
            slides.forEach(slide => {
                const animatedElements = slide.querySelectorAll('.animate-slide-up, .animate-zoom-in, .animate-slide-right');
                animatedElements.forEach((el, index) => {
                    el.style.setProperty('--delay', `${index * 200}ms`);
                });
            });
            
            startAutoplay();
            updateCarousel();
        }

        initCarousel();
    }

    // Animation for sidebar info cards
    const sidebarInfoCards = document.querySelectorAll('.lg\\:w-1\\/4 .bg-white, .lg\\:w-1\\/4 .bg-blue-50');
    if (sidebarInfoCards.length > 0) {
        sidebarInfoCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.transition = 'all 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 300 + (index * 150));
        });
    }

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

    // Add section-based fade animations
    const sections = document.querySelectorAll('section');
    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const section = entry.target;
                // Apply fade-in to all children with staggered delay
                const children = section.querySelectorAll(':scope > div, :scope > h2, :scope > p, :scope > a, .service-card, .article-card, .sponsor-card, .gallery-item');
                children.forEach((child, index) => {
                    child.style.opacity = '0';
                    child.style.transform = 'translateY(30px)';
                    child.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                    setTimeout(() => {
                        child.style.opacity = '1';
                        child.style.transform = 'translateY(0)';
                    }, 100 + (index * 120)); // Staggered delay
                });
                sectionObserver.unobserve(section);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    });
    
    sections.forEach(section => {
        sectionObserver.observe(section);
    })

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

    // Initialize scroll animations
    function initScrollAnimations() {
        const revealElements = document.querySelectorAll('.reveal');
        
        const revealOnScroll = function() {
            revealElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (elementTop < windowHeight - 100) {
                    element.classList.add('active');
                }
            });
        };
        
        window.addEventListener('scroll', revealOnScroll);
        window.addEventListener('load', revealOnScroll);
    }

    // Initialize text animations
    function initTextAnimations() {
        const animatedTexts = document.querySelectorAll('.animate-text');
        
        animatedTexts.forEach((text, index) => {
            const textContent = text.textContent;
            text.textContent = '';
            
            Array.from(textContent).forEach((letter, letterIndex) => {
                const span = document.createElement('span');
                span.textContent = letter === ' ' ? ' ' : letter;
                span.style.animationDelay = `${letterIndex * 50}ms`;
                span.classList.add('animate-fade-in');
                text.appendChild(span);
            });
        });
    }

    // Initialize floating elements
    function initFloatingElements() {
        const floatingElements = document.querySelectorAll('.floating');
        
        floatingElements.forEach((element, index) => {
            element.style.animationDelay = `${index * 0.2}s`;
        });
    }

    // Initialize hover effects
    function initHoverEffects() {
        // Card hover effects
        const cards = document.querySelectorAll('.service-card, .team-card, .article-card');
        cards.forEach(card => {
            card.classList.add('card-hover');
        });
        
        // Image hover effects
        const imageContainers = document.querySelectorAll('.gallery-item, .team-image');
        imageContainers.forEach(container => {
            container.classList.add('image-hover');
        });
        
        // Button hover effects
        const buttons = document.querySelectorAll('button, .btn, a[href]:not(nav a)');
        buttons.forEach(button => {
            button.classList.add('button-hover');
        });
    }

    initScrollAnimations();
    initTextAnimations();
    initFloatingElements();
    initHoverEffects();

    // Add initial animations to hero section
    const heroElements = document.querySelectorAll('.hero-element');
    heroElements.forEach((element, index) => {
        element.classList.add('animate-fade-in');
        element.style.animationDelay = `${index * 0.2}s`;
    });

    // Add animations to service cards
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach((card, index) => {
        card.classList.add('reveal');
        card.style.transitionDelay = `${index * 0.1}s`;
        
        // Add staggered entrance animation
        card.style.opacity = '0';
        card.style.transform = 'scale(0.9) translateY(40px)';
        setTimeout(() => {
            card.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            card.style.opacity = '1';
            card.style.transform = 'scale(1) translateY(0)';
        }, 300 + (index * 150));
    });

    // Add animations to team members
    const teamMembers = document.querySelectorAll('.team-member');
    teamMembers.forEach((member, index) => {
        member.classList.add('reveal');
        member.style.transitionDelay = `${index * 0.1}s`;
    });

    function enhanceAnimations() {
        // Add floating particles to hero section
        const heroSection = document.querySelector('.hero-section');
        if (heroSection) {
            const particlesContainer = document.createElement('div');
            particlesContainer.className = 'hero-particles';
            
            // Create particles
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.className = 'hero-particle';
                
                // Random size between 3px and 8px
                const size = Math.random() * 5 + 3;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                // Random position
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                
                // Random animation duration and delay
                particle.style.animationDuration = `${Math.random() * 10 + 5}s`;
                particle.style.animationDelay = `${Math.random() * 5}s`;
                
                particlesContainer.appendChild(particle);
            }
            
            heroSection.appendChild(particlesContainer);
        }
        
        // Add advanced hover animations to service cards
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                const icon = card.querySelector('.w-16.h-16 i');
                if (icon) {
                    icon.style.animation = 'bounce 0.6s ease';
                    setTimeout(() => {
                        icon.style.animation = '';
                    }, 600);
                }
            });
        });
        
        // Add ripple effect to buttons
        const buttons = document.querySelectorAll('button, .btn, a[href]:not(nav a)');
        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                const rect = button.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const ripple = document.createElement('span');
                ripple.className = 'ripple-effect';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                
                button.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
        
        // Animate scroll to sections when clicking on nav links
        const navLinks = document.querySelectorAll('nav a[href^="#"]');
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Add typing animation to headings
        const sectionHeadings = document.querySelectorAll('section h2');
        sectionHeadings.forEach(heading => {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        heading.classList.add('animated-heading');
                        observer.unobserve(heading);
                    }
                });
            }, { threshold: 0.5 });
            
            observer.observe(heading);
        });
        
        // Add parallax effect to all major sections
        window.addEventListener('scroll', () => {
            const parallaxSections = document.querySelectorAll('section');
            parallaxSections.forEach(section => {
                const scrollPosition = window.scrollY;
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                
                if (scrollPosition > sectionTop - window.innerHeight && 
                    scrollPosition < sectionTop + sectionHeight) {
                    const yPos = (scrollPosition - sectionTop) * 0.2;
                    section.style.backgroundPositionY = `${yPos}px`;
                    
                    // Apply subtle rotation to cards inside visible sections
                    const cards = section.querySelectorAll('.card, .service-card, .article-card, .sponsor-card');
                    cards.forEach((card, index) => {
                        const rotateVal = Math.sin(scrollPosition / 1000 + index) * 1.5;
                        card.style.transform = `perspective(1000px) rotateX(${rotateVal}deg) rotateY(${rotateVal}deg)`;
                    });
                }
            });
        });
        
        // Enhanced card animations
        const allCards = document.querySelectorAll('.service-card, .article-card, .sponsor-card');
        allCards.forEach(card => {
            card.addEventListener('mousemove', function(e) {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 10;
                const rotateY = (centerX - x) / 10;
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
                card.style.boxShadow = `0 10px 20px rgba(0, 0, 0, 0.2), 
                                        ${(x - centerX) / 10}px ${(y - centerY) / 10}px 10px rgba(0, 0, 0, 0.1)`;
            });
            
            card.addEventListener('mouseleave', function() {
                card.style.transform = '';
                card.style.boxShadow = '';
            });
        });
        
        // Add scroll-driven animations to images
        const images = document.querySelectorAll('img:not(.h-20)');
        const imageObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('image-reveal');
                    imageObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        images.forEach(image => {
            imageObserver.observe(image);
        });
    }

    enhanceAnimations();

    // Add back to top button functionality
    const backToTopButton = document.getElementById('back-to-top');
    if (backToTopButton) {
        // Initially hide the button
        backToTopButton.classList.add('hidden');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTopButton.classList.remove('hidden');
                backToTopButton.classList.add('flex');
            } else {
                backToTopButton.classList.add('hidden');
                backToTopButton.classList.remove('flex');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Add scroll buttons functionality for sponsors section
    const sponsorsContainer = document.querySelector('.sponsors-container');
    const scrollSponsorsLeftBtn = document.getElementById('scroll-sponsors-left');
    const scrollSponsorsRightBtn = document.getElementById('scroll-sponsors-right');
    
    if (sponsorsContainer && scrollSponsorsLeftBtn && scrollSponsorsRightBtn) {
        const scrollAmount = 340; // Width of one card + margin
        
        scrollSponsorsLeftBtn.addEventListener('click', () => {
            const currentScroll = sponsorsContainer.scrollLeft;
            sponsorsContainer.style.scrollBehavior = 'smooth';
            
            sponsorsContainer.classList.add('scrolling-left');
            setTimeout(() => {
                sponsorsContainer.classList.remove('scrolling-left');
            }, 500);
            
            sponsorsContainer.scrollTo({
                left: currentScroll - scrollAmount,
                behavior: 'smooth'
            });
        });
        
        scrollSponsorsRightBtn.addEventListener('click', () => {
            const currentScroll = sponsorsContainer.scrollLeft;
            sponsorsContainer.style.scrollBehavior = 'smooth';
            
            sponsorsContainer.classList.add('scrolling-right');
            setTimeout(() => {
                sponsorsContainer.classList.remove('scrolling-right');
            }, 500);
            
            sponsorsContainer.scrollTo({
                left: currentScroll + scrollAmount,
                behavior: 'smooth'
            });
        });
        
        sponsorsContainer.addEventListener('wheel', (e) => {
            e.preventDefault();
            const delta = Math.sign(e.deltaY);
            sponsorsContainer.scrollBy({
                left: delta * 100,
                behavior: 'smooth'
            });
        });
    }
});