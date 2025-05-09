



        // Sticky Navbar
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                navbar.classList.add('shadow-md');
            } else {
                navbar.classList.remove('shadow-md');
            }
        });
        
        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        let mobileMenuOpen = false;
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenuOpen = !mobileMenuOpen;
            if (mobileMenuOpen) {
                mobileMenu.classList.add('h-auto');
                mobileMenu.classList.remove('h-0');
                mobileMenuButton.innerHTML = '<i class="ri-close-line text-2xl"></i>';
            } else {
                mobileMenu.classList.remove('h-auto');
                mobileMenu.classList.add('h-0');
                mobileMenuButton.innerHTML = '<i class="ri-menu-line text-2xl"></i>';
            }
        });
        
        // Hero Slider Functionality
        const slides = document.querySelectorAll('.slide');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const indicators = document.querySelectorAll('.indicator');
        let currentSlide = 0;
        const slideCount = slides.length;
        
        function updateSlides() {
            slides.forEach((slide, index) => {
                slide.classList.remove('active');
                indicators[index].classList.remove('active', 'opacity-100');
                indicators[index].classList.add('opacity-50');
            });
            
            slides[currentSlide].classList.add('active');
            indicators[currentSlide].classList.add('active', 'opacity-100');
            indicators[currentSlide].classList.remove('opacity-50');
        }
        
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slideCount;
            updateSlides();
        }
        
        function prevSlide() {
            currentSlide = (currentSlide - 1 + slideCount) % slideCount;
            updateSlides();
        }
        
        // Event listeners for slider navigation
        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);
        
        // Indicator buttons
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentSlide = index;
                updateSlides();
            });
        });
        
        // Auto slide every 5 seconds
        let slideInterval = setInterval(nextSlide, 5000);
        
        // Reset interval when manually changing slides
        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }
        
        nextBtn.addEventListener('click', resetInterval);
        prevBtn.addEventListener('click', resetInterval);
        indicators.forEach(indicator => {
            indicator.addEventListener('click', resetInterval);
        });


// Room Category Tabs Functionality
document.addEventListener('DOMContentLoaded', function() {
    const roomTabs = document.querySelectorAll('.room-tab');
    const roomCards = document.querySelectorAll('.room-card');
    
    // Function to show room cards based on selected category
    function filterRooms(category) {
        roomCards.forEach(card => {
            if (category === 'all' || card.dataset.category === category) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
    
    // Add click event listeners to tabs
    roomTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            roomTabs.forEach(t => {
                t.classList.remove('active', 'text-blue-600', 'border-blue-600');
                t.classList.add('border-transparent');
            });
            
            // Add active class to clicked tab
            this.classList.add('active', 'text-blue-600', 'border-blue-600');
            this.classList.remove('border-transparent');
            
            // Filter room cards
            filterRooms(this.dataset.category);
        });
    });
});





// Testimonials Slider Functionality
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('testimonials-slider');
    const slides = document.querySelectorAll('.testimonial-slide');
    const prevBtn = document.getElementById('testimonial-prev');
    const nextBtn = document.getElementById('testimonial-next');
    const indicators = document.querySelectorAll('.testimonial-indicator');
    
    const slideCount = slides.length;
    let currentSlide = 0;
    let slideWidth;
    
    // Function to calculate slide width based on screen size
    function calculateSlideWidth() {
      if (window.innerWidth < 768) {
        return 1; // 1 slide visible on mobile
      } else if (window.innerWidth < 1024) {
        return 2; // 2 slides visible on tablet
      } else {
        return 3; // 3 slides visible on desktop
      }
    }
    
    function updateSlideWidth() {
      const visibleSlides = calculateSlideWidth();
      slideWidth = 100 / visibleSlides;
      
      slides.forEach(slide => {
        slide.style.width = `${slideWidth}%`;
      });
    }
    
    function updateSlider() {
      const visibleSlides = calculateSlideWidth();
      const maxIndex = slideCount - visibleSlides;
      
      // Ensure current slide index is valid
      if (currentSlide > maxIndex) {
        currentSlide = maxIndex;
      }
      
      const offset = -currentSlide * slideWidth;
      slider.style.transform = `translateX(${offset}%)`;
      
      // Update indicators
      indicators.forEach((indicator, index) => {
        if (index === Math.floor(currentSlide / visibleSlides)) {
          indicator.classList.add('bg-blue-600');
          indicator.classList.remove('bg-gray-300');
        } else {
          indicator.classList.remove('bg-blue-600');
          indicator.classList.add('bg-gray-300');
        }
      });
      
      // Hide/show navigation buttons based on position
      prevBtn.style.opacity = currentSlide <= 0 ? '0.5' : '1';
      nextBtn.style.opacity = currentSlide >= maxIndex ? '0.5' : '1';
    }
    
    function goToSlide(index) {
      const visibleSlides = calculateSlideWidth();
      const maxIndex = slideCount - visibleSlides;
      currentSlide = Math.max(0, Math.min(index, maxIndex));
      updateSlider();
    }
    
    function nextSlide() {
      const visibleSlides = calculateSlideWidth();
      const maxIndex = slideCount - visibleSlides;
      goToSlide(Math.min(currentSlide + 1, maxIndex));
    }
    
    function prevSlide() {
      goToSlide(Math.max(currentSlide - 1, 0));
    }
    
    // Initialize slider
    updateSlideWidth();
    updateSlider();
    
    // Event listeners
    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);
    
    indicators.forEach((indicator, index) => {
      indicator.addEventListener('click', () => {
        const visibleSlides = calculateSlideWidth();
        goToSlide(index * visibleSlides);
      });
    });
    
    // Responsive adjustments
    window.addEventListener('resize', () => {
      updateSlideWidth();
      updateSlider();
    });
  });





  // Map interaction
  document.getElementById('view-directions').addEventListener('click', function() {
    // In a real implementation, this would open a map with directions
    alert('This would open a map with directions to the hotel.');
    // Alternatively, you could use: window.open('https://maps.google.com/?q=Your+Hotel+Address', '_blank');
  });

  // Transportation help button
  document.getElementById('transportation-help').addEventListener('click', function() {
    // In a real implementation, this would open a contact form or modal
    alert('This would connect you with our transportation concierge.');
  });

  // In a real implementation, you would replace the placeholder with an actual map
  // Example with Google Maps:
  /*
  function initMap() {
    const hotelLocation = { lat: 34.0522, lng: -118.2437 }; // Replace with actual coordinates
    const map = new google.maps.Map(document.getElementById("map-container"), {
      zoom: 15,
      center: hotelLocation,
    });
    const marker = new google.maps.Marker({
      position: hotelLocation,
      map: map,
      title: "Azure Resort & Spa"
    });
  }
  */





// Newsletter Form Submission
const newsletterForm = document.getElementById('newsletter-form');
const newsletterSuccess = document.getElementById('newsletter-success');

if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Simulate form submission
        setTimeout(() => {
            newsletterForm.reset();
            newsletterSuccess.classList.remove('hidden');
            
            // Hide success message after 5 seconds
            setTimeout(() => {
                newsletterSuccess.classList.add('hidden');
            }, 5000);
        }, 1000);
    });
}