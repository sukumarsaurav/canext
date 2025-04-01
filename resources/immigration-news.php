<?php
$page_title = "Immigration News | CANEXT Immigration";
include('../includes/header.php');
?>

<!-- Page Header -->
<section class="page-header" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/resources/news-header.jpg'); background-size: cover; background-position: center; padding: 100px 0; color: var(--color-light); text-align: center;">
    <div class="container">
        <h1 data-aos="fade-up">Immigration News</h1>
        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="100">
            <ol class="breadcrumb" style="display: flex; justify-content: center; list-style: none; padding: 0; margin: 20px 0 0 0;">
                <li class="breadcrumb-item"><a href="../index.php" style="color: var(--color-cream);">Home</a></li>
                <li class="breadcrumb-item"><a href="../resources.php" style="color: var(--color-cream);">Resources</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: var(--color-light);">Immigration News</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Latest News Section -->
<section class="section news-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Latest Immigration Updates</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Stay informed about the latest changes and developments in Canadian immigration policies and programs.</p>
        
        <div class="news-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px;">
            <!-- News Item 1 -->
            <article class="news-card" data-aos="fade-up" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="news-image" style="height: 200px; background-image: url('../images/resources/news1.jpg'); background-size: cover; background-position: center;"></div>
                <div class="news-content" style="padding: 20px;">
                    <div class="news-date" style="color: var(--color-burgundy); font-size: 0.9rem; margin-bottom: 10px;">March 15, 2024</div>
                    <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Express Entry: Latest Draw Results</h3>
                    <p>The latest Express Entry draw saw 1,000 candidates invited to apply for permanent residence, with a minimum CRS score of 485.</p>
                    <a href="#" class="btn btn-secondary" style="margin-top: 15px;">Read More</a>
                </div>
            </article>
            
            <!-- News Item 2 -->
            <article class="news-card" data-aos="fade-up" data-aos-delay="100" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="news-image" style="height: 200px; background-image: url('../images/resources/news2.jpg'); background-size: cover; background-position: center;"></div>
                <div class="news-content" style="padding: 20px;">
                    <div class="news-date" style="color: var(--color-burgundy); font-size: 0.9rem; margin-bottom: 10px;">March 10, 2024</div>
                    <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">New PNP Streams Announced</h3>
                    <p>Ontario introduces new PNP streams targeting tech workers and entrepreneurs in emerging sectors.</p>
                    <a href="#" class="btn btn-secondary" style="margin-top: 15px;">Read More</a>
                </div>
            </article>
            
            <!-- News Item 3 -->
            <article class="news-card" data-aos="fade-up" data-aos-delay="200" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="news-image" style="height: 200px; background-image: url('../images/resources/news3.jpg'); background-size: cover; background-position: center;"></div>
                <div class="news-content" style="padding: 20px;">
                    <div class="news-date" style="color: var(--color-burgundy); font-size: 0.9rem; margin-bottom: 10px;">March 5, 2024</div>
                    <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Study Permit Updates</h3>
                    <p>Important changes to study permit requirements and processing for international students.</p>
                    <a href="#" class="btn btn-secondary" style="margin-top: 15px;">Read More</a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Policy Updates Section -->
<section class="section updates-section" style="background-color: var(--color-cream);">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Policy Updates</h2>
        <div class="updates-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px;">
            <!-- Update 1 -->
            <div class="update-card" data-aos="fade-up" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Express Entry</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 15px;">• New occupation-specific draws introduced</li>
                    <li style="margin-bottom: 15px;">• Changes to CRS points allocation</li>
                    <li>• Updated processing standards</li>
                </ul>
            </div>
            
            <!-- Update 2 -->
            <div class="update-card" data-aos="fade-up" data-aos-delay="100" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Work Permits</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 15px;">• LMIA process improvements</li>
                    <li style="margin-bottom: 15px;">• New open work permit categories</li>
                    <li>• Employer compliance updates</li>
                </ul>
            </div>
            
            <!-- Update 3 -->
            <div class="update-card" data-aos="fade-up" data-aos-delay="200" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Family Sponsorship</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 15px;">• Income requirement adjustments</li>
                    <li style="margin-bottom: 15px;">• Processing time improvements</li>
                    <li>• New super visa options</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="section newsletter-section">
    <div class="container">
        <div class="newsletter-container" data-aos="fade-up" style="max-width: 600px; margin: 0 auto; text-align: center;">
            <h2 class="section-title">Stay Updated</h2>
            <p class="section-subtitle">Subscribe to our newsletter to receive the latest immigration news and updates directly in your inbox.</p>
            
            <form class="newsletter-form" style="margin-top: 30px;">
                <div style="display: flex; gap: 10px;">
                    <input type="email" placeholder="Enter your email address" style="flex: 1; padding: 12px; border: 1px solid #ddd; border-radius: 5px;">
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include('../includes/footer.php'); ?>

