document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.carousel-slide');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const indicators = document.querySelectorAll('.indicator');
    
    let currentSlide = 0;
    const slideCount = slides.length;
    let autoSlideInterval;
    const transitionTypes = ['fade', 'slide', 'zoom'];
    let currentTransitionType = 0;
    
    // Initialisation
    slides.forEach((slide, index) => {
        // Set initial positioning for all slides
        if (index === 0) {
            slide.classList.add('active');
            slide.style.opacity = '1';
            slide.style.zIndex = '10';
        } else {
            slide.style.opacity = '0';
            slide.style.zIndex = '1';
        }
    });
    
    // Configuration de l'auto-défilement
    autoSlideInterval = setInterval(() => nextSlide(), 5000);
    
    // Fonction pour activer un slide avec transition PowerPoint
    function activateSlide(index, direction = 'next') {
        // Disable current slide
        slides[currentSlide].classList.remove('active');
        slides[currentSlide].style.opacity = '0';
        slides[currentSlide].style.zIndex = '1';
        
        // Get the current slide content and animate it out
        const oldContent = slides[currentSlide].querySelector('.carousel-content');
        if (oldContent) {
            oldContent.style.opacity = '0';
            oldContent.style.transform = direction === 'next' ? 
                'translateX(-50px) scale(0.8)' : 'translateX(50px) scale(0.8)';
        }
        
        // Update current slide index
        currentSlide = index;
        
        // Enable new slide with transition
        slides[currentSlide].classList.add('active');
        slides[currentSlide].style.opacity = '1';
        slides[currentSlide].style.zIndex = '10';
        
        // Animate content
        const content = slides[currentSlide].querySelector('.carousel-content');
        if (content) {
            content.style.opacity = '0';
            content.style.transform = direction === 'next' ? 
                'translateX(50px) scale(0.9)' : 'translateX(-50px) scale(0.9)';
            
            setTimeout(() => {
                content.style.opacity = '1';
                content.style.transform = 'translateY(0) scale(1)';
                // Add text animation by manipulating inner elements
                const title = content.querySelector('h2');
                const paragraph = content.querySelector('p');
                
                if (title) {
                    title.classList.add('animate-title');
                }
                
                if (paragraph) {
                    paragraph.classList.add('animate-paragraph');
                    // Reset animations after they complete
                    setTimeout(() => {
                        title?.classList.remove('animate-title');
                        paragraph?.classList.remove('animate-paragraph');
                    }, 1500);
                }
            }, 100);
        }
        
        // Update indicators
        indicators.forEach((indicator, idx) => {
            indicator.classList.toggle('active', idx === currentSlide);
        });
        
        // Reset auto-slide interval
        clearInterval(autoSlideInterval);
        autoSlideInterval = setInterval(() => nextSlide(), 5000);
    }
    
    // Passer au slide suivant
    function nextSlide() {
        const nextIndex = (currentSlide + 1) % slideCount;
        activateSlide(nextIndex, 'next');
    }
    
    // Passer au slide précédent
    function prevSlide() {
        const prevIndex = (currentSlide - 1 + slideCount) % slideCount;
        activateSlide(prevIndex, 'prev');
    }
    
    // Gestionnaires d'événements
    prevBtn.addEventListener('click', () => {
        prevSlide();
    });
    
    nextBtn.addEventListener('click', () => {
        nextSlide();
    });
    
    // Permettre de naviguer avec les indicateurs
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            const direction = index > currentSlide ? 'next' : 'prev';
            activateSlide(index, direction);
        });
    });
    
    // Pause de l'auto-défilement lors du survol
    const carouselContainer = document.querySelector('.carousel-container');
    carouselContainer.addEventListener('mouseenter', () => {
        clearInterval(autoSlideInterval);
    });
    
    carouselContainer.addEventListener('mouseleave', () => {
        autoSlideInterval = setInterval(() => nextSlide(), 5000);
    });
    
    // Support du swipe tactile
    let touchStartX = 0;
    let touchEndX = 0;
    
    carouselContainer.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    carouselContainer.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        if (touchEndX < touchStartX - swipeThreshold) {
            // Swipe à gauche
            nextSlide();
        } else if (touchEndX > touchStartX + swipeThreshold) {
            // Swipe à droite
            prevSlide();
        }
    }
});