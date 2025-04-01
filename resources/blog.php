<?php
$page_title = "Blog | CANEXT Immigration";
include('../includes/header.php');
?>

<!-- Page Header -->
<section class="page-header" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/resources/blog-header.jpg'); background-size: cover; background-position: center; padding: 100px 0; color: var(--color-light); text-align: center;">
    <div class="container">
        <h1 data-aos="fade-up">Immigration Blog</h1>
        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="100">
            <ol class="breadcrumb" style="display: flex; justify-content: center; list-style: none; padding: 0; margin: 20px 0 0 0;">
                <li class="breadcrumb-item"><a href="../index.php" style="color: var(--color-cream);">Home</a></li>
                <li class="breadcrumb-item"><a href="../resources.php" style="color: var(--color-cream);">Resources</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: var(--color-light);">Blog</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Featured Posts Section -->
<section class="section featured-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Featured Posts</h2>
        <div class="featured-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px;">
            <!-- Featured Post 1 -->
            <article class="featured-post" data-aos="fade-up" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="post-image" style="height: 200px; background-image: url('../images/blog/featured1.jpg'); background-size: cover; background-position: center;"></div>
                <div class="post-content" style="padding: 20px;">
                    <div class="post-meta" style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <span style="color: var(--color-burgundy);">March 15, 2024</span>
                        <span style="color: var(--color-burgundy);">Life in Canada</span>
                    </div>
                    <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Living in Toronto: A Newcomer's Guide</h3>
                    <p style="margin-bottom: 20px;">Essential tips and insights for new immigrants settling in Toronto, from housing to healthcare.</p>
                    <a href="#" class="btn btn-secondary">Read More</a>
                </div>
            </article>
            
            <!-- Featured Post 2 -->
            <article class="featured-post" data-aos="fade-up" data-aos-delay="100" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="post-image" style="height: 200px; background-image: url('../images/blog/featured2.jpg'); background-size: cover; background-position: center;"></div>
                <div class="post-content" style="padding: 20px;">
                    <div class="post-meta" style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <span style="color: var(--color-burgundy);">March 10, 2024</span>
                        <span style="color: var(--color-burgundy);">Success Stories</span>
                    </div>
                    <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">From Student to Permanent Resident</h3>
                    <p style="margin-bottom: 20px;">A success story of an international student's journey to permanent residency in Canada.</p>
                    <a href="#" class="btn btn-secondary">Read More</a>
                </div>
            </article>
            
            <!-- Featured Post 3 -->
            <article class="featured-post" data-aos="fade-up" data-aos-delay="200" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="post-image" style="height: 200px; background-image: url('../images/blog/featured3.jpg'); background-size: cover; background-position: center;"></div>
                <div class="post-content" style="padding: 20px;">
                    <div class="post-meta" style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <span style="color: var(--color-burgundy);">March 5, 2024</span>
                        <span style="color: var(--color-burgundy);">Career Tips</span>
                    </div>
                    <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Job Hunting in Canada</h3>
                    <p style="margin-bottom: 20px;">Expert advice on finding employment opportunities and building a career in Canada.</p>
                    <a href="#" class="btn btn-secondary">Read More</a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="section categories-section" style="background-color: var(--color-cream);">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Browse by Category</h2>
        <div class="categories-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 40px;">
            <a href="#" class="category-card" data-aos="fade-up" style="background: white; padding: 20px; border-radius: 10px; text-align: center; text-decoration: none;">
                <i class="fas fa-home" style="font-size: 2rem; color: var(--color-burgundy); margin-bottom: 15px;"></i>
                <h3 style="color: var(--color-burgundy);">Life in Canada</h3>
                <p style="color: var(--color-dark);">12 Articles</p>
            </a>
            
            <a href="#" class="category-card" data-aos="fade-up" data-aos-delay="100" style="background: white; padding: 20px; border-radius: 10px; text-align: center; text-decoration: none;">
                <i class="fas fa-briefcase" style="font-size: 2rem; color: var(--color-burgundy); margin-bottom: 15px;"></i>
                <h3 style="color: var(--color-burgundy);">Career Tips</h3>
                <p style="color: var(--color-dark);">8 Articles</p>
            </a>
            
            <a href="#" class="category-card" data-aos="fade-up" data-aos-delay="200" style="background: white; padding: 20px; border-radius: 10px; text-align: center; text-decoration: none;">
                <i class="fas fa-graduation-cap" style="font-size: 2rem; color: var(--color-burgundy); margin-bottom: 15px;"></i>
                <h3 style="color: var(--color-burgundy);">Education</h3>
                <p style="color: var(--color-dark);">10 Articles</p>
            </a>
            
            <a href="#" class="category-card" data-aos="fade-up" data-aos-delay="300" style="background: white; padding: 20px; border-radius: 10px; text-align: center; text-decoration: none;">
                <i class="fas fa-star" style="font-size: 2rem; color: var(--color-burgundy); margin-bottom: 15px;"></i>
                <h3 style="color: var(--color-burgundy);">Success Stories</h3>
                <p style="color: var(--color-dark);">15 Articles</p>
            </a>
        </div>
    </div>
</section>

<!-- Recent Posts Section -->
<section class="section recent-posts">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Recent Posts</h2>
        <div class="posts-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px;">
            <!-- Recent Post 1 -->
            <article class="post-card" data-aos="fade-up" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="post-image" style="height: 200px; background-image: url('../images/blog/recent1.jpg'); background-size: cover; background-position: center;"></div>
                <div class="post-content" style="padding: 20px;">
                    <div class="post-meta" style="color: var(--color-burgundy); margin-bottom: 10px;">March 1, 2024</div>
                    <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Winter in Canada: Survival Guide</h3>
                    <p style="margin-bottom: 20px;">Essential tips for newcomers experiencing their first Canadian winter.</p>
                    <a href="#" class="btn btn-secondary">Read More</a>
                </div>
            </article>
            
            <!-- Recent Post 2 -->
            <article class="post-card" data-aos="fade-up" data-aos-delay="100" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="post-image" style="height: 200px; background-image: url('../images/blog/recent2.jpg'); background-size: cover; background-position: center;"></div>
                <div class="post-content" style="padding: 20px;">
                    <div class="post-meta" style="color: var(--color-burgundy); margin-bottom: 10px;">February 25, 2024</div>
                    <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Canadian Healthcare System</h3>
                    <p style="margin-bottom: 20px;">Understanding healthcare coverage and access as a newcomer to Canada.</p>
                    <a href="#" class="btn btn-secondary">Read More</a>
                </div>
            </article>
            
            <!-- Recent Post 3 -->
            <article class="post-card" data-aos="fade-up" data-aos-delay="200" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="post-image" style="height: 200px; background-image: url('../images/blog/recent3.jpg'); background-size: cover; background-position: center;"></div>
                <div class="post-content" style="padding: 20px;">
                    <div class="post-meta" style="color: var(--color-burgundy); margin-bottom: 10px;">February 20, 2024</div>
                    <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Banking in Canada</h3>
                    <p style="margin-bottom: 20px;">Guide to opening bank accounts and managing finances as a newcomer.</p>
                    <a href="#" class="btn btn-secondary">Read More</a>
                </div>
            </article>
        </div>
        
        <!-- Load More Button -->
        <div class="load-more" style="text-align: center; margin-top: 40px;" data-aos="fade-up">
            <button class="btn btn-primary">Load More Posts</button>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="section newsletter-section" style="background-color: var(--color-cream);">
    <div class="container">
        <div class="newsletter-container" data-aos="fade-up" style="max-width: 600px; margin: 0 auto; text-align: center;">
            <h2 class="section-title">Subscribe to Our Blog</h2>
            <p class="section-subtitle">Get the latest articles and immigration tips delivered straight to your inbox.</p>
            
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
