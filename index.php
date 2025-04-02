<?php
$page_title = "CANEXT | Canadian Immigration Consultancy";
include('includes/header.php');
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Your Path to Canada Starts Here</h1>
            <p class="hero-subtitle">We provide expert guidance and support for all your Canadian immigration needs, with personalized solutions for study permits, work visas, and permanent residency applications.</p>
            <div class="hero-buttons">
                <a href="assessment-tools.php" class="btn btn-primary">Check Eligibility</a>
                <a href="contact.php" class="btn btn-secondary">Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section services" id="services">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Our Visa Services</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Comprehensive immigration solutions tailored to your unique situation</p>
        
        <div class="services-grid">
            <!-- Study Permit -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-image" style="background-image: url('images/services/study-permit.jpg')"></div>
                <div class="service-content">
                    <h3 class="service-title">Study Permits</h3>
                    <p class="service-description">Pursue your educational dreams at top Canadian institutions with our expert guidance on study permit applications.</p>
                    <a href="visas.php?type=study" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            
            <!-- Work Permit -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-image" style="background-image: url('images/services/work-permit.jpg')"></div>
                <div class="service-content">
                    <h3 class="service-title">Work Permits</h3>
                    <p class="service-description">Advance your career in Canada with our specialized assistance for work permit applications and employer connections.</p>
                    <a href="visas.php?type=work" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            
            <!-- Express Entry -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                <div class="service-image" style="background-image: url('images/services/express-entry.jpg')"></div>
                <div class="service-content">
                    <h3 class="service-title">Express Entry</h3>
                    <p class="service-description">Fast-track your permanent residency through Canada's Express Entry system with our proven strategies.</p>
                    <a href="visas.php?type=express-entry" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
        </div>
        
        <div class="text-center" data-aos="fade-up" data-aos-delay="500" style="margin-top: 40px; text-align: center;">
            <a href="visas.php" class="btn btn-primary">View All Services</a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section why-us" style="background-color: var(--color-gold);">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Why Choose CANEXT</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Here's what sets us apart from other immigration consultancies</p>
        
        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-card" data-aos="fade-up" data-aos-delay="200" style="text-align: center; padding: 30px; background-color: var(--color-light); border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="feature-icon" style="font-size: 3rem; color: var(--color-burgundy); margin-bottom: 20px;">
                    <i class="fas fa-award"></i>
                </div>
                <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Licensed Consultants</h3>
                <p>Our team consists of ICCRC licensed consultants with extensive experience in Canadian immigration.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="feature-card" data-aos="fade-up" data-aos-delay="300" style="text-align: center; padding: 30px; background-color: var(--color-light); border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="feature-icon" style="font-size: 3rem; color: var(--color-burgundy); margin-bottom: 20px;">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">High Success Rate</h3>
                <p>We pride ourselves on our high application success rate through meticulous preparation and attention to detail.</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="feature-card" data-aos="fade-up" data-aos-delay="400" style="text-align: center; padding: 30px; background-color: var(--color-light); border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="feature-icon" style="font-size: 3rem; color: var(--color-burgundy); margin-bottom: 20px;">
                    <i class="fas fa-user-friends"></i>
                </div>
                <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Personalized Approach</h3>
                <p>We develop customized immigration strategies tailored to your unique situation and goals.</p>
            </div>
            
            <!-- Feature 4 -->
            <div class="feature-card" data-aos="fade-up" data-aos-delay="500" style="text-align: center; padding: 30px; background-color: var(--color-light); border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="feature-icon" style="font-size: 3rem; color: var(--color-burgundy); margin-bottom: 20px;">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">End-to-End Support</h3>
                <p>From initial assessment to settlement guidance, we support you throughout your entire immigration journey.</p>
            </div>
        </div>
    </div>
</section>

<!-- Assessment Tools Section -->
<section class="section assessment-tools" id="assessment-tools" style="background-color: var(--color-cream);">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Immigration Assessment Tools</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Check your eligibility and prepare for your Canadian immigration journey</p>
        
        <div class="tools-grid">
            <!-- Visa Eligibility Tool -->
            <div class="tool-card" data-aos="fade-up" data-aos-delay="200">
                <div class="tool-icon">
                    <i class="fas fa-passport"></i>
                </div>
                <h3 class="tool-title">Visa Eligibility Calculator</h3>
                <p>Quickly determine if you qualify for various Canadian immigration programs based on your profile.</p>
                <a href="assessment-tools.php#eligibility" class="btn btn-primary" style="margin-top: 20px;">Check Eligibility</a>
            </div>
            
            <!-- CRS Calculator -->
            <div class="tool-card" data-aos="fade-up" data-aos-delay="300">
                <div class="tool-icon">
                    <i class="fas fa-calculator"></i>
                </div>
                <h3 class="tool-title">CRS Score Calculator</h3>
                <p>Calculate your Comprehensive Ranking System score for Express Entry applications.</p>
                <a href="assessment-tools.php#crs" class="btn btn-primary" style="margin-top: 20px;">Calculate Score</a>
            </div>
            
            <!-- Study Permit Checker -->
            <div class="tool-card" data-aos="fade-up" data-aos-delay="400">
                <div class="tool-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 class="tool-title">Study Permit Checker</h3>
                <p>Verify if you meet the requirements for a Canadian study permit and what documents you'll need.</p>
                <a href="assessment-tools.php#study" class="btn btn-primary" style="margin-top: 20px;">Check Requirements</a>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<section class="section success-stories" id="success-stories" style="background-color: #FDF7EF; padding: 80px 0;">
    <div class="container">
        <h2 class="section-title" style="font-size: 2.5rem; color: var(--color-burgundy); text-align: center; margin-bottom: 10px;">Check what's our client</h2>
        <h2 class="section-title" style="font-size: 2.5rem; color: var(--color-burgundy); text-align: center; margin-bottom: 60px;">say about us!</h2>
        
        <div class="testimonials-container" style="display: flex; gap: 25px; justify-content: center; flex-wrap: wrap; position: relative;">
            <!-- Navigation buttons -->
            <button class="nav-btn prev" style="position: absolute; left: -20px; top: 50%; transform: translateY(-50%); width: 50px; height: 50px; background: var(--color-burgundy); border-radius: 50%; color: white; border: none; cursor: pointer; z-index: 10; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-chevron-left"></i>
            </button>
            
            <!-- Testimonial 1 -->
            <div class="testimonial-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative; max-width: 350px; flex: 1;">
                <div style="color: var(--color-burgundy); margin-bottom: 15px; font-weight: 500;">Express Entry Program</div>
                <p class="story-content" style="font-size: 1.1em; line-height: 1.6; margin-bottom: 20px; position: relative;">
                    "CANEXT made my Express Entry application process smooth and stress-free. Their guidance helped me secure permanent residency in just 6 months. Their attention to detail and expertise made all the difference!"
                </p>
                <div style="display: flex; align-items: center; margin-top: 30px;">
                    <div>
                        <h4 style="color: var(--color-burgundy); margin: 0; font-weight: 600;">John Smith</h4>
                        <p style="margin: 5px 0 0 0; color: #666;">Software Engineer, UK</p>
                    </div>
                </div>
                <div style="position: absolute; top: 20px; right: 20px; font-size: 3.5em; color: var(--color-burgundy); opacity: 0.2; font-family: serif;">"</div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="testimonial-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative; max-width: 350px; flex: 1;">
                <div style="color: var(--color-burgundy); margin-bottom: 15px; font-weight: 500;">Study Permit</div>
                <p class="story-content" style="font-size: 1.1em; line-height: 1.6; margin-bottom: 20px; position: relative;">
                    "Thanks to CANEXT, I was accepted into my dream university in Canada. They helped me with my study permit application and gave me valuable advice on preparing for my new life as an international student."
                </p>
                <div style="display: flex; align-items: center; margin-top: 30px;">
                    <div>
                        <h4 style="color: var(--color-burgundy); margin: 0; font-weight: 600;">Maria Garcia</h4>
                        <p style="margin: 5px 0 0 0; color: #666;">Student, Mexico</p>
                    </div>
                </div>
                <div style="position: absolute; top: 20px; right: 20px; font-size: 3.5em; color: var(--color-burgundy); opacity: 0.2; font-family: serif;">"</div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="testimonial-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative; max-width: 350px; flex: 1;">
                <div style="color: var(--color-burgundy); margin-bottom: 15px; font-weight: 500;">Work Permit</div>
                <p class="story-content" style="font-size: 1.1em; line-height: 1.6; margin-bottom: 20px; position: relative;">
                    "After struggling to secure a Canadian work permit on my own, I turned to CANEXT. Their expertise and strategic approach helped me obtain a work permit within weeks. I'm now working for a top company in Toronto!"
                </p>
                <div style="display: flex; align-items: center; margin-top: 30px;">
                    <div>
                        <h4 style="color: var(--color-burgundy); margin: 0; font-weight: 600;">Ahmed Hassan</h4>
                        <p style="margin: 5px 0 0 0; color: #666;">IT Specialist, Egypt</p>
                    </div>
                </div>
                <div style="position: absolute; top: 20px; right: 20px; font-size: 3.5em; color: var(--color-burgundy); opacity: 0.2; font-family: serif;">"</div>
            </div>
            
            <button class="nav-btn next" style="position: absolute; right: -20px; top: 50%; transform: translateY(-50%); width: 50px; height: 50px; background: var(--color-burgundy); border-radius: 50%; color: white; border: none; cursor: pointer; z-index: 10; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        
        <!-- Add this for the sticky contact button as shown in image -->
        <div class="sticky-contact" style="position: fixed; right: 0; top: 50%; transform: translateY(-50%); background-color: var(--color-burgundy); color: white; padding: 15px 10px; writing-mode: vertical-lr; text-orientation: mixed; transform: rotate(180deg); border-radius: 5px 0 0 5px; font-weight: 600; cursor: pointer; z-index: 1000;">
            Book Consultation
        </div>
    </div>
</section>

<!-- Script for slider functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.testimonials-container');
    const cards = document.querySelectorAll('.testimonial-card');
    const prevBtn = document.querySelector('.nav-btn.prev');
    const nextBtn = document.querySelector('.nav-btn.next');
    
    let currentIndex = 0;
    const maxIndex = Math.max(0, cards.length - (window.innerWidth >= 1200 ? 3 : window.innerWidth >= 768 ? 2 : 1));
    
    // Initially hide prev button if at start
    prevBtn.style.opacity = currentIndex === 0 ? '0.5' : '1';
    prevBtn.style.pointerEvents = currentIndex === 0 ? 'none' : 'auto';
    
    // Initially hide next button if at end or not enough cards
    nextBtn.style.opacity = currentIndex >= maxIndex ? '0.5' : '1';
    nextBtn.style.pointerEvents = currentIndex >= maxIndex ? 'none' : 'auto';
    
    prevBtn.addEventListener('click', function() {
        if (currentIndex > 0) {
            currentIndex--;
            updateCardsPosition();
        }
    });
    
    nextBtn.addEventListener('click', function() {
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateCardsPosition();
        }
    });
    
    function updateCardsPosition() {
        const cardWidth = cards[0].offsetWidth + 25; // card width + gap
        
        cards.forEach((card, index) => {
            card.style.transform = `translateX(${-currentIndex * cardWidth}px)`;
            card.style.transition = 'transform 0.3s ease-in-out';
        });
        
        // Update button states
        prevBtn.style.opacity = currentIndex === 0 ? '0.5' : '1';
        prevBtn.style.pointerEvents = currentIndex === 0 ? 'none' : 'auto';
        
        nextBtn.style.opacity = currentIndex >= maxIndex ? '0.5' : '1';
        nextBtn.style.pointerEvents = currentIndex >= maxIndex ? 'none' : 'auto';
    }
    
    // Handle responsive behavior
    window.addEventListener('resize', function() {
        const newMaxIndex = Math.max(0, cards.length - (window.innerWidth >= 1200 ? 3 : window.innerWidth >= 768 ? 2 : 1));
        if (currentIndex > newMaxIndex) {
            currentIndex = newMaxIndex;
        }
        updateCardsPosition();
    });
    
    // Add some styles for smooth sliding
    cards.forEach(card => {
        card.style.flex = '0 0 auto';
        card.style.transition = 'transform 0.3s ease-in-out';
    });
    
    // Make container a flex container with overflow hidden
    container.style.position = 'relative';
    container.style.overflow = 'hidden';
    
    // Make sticky button go to contact section
    document.querySelector('.sticky-contact').addEventListener('click', function() {
        document.getElementById('contact').scrollIntoView({behavior: 'smooth'});
    });
});
</script>

<!-- Call to Action Section -->
<section class="section cta" style="background-image: linear-gradient(rgba(109, 35, 35, 0.9), rgba(109, 35, 35, 0.9)), url('images/cta-background.jpg'); background-size: cover; background-position: center; padding: 100px 0; color: var(--color-light); text-align: center;">
    <div class="container">
        <h2 data-aos="fade-up" style="font-size: 2.5rem; margin-bottom: 20px;">Start Your Canadian Journey Today</h2>
        <p data-aos="fade-up" data-aos-delay="100" style="font-size: 1.2rem; margin-bottom: 30px; max-width: 700px; margin-left: auto; margin-right: auto;">Let our experts help you navigate the complex immigration process and achieve your Canadian dreams with confidence.</p>
        <div data-aos="fade-up" data-aos-delay="200">
            <a href="contact.php" class="btn btn-primary" style="background-color: var(--color-cream); color: var(--color-burgundy); margin-right: 15px;">Contact Us</a>
            <a href="assessment-tools.php" class="btn btn-secondary" style="border-color: var(--color-cream); color: var(--color-cream);">Check Eligibility</a>
        </div>
    </div>
</section>

<!-- Contact Section Preview -->
<section class="section contact" id="contact">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Get In Touch</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Have questions about Canadian immigration? Contact us for expert advice.</p>
        
        <div class="contact-grid">
            <div class="contact-info" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Our Office</h4>
                        <p>2233 Argentina Rd, Mississauga ON L5N 2X7, Canada</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Phone</h4>
                        <p>+1 (647) 226-7436</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Email</h4>
                        <p>info@canext.com</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Office Hours</h4>
                        <p>Monday to Friday: 9am - 5pm</p>
                        <p>Saturday: 10am - 2pm (By appointment only)</p>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-container" data-aos="fade-up" data-aos-delay="300">
                <form id="contact-form" class="contact-form" action="php/process_contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="service">Service of Interest</label>
                        <select id="service" name="service">
                            <option value="">Select a service</option>
                            <option value="study">Study Permit</option>
                            <option value="work">Work Permit</option>
                            <option value="express-entry">Express Entry</option>
                            <option value="provincial-nominee">Provincial Nominee</option>
                            <option value="family">Family Sponsorship</option>
                            <option value="visitor">Visitor Visa</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?> 