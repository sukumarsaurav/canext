<?php
$page_title = "Guides & Tutorials | CANEXT Immigration";
include('../includes/header.php');
?>

<!-- Page Header -->
<section class="page-header" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/resources/guides-header.jpg'); background-size: cover; background-position: center; padding: 100px 0; color: var(--color-light); text-align: center;">
<div style="position: absolute; width: 300px; height: 300px; border-radius: 50%; background-color: rgba(255, 255, 255, 0.1); top: -100px; left: -100px;"></div>
    <div style="position: absolute; width: 200px; height: 200px; border-radius: 50%; background-color: rgba(255, 255, 255, 0.1); bottom: -50px; right: 10%; animation: pulse 4s infinite alternate;"></div>
    <div style="position: absolute; width: 100px; height: 100px; border-radius: 50%; background-color: rgba(255, 255, 255, 0.1); top: 30%; right: 20%; animation: pulse 3s infinite alternate;"></div>
    <div class="container">
        <h1 data-aos="fade-up">Guides & Tutorials</h1>
        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="100">
            <ol class="breadcrumb" style="display: flex; justify-content: center; list-style: none; padding: 0; margin: 20px 0 0 0;">
                <li class="breadcrumb-item"><a href="../index.php" style="color: var(--color-cream);">Home</a></li>
                <li class="breadcrumb-item"><a href="../resources.php" style="color: var(--color-cream);">Resources</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: var(--color-light);">Guides & Tutorials</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Popular Guides Section -->
<section class="section guides-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Popular Immigration Guides</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Step-by-step instructions to help you navigate through various immigration processes.</p>
        
        <div class="guides-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px;">
            <!-- Guide 1 -->
            <div class="guide-card" data-aos="fade-up" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="guide-image" style="height: 200px; background-image: url('../images/resources/guide1.jpg'); background-size: cover; background-position: center;"></div>
                <div class="guide-content" style="padding: 20px;">
                    <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Express Entry Application Guide</h3>
                    <p style="margin-bottom: 20px;">Complete guide to creating and submitting your Express Entry profile.</p>
                    <a href="#" class="btn btn-secondary">View Guide</a>
                </div>
            </div>
            
            <!-- Guide 2 -->
            <div class="guide-card" data-aos="fade-up" data-aos-delay="100" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="guide-image" style="height: 200px; background-image: url('../images/resources/guide2.jpg'); background-size: cover; background-position: center;"></div>
                <div class="guide-content" style="padding: 20px;">
                    <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Study Permit Application</h3>
                    <p style="margin-bottom: 20px;">How to apply for a Canadian study permit successfully.</p>
                    <a href="#" class="btn btn-secondary">View Guide</a>
                </div>
            </div>
            
            <!-- Guide 3 -->
            <div class="guide-card" data-aos="fade-up" data-aos-delay="200" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="guide-image" style="height: 200px; background-image: url('../images/resources/guide3.jpg'); background-size: cover; background-position: center;"></div>
                <div class="guide-content" style="padding: 20px;">
                    <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Family Sponsorship Process</h3>
                    <p style="margin-bottom: 20px;">Guide to sponsoring your family members to Canada.</p>
                    <a href="#" class="btn btn-secondary">View Guide</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Tutorials Section -->
<section class="section tutorials-section" style="background-color: var(--color-cream);">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Video Tutorials</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Watch our detailed video tutorials on various immigration topics.</p>
        
        <div class="tutorials-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px;">
            <!-- Tutorial 1 -->
            <div class="tutorial-card" data-aos="fade-up" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="video-placeholder" style="height: 200px; background: var(--color-burgundy); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-play" style="color: white; font-size: 3rem;"></i>
                </div>
                <div class="tutorial-content" style="padding: 20px;">
                    <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">CRS Score Calculator Tutorial</h3>
                    <p>Learn how to calculate your Comprehensive Ranking System score.</p>
                </div>
            </div>
            
            <!-- Tutorial 2 -->
            <div class="tutorial-card" data-aos="fade-up" data-aos-delay="100" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="video-placeholder" style="height: 200px; background: var(--color-burgundy); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-play" style="color: white; font-size: 3rem;"></i>
                </div>
                <div class="tutorial-content" style="padding: 20px;">
                    <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Document Checklist Review</h3>
                    <p>Detailed walkthrough of required documents for immigration.</p>
                </div>
            </div>
            
            <!-- Tutorial 3 -->
            <div class="tutorial-card" data-aos="fade-up" data-aos-delay="200" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <div class="video-placeholder" style="height: 200px; background: var(--color-burgundy); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-play" style="color: white; font-size: 3rem;"></i>
                </div>
                <div class="tutorial-content" style="padding: 20px;">
                    <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Interview Preparation</h3>
                    <p>Tips and strategies for immigration interviews.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Resources Section -->
<section class="section resources-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Downloadable Resources</h2>
        <div class="resources-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px;">
            <!-- Resource 1 -->
            <div class="resource-card" data-aos="fade-up" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <i class="fas fa-file-pdf" style="font-size: 2rem; color: var(--color-burgundy); margin-bottom: 20px;"></i>
                <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Document Checklist</h3>
                <p style="margin-bottom: 20px;">Comprehensive checklist of required documents for various visa applications.</p>
                <a href="#" class="btn btn-secondary">Download PDF</a>
            </div>
            
            <!-- Resource 2 -->
            <div class="resource-card" data-aos="fade-up" data-aos-delay="100" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <i class="fas fa-file-excel" style="font-size: 2rem; color: var(--color-burgundy); margin-bottom: 20px;"></i>
                <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Cost Calculator</h3>
                <p style="margin-bottom: 20px;">Excel sheet to calculate immigration costs and living expenses.</p>
                <a href="#" class="btn btn-secondary">Download Excel</a>
            </div>
            
            <!-- Resource 3 -->
            <div class="resource-card" data-aos="fade-up" data-aos-delay="200" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <i class="fas fa-file-word" style="font-size: 2rem; color: var(--color-burgundy); margin-bottom: 20px;"></i>
                <h3 style="color: var(--color-burgundy); margin-bottom: 15px;">Letter Templates</h3>
                <p style="margin-bottom: 20px;">Templates for reference letters, statements of purpose, and more.</p>
                <a href="#" class="btn btn-secondary">Download Word</a>
            </div>
        </div>
    </div>
</section>

<?php include('../includes/footer.php'); ?>
