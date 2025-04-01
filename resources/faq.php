<?php
$page_title = "FAQ | CANEXT Immigration";
include('../includes/header.php');
?>

<!-- Page Header -->
<section class="page-header" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/resources/faq-header.jpg'); background-size: cover; background-position: center; padding: 100px 0; color: var(--color-light); text-align: center;">
    <div class="container">
        <h1 data-aos="fade-up">Frequently Asked Questions</h1>
        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="100">
            <ol class="breadcrumb" style="display: flex; justify-content: center; list-style: none; padding: 0; margin: 20px 0 0 0;">
                <li class="breadcrumb-item"><a href="../index.php" style="color: var(--color-cream);">Home</a></li>
                <li class="breadcrumb-item"><a href="../resources.php" style="color: var(--color-cream);">Resources</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: var(--color-light);">FAQ</li>
            </ol>
        </nav>
    </div>
</section>

<!-- FAQ Categories Section -->
<section class="section categories-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Browse by Category</h2>
        <div class="categories-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 40px;">
            <a href="#general" class="category-card" data-aos="fade-up" style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-decoration: none; text-align: center;">
                <i class="fas fa-info-circle" style="font-size: 2rem; color: var(--color-burgundy); margin-bottom: 15px;"></i>
                <h3 style="color: var(--color-burgundy);">General Questions</h3>
            </a>
            
            <a href="#express-entry" class="category-card" data-aos="fade-up" data-aos-delay="100" style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-decoration: none; text-align: center;">
                <i class="fas fa-paper-plane" style="font-size: 2rem; color: var(--color-burgundy); margin-bottom: 15px;"></i>
                <h3 style="color: var(--color-burgundy);">Express Entry</h3>
            </a>
            
            <a href="#study-work" class="category-card" data-aos="fade-up" data-aos-delay="200" style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-decoration: none; text-align: center;">
                <i class="fas fa-graduation-cap" style="font-size: 2rem; color: var(--color-burgundy); margin-bottom: 15px;"></i>
                <h3 style="color: var(--color-burgundy);">Study & Work</h3>
            </a>
            
            <a href="#family" class="category-card" data-aos="fade-up" data-aos-delay="300" style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-decoration: none; text-align: center;">
                <i class="fas fa-users" style="font-size: 2rem; color: var(--color-burgundy); margin-bottom: 15px;"></i>
                <h3 style="color: var(--color-burgundy);">Family Immigration</h3>
            </a>
        </div>
    </div>
</section>

<!-- FAQ Content Section -->
<section class="section faq-content" style="background-color: var(--color-cream);">
    <div class="container">
        <!-- General Questions -->
        <div id="general" class="faq-category" data-aos="fade-up">
            <h2 class="section-title">General Questions</h2>
            <div class="accordion" style="max-width: 800px; margin: 0 auto;">
                <div class="accordion-item" style="background: white; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <div class="accordion-header" style="padding: 20px; cursor: pointer;">
                        <h3 style="margin: 0; font-size: 1.1rem;">What are the basic requirements to immigrate to Canada?</h3>
                    </div>
                    <div class="accordion-content" style="padding: 0 20px 20px;">
                        <p>Basic requirements typically include:</p>
                        <ul style="list-style: disc; margin-left: 20px;">
                            <li>Valid passport</li>
                            <li>Good health and character</li>
                            <li>Sufficient funds</li>
                            <li>Language proficiency (English/French)</li>
                            <li>Education or work experience</li>
                        </ul>
                    </div>
                </div>
                
                <div class="accordion-item" style="background: white; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <div class="accordion-header" style="padding: 20px; cursor: pointer;">
                        <h3 style="margin: 0; font-size: 1.1rem;">How long does the immigration process take?</h3>
                    </div>
                    <div class="accordion-content" style="padding: 0 20px 20px;">
                        <p>Processing times vary by program and individual circumstances. Express Entry can take 6-8 months, while family sponsorship might take 12-24 months.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Express Entry Questions -->
        <div id="express-entry" class="faq-category" data-aos="fade-up" style="margin-top: 60px;">
            <h2 class="section-title">Express Entry Questions</h2>
            <div class="accordion" style="max-width: 800px; margin: 0 auto;">
                <div class="accordion-item" style="background: white; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <div class="accordion-header" style="padding: 20px; cursor: pointer;">
                        <h3 style="margin: 0; font-size: 1.1rem;">What is the minimum CRS score needed?</h3>
                    </div>
                    <div class="accordion-content" style="padding: 0 20px 20px;">
                        <p>The minimum score varies with each draw. Recent draws have ranged from 450-500 points, but this can change based on various factors.</p>
                    </div>
                </div>
                
                <div class="accordion-item" style="background: white; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <div class="accordion-header" style="padding: 20px; cursor: pointer;">
                        <h3 style="margin: 0; font-size: 1.1rem;">How can I improve my CRS score?</h3>
                    </div>
                    <div class="accordion-content" style="padding: 0 20px 20px;">
                        <p>You can improve your score by:</p>
                        <ul style="list-style: disc; margin-left: 20px;">
                            <li>Improving language test scores</li>
                            <li>Gaining more work experience</li>
                            <li>Obtaining higher education</li>
                            <li>Getting a provincial nomination</li>
                            <li>Obtaining a valid job offer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Study & Work Questions -->
        <div id="study-work" class="faq-category" data-aos="fade-up" style="margin-top: 60px;">
            <h2 class="section-title">Study & Work Questions</h2>
            <div class="accordion" style="max-width: 800px; margin: 0 auto;">
                <div class="accordion-item" style="background: white; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <div class="accordion-header" style="padding: 20px; cursor: pointer;">
                        <h3 style="margin: 0; font-size: 1.1rem;">Can I work while studying in Canada?</h3>
                    </div>
                    <div class="accordion-content" style="padding: 0 20px 20px;">
                        <p>Yes, most international students can work up to 20 hours per week during regular academic sessions and full-time during scheduled breaks.</p>
                    </div>
                </div>
                
                <div class="accordion-item" style="background: white; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <div class="accordion-header" style="padding: 20px; cursor: pointer;">
                        <h3 style="margin: 0; font-size: 1.1rem;">What is a PGWP?</h3>
                    </div>
                    <div class="accordion-content" style="padding: 0 20px 20px;">
                        <p>A Post-Graduation Work Permit (PGWP) allows international graduates to work in Canada for up to 3 years after completing their studies.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Family Immigration Questions -->
        <div id="family" class="faq-category" data-aos="fade-up" style="margin-top: 60px;">
            <h2 class="section-title">Family Immigration Questions</h2>
            <div class="accordion" style="max-width: 800px; margin: 0 auto;">
                <div class="accordion-item" style="background: white; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <div class="accordion-header" style="padding: 20px; cursor: pointer;">
                        <h3 style="margin: 0; font-size: 1.1rem;">Who can I sponsor?</h3>
                    </div>
                    <div class="accordion-content" style="padding: 0 20px 20px;">
                        <p>You can sponsor:</p>
                        <ul style="list-style: disc; margin-left: 20px;">
                            <li>Spouse or common-law partner</li>
                            <li>Dependent children</li>
                            <li>Parents and grandparents</li>
                            <li>Other eligible relatives under specific programs</li>
                        </ul>
                    </div>
                </div>
                
                <div class="accordion-item" style="background: white; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <div class="accordion-header" style="padding: 20px; cursor: pointer;">
                        <h3 style="margin: 0; font-size: 1.1rem;">What are the income requirements for sponsorship?</h3>
                    </div>
                    <div class="accordion-content" style="padding: 0 20px 20px;">
                        <p>Income requirements vary based on family size and the type of sponsorship. For spouse sponsorship, there is no minimum income requirement, but for parents and grandparents, you must meet minimum necessary income levels.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section contact-section">
    <div class="container">
        <div class="contact-container" data-aos="fade-up" style="max-width: 600px; margin: 0 auto; text-align: center;">
            <h2 class="section-title">Still Have Questions?</h2>
            <p class="section-subtitle">Can't find the answer you're looking for? Our immigration experts are here to help.</p>
            <a href="../contact.php" class="btn btn-primary" style="margin-top: 20px;">Contact Us</a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Accordion functionality
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    
    accordionHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const isOpen = content.style.display === 'block';
            
            // Close all accordion items
            document.querySelectorAll('.accordion-content').forEach(item => {
                item.style.display = 'none';
            });
            
            // Open clicked item if it wasn't already open
            if (!isOpen) {
                content.style.display = 'block';
            }
        });
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>

<?php include('../includes/footer.php'); ?>
