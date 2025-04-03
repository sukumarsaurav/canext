<?php
$page_title = "FAQ | CANEXT Immigration";
include('../includes/header.php');
include('../admin/includes/db_connection.php');

// Get FAQ categories
$sql = "SELECT * FROM faq_categories ORDER BY display_order, name";
$categories = executeQuery($sql);

// Initialize items array
$items = [];

// Get all FAQ items if we have categories
if ($categories && $categories->num_rows > 0) {
    $sql = "SELECT * FROM faq_items ORDER BY display_order, question";
    $result = executeQuery($sql);
    
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $items[$row['category_id']][] = $row;
        }
    }
}
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
        
        <?php if ($categories && $categories->num_rows > 0): ?>
        <div class="categories-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 40px;">
            <?php 
            $delay = 0;
            while ($category = $categories->fetch_assoc()): 
                $delay += 100;
            ?>
            <a href="#category-<?php echo $category['id']; ?>" class="category-card" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>" style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-decoration: none; text-align: center;">
                <i class="<?php echo $category['icon']; ?>" style="font-size: 2rem; color: var(--color-burgundy); margin-bottom: 15px;"></i>
                <h3 style="color: var(--color-burgundy);"><?php echo $category['name']; ?></h3>
            </a>
            <?php endwhile; ?>
        </div>
        <?php else: ?>
        <p class="text-center">No FAQ categories available. Please check back later.</p>
        <?php endif; ?>
    </div>
</section>

<!-- FAQ Content Section -->
<section class="section faq-content" style="background-color: var(--color-cream);">
    <div class="container">
        <?php 
        if ($categories && $categories->num_rows > 0):
            // Reset the category result pointer
            $categories->data_seek(0);
            
            while ($category = $categories->fetch_assoc()): 
        ?>
        <!-- <?php echo $category['name']; ?> Questions -->
        <div id="category-<?php echo $category['id']; ?>" class="faq-category" data-aos="fade-up">
            <h2 class="section-title"><?php echo $category['name']; ?></h2>
            
            <?php if (isset($items[$category['id']]) && !empty($items[$category['id']])): ?>
            <div class="accordion" style="max-width: 800px; margin: 0 auto;">
                <?php foreach ($items[$category['id']] as $item): ?>
                <div class="accordion-item" style="background: white; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <div class="accordion-header" style="padding: 20px; cursor: pointer;">
                        <h3 style="margin: 0; font-size: 1.1rem;"><?php echo $item['question']; ?></h3>
                    </div>
                    <div class="accordion-content" style="padding: 0 20px 20px;">
                        <?php echo $item['answer']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php else: ?>
            <p class="text-center">No questions available for this category.</p>
            <?php endif; ?>
        </div>
        <?php 
            endwhile;
        endif;
        ?>
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
