    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>CANEXT</h3>
                    <p>We specialize in providing expert immigration consultancy services for Canada, helping you achieve your dreams of studying, working, or settling in Canada.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="<?php echo $base_url; ?>/index.php">Home</a></li>
                        <li><a href="<?php echo $base_url; ?>/about.php">About Us</a></li>
                        <li><a href="<?php echo $base_url; ?>/visas.php">Visa Services</a></li>
                        <li><a href="<?php echo $base_url; ?>/assessment-tools.php">Assessment Tools</a></li>
                        <li><a href="<?php echo $base_url; ?>/resources.php">Resources</a></li>
                        <li><a href="<?php echo $base_url; ?>/contact.php">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>Visa Services</h3>
                    <ul class="footer-links">
                        <li><a href="<?php echo $base_url; ?>/visas.php?type=study">Study Permits</a></li>
                        <li><a href="<?php echo $base_url; ?>/visas.php?type=work">Work Permits</a></li>
                        <li><a href="<?php echo $base_url; ?>/visas.php?type=express-entry">Express Entry</a></li>
                        <li><a href="<?php echo $base_url; ?>/visas.php?type=provincial-nominee">Provincial Nominee</a></li>
                        <li><a href="<?php echo $base_url; ?>/visas.php?type=family">Family Sponsorship</a></li>
                        <li><a href="<?php echo $base_url; ?>/visas.php?type=visitor">Visitor Visas</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>Contact Information</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> 2233 Argentina Rd, Mississauga ON L5N 2X7, Canada</li>
                        <li><i class="fas fa-phone"></i> +1 (647) 226-7436</li>
                        <li><i class="fas fa-envelope"></i> info@canext.com</li>
                        <li><i class="fas fa-clock"></i> Mon-Fri: 9am-5pm</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <span id="current-year"></span> CANEXT Immigration Consultancy. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- Assessment Tools Button -->
    <div class="assessment-tools-wrapper">
        <button id="assessment-tools-button" class="assessment-tools-button">
            <i class="fas fa-calculator"></i>
            <span class="button-text">Assessment Tools</span>
        </button>
        
        <div id="assessment-tools-menu" class="assessment-tools-menu">
            <div class="assessment-tools-menu-header">
                <h3>Assessment Tools</h3>
                <button id="close-assessment-menu" class="close-button">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="assessment-tools-menu-content">
                <a href="<?php echo $base_url; ?>/assessment-calculator/eligibility-calculator.php" class="assessment-menu-item">
                    <i class="fas fa-clipboard-check"></i>
                    <div>
                        <h4>Eligibility Calculator</h4>
                        <p>Check if you qualify for Canadian immigration programs</p>
                    </div>
                </a>
                <a href="<?php echo $base_url; ?>/assessment-calculator/crs-score-calculator.php" class="assessment-menu-item">
                    <i class="fas fa-calculator"></i>
                    <div>
                        <h4>CRS Score Calculator</h4>
                        <p>Calculate your Comprehensive Ranking System score</p>
                    </div>
                </a>
                <a href="<?php echo $base_url; ?>/assessment-calculator/study-permit-checker.php" class="assessment-menu-item">
                    <i class="fas fa-graduation-cap"></i>
                    <div>
                        <h4>Study Permit Checker</h4>
                        <p>Verify your eligibility for a Canadian study permit</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="<?php echo $base_url; ?>/js/main.js"></script>
    <script src="<?php echo $base_url; ?>/js/header.js"></script>
    <script src="<?php echo $base_url; ?>/js/resources.js"></script>
    
    <!-- Assessment Tools Menu Script -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const toolsButton = document.getElementById('assessment-tools-button');
        const toolsMenu = document.getElementById('assessment-tools-menu');
        const closeButton = document.getElementById('close-assessment-menu');
        
        toolsButton.addEventListener('click', function() {
            toolsMenu.classList.add('active');
            document.body.classList.add('menu-open');
        });
        
        closeButton.addEventListener('click', function() {
            toolsMenu.classList.remove('active');
            document.body.classList.remove('menu-open');
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!toolsMenu.contains(event.target) && event.target !== toolsButton && !toolsButton.contains(event.target)) {
                toolsMenu.classList.remove('active');
                document.body.classList.remove('menu-open');
            }
        });
    });
    </script>
    
    <style>
    /* Assessment Tools Button Styles */
    .assessment-tools-wrapper {
        position: fixed;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1000;
    }
    
    .assessment-tools-button {
        background-color: var(--color-burgundy);
        color: var(--color-light);
        border: none;
        padding: 12px 20px;
        border-radius: 8px 0 0 8px;
        display: flex;
        align-items: center;
        gap: 12px;
        cursor: pointer;
        box-shadow: -3px 3px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
        white-space: nowrap;
    }
    
    .assessment-tools-button:hover {
        background-color: #5c1a1a;
    }
    
    .assessment-tools-button i {
        font-size: 18px;
        display: none; /* Hide icon by default on large screens */
    }
    
    .button-text {
        transform: rotate(-90deg);
        transform-origin: center;
        margin: 0;
        font-weight: 500;
        letter-spacing: 0.5px;
        writing-mode: vertical-rl;
        text-orientation: mixed;
        transform: rotate(180deg);
    }
    
    /* Menu Styles */
    .assessment-tools-menu {
        position: fixed;
        top: 0;
        right: -350px; /* Start off-screen */
        width: 350px;
        max-width: 90vw;
        height: 100vh;
        background-color: var(--color-light);
        box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
        z-index: 1001;
        transition: right 0.3s ease;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
    }
    
    .assessment-tools-menu.active {
        right: 0;
    }
    
    body.menu-open::after {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }
    
    .assessment-tools-menu-header {
        padding: 20px;
        background-color: var(--color-burgundy);
        color: var(--color-light);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .assessment-tools-menu-header h3 {
        margin: 0;
        font-size: 1.2rem;
    }
    
    .close-button {
        background: none;
        border: none;
        color: var(--color-light);
        font-size: 20px;
        cursor: pointer;
    }
    
    .assessment-tools-menu-content {
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        flex-grow: 1;
    }
    
    .assessment-menu-item {
        display: flex;
        gap: 15px;
        text-decoration: none;
        color: var(--color-dark);
        padding: 15px;
        border-radius: 8px;
        transition: all 0.2s ease;
    }
    
    .assessment-menu-item:hover {
        background-color: var(--color-cream);
        transform: translateY(-2px);
    }
    
    .assessment-menu-item i {
        font-size: 24px;
        color: var(--color-burgundy);
        margin-top: 5px;
    }
    
    .assessment-menu-item h4 {
        margin: 0 0 5px 0;
        color: var(--color-burgundy);
    }
    
    .assessment-menu-item p {
        margin: 0;
        font-size: 0.9rem;
    }
    
    /* Responsive Styles */
    @media (max-width: 768px) {
        .button-text {
            display: none;
        }
        
        .assessment-tools-button {
            padding: 12px;
        }
        
        .assessment-tools-button i {
            display: block; /* Show icon on mobile screens */
            margin: 0;
        }
    }
    </style>
</body>
</html> 