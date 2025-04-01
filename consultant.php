<?php
$page_title = "Book a Consultation | CANEXT Immigration";
include('includes/header.php');
?>

<!-- Page Header -->
<section class="page-header" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/consultation-header.jpg'); background-size: cover; background-position: center; padding: 100px 0; color: var(--color-light); text-align: center;">
    <div class="container">
        <h1 data-aos="fade-up">Book a Consultation</h1>
        <p data-aos="fade-up" data-aos-delay="100" style="max-width: 700px; margin: 20px auto 0;">Schedule a personalized consultation with one of our licensed immigration consultants</p>
    </div>
</section>

<!-- Booking Steps -->
<section class="section booking-section" style="padding: 60px 0;">
    <div class="container">
        <!-- Progress Steps -->
        <div class="booking-progress" style="display: flex; justify-content: center; align-items: center; margin-bottom: 50px;">
            <div class="progress-step active" style="display: flex; align-items: center;">
                <div class="step-number" style="width: 40px; height: 40px; background-color: var(--color-burgundy); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600;">1</div>
                <span class="step-text" style="margin-left: 10px; color: var(--color-burgundy); font-weight: 500;">Select Service</span>
            </div>
            <div style="width: 100px; height: 2px; background-color: #e0e0e0; margin: 0 15px;"></div>
            <div class="progress-step" style="display: flex; align-items: center;">
                <div class="step-number" style="width: 40px; height: 40px; background-color: #e0e0e0; color: #666; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600;">2</div>
                <span class="step-text" style="margin-left: 10px; color: #666;">Your Details</span>
            </div>
            <div style="width: 100px; height: 2px; background-color: #e0e0e0; margin: 0 15px;"></div>
            <div class="progress-step" style="display: flex; align-items: center;">
                <div class="step-number" style="width: 40px; height: 40px; background-color: #e0e0e0; color: #666; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600;">3</div>
                <span class="step-text" style="margin-left: 10px; color: #666;">Confirmation</span>
            </div>
        </div>

        <h2 class="section-title" style="text-align: center; margin-bottom: 40px;">Select Consultation Type and Time</h2>

        <!-- Booking Form -->
        <form id="consultationForm" action="process_booking.php" method="POST">
            <input type="hidden" id="selectedConsultationType" name="consultation_type" value="">
            <input type="hidden" id="currentStep" name="current_step" value="1">

            <!-- Consultation Options -->
            <div class="consultation-options" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 40px;">
                <!-- Video Consultation -->
                <div class="consultation-card" style="background: white; border: 2px solid transparent; border-radius: 10px; padding: 25px; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <div style="width: 40px; height: 40px; background-color: var(--color-cream); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <i class="fas fa-video" style="color: var(--color-burgundy);"></i>
                        </div>
                        <div>
                            <h3 style="margin: 0; color: var(--color-dark);">Video Consultation</h3>
                            <span style="color: var(--color-burgundy); font-weight: 600;">$150</span>
                        </div>
                    </div>
                    <p style="margin: 0 0 15px 0; color: #666;">Meet with a consultant via video call</p>
                    <div style="display: flex; align-items: center;">
                        <i class="far fa-clock" style="color: var(--color-burgundy); margin-right: 8px;"></i>
                        <span>45 minutes</span>
                    </div>
                </div>

                <!-- Phone Consultation -->
                <div class="consultation-card" style="background: white; border: 2px solid transparent; border-radius: 10px; padding: 25px; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <div style="width: 40px; height: 40px; background-color: var(--color-cream); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <i class="fas fa-phone-alt" style="color: var(--color-burgundy);"></i>
                        </div>
                        <div>
                            <h3 style="margin: 0; color: var(--color-dark);">Phone Consultation</h3>
                            <span style="color: var(--color-burgundy); font-weight: 600;">$120</span>
                        </div>
                    </div>
                    <p style="margin: 0 0 15px 0; color: #666;">Speak with a consultant over the phone</p>
                    <div style="display: flex; align-items: center;">
                        <i class="far fa-clock" style="color: var(--color-burgundy); margin-right: 8px;"></i>
                        <span>45 minutes</span>
                    </div>
                </div>

                <!-- In-Person Consultation -->
                <div class="consultation-card" style="background: white; border: 2px solid transparent; border-radius: 10px; padding: 25px; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <div style="width: 40px; height: 40px; background-color: var(--color-cream); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <i class="fas fa-user" style="color: var(--color-burgundy);"></i>
                        </div>
                        <div>
                            <h3 style="margin: 0; color: var(--color-dark);">In-Person Consultation</h3>
                            <span style="color: var(--color-burgundy); font-weight: 600;">$200</span>
                        </div>
                    </div>
                    <p style="margin: 0 0 15px 0; color: #666;">Meet with a consultant at our office</p>
                    <div style="display: flex; align-items: center;">
                        <i class="far fa-clock" style="color: var(--color-burgundy); margin-right: 8px;"></i>
                        <span>60 minutes</span>
                    </div>
                </div>
            </div>

            <!-- Date and Time Selection -->
            <div class="datetime-selection" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; max-width: 800px; margin: 0 auto;">
                <!-- Date Selection -->
                <div class="date-select">
                    <label style="display: block; margin-bottom: 10px; color: var(--color-dark); font-weight: 500;">Select Date</label>
                    <input type="date" id="consultationDate" name="consultation_date" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-family: inherit;" required>
                    <p style="margin-top: 8px; color: #666; font-size: 0.9em;">Consultations available Monday to Friday</p>
                </div>

                <!-- Time Selection -->
                <div class="time-select">
                    <label style="display: block; margin-bottom: 10px; color: var(--color-dark); font-weight: 500;">Select Time</label>
                    <select id="consultationTime" name="consultation_time" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-family: inherit;" required>
                        <option value="">Select a time slot</option>
                        <option value="09:00">9:00 AM</option>
                        <option value="10:00">10:00 AM</option>
                        <option value="11:00">11:00 AM</option>
                        <option value="13:00">1:00 PM</option>
                        <option value="14:00">2:00 PM</option>
                        <option value="15:00">3:00 PM</option>
                        <option value="16:00">4:00 PM</option>
                    </select>
                    <p style="margin-top: 8px; color: #666; font-size: 0.9em;">All times are in Eastern Time (ET)</p>
                </div>
            </div>

            <!-- Error Message -->
            <div id="errorMessage" style="display: none; color: #dc3545; text-align: center; margin: 20px auto 0; max-width: 800px; padding: 10px; border-radius: 5px; background-color: #ffe6e6;"></div>

            <!-- Navigation Buttons -->
            <div class="booking-navigation" style="display: flex; justify-content: flex-end; margin-top: 40px; max-width: 800px; margin-left: auto; margin-right: auto;">
                <button type="button" id="continueBtn" class="btn btn-primary" style="min-width: 150px;">Continue</button>
            </div>
        </form>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const consultationCards = document.querySelectorAll('.consultation-card');
    const consultationForm = document.getElementById('consultationForm');
    const selectedConsultationType = document.getElementById('selectedConsultationType');
    const consultationDate = document.getElementById('consultationDate');
    const consultationTime = document.getElementById('consultationTime');
    const continueBtn = document.getElementById('continueBtn');
    const errorMessage = document.getElementById('errorMessage');

    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    consultationDate.min = today;

    // Handle consultation card selection
    consultationCards.forEach(card => {
        card.addEventListener('click', function() {
            // Remove active state from all cards
            consultationCards.forEach(c => {
                c.style.borderColor = 'transparent';
                c.style.backgroundColor = 'white';
            });
            
            // Add active state to selected card
            this.style.borderColor = 'var(--color-burgundy)';
            this.style.backgroundColor = 'var(--color-cream)';

            // Store selected consultation type
            const consultationType = this.querySelector('h3').textContent;
            selectedConsultationType.value = consultationType;
        });
    });

    // Handle form submission
    continueBtn.addEventListener('click', function() {
        // Validate all required fields
        if (!selectedConsultationType.value) {
            showError('Please select a consultation type');
            return;
        }

        if (!consultationDate.value) {
            showError('Please select a date');
            return;
        }

        if (!consultationTime.value) {
            showError('Please select a time');
            return;
        }

        // Validate selected date is not a weekend
        const selectedDate = new Date(consultationDate.value);
        if (selectedDate.getDay() === 0 || selectedDate.getDay() === 6) {
            showError('Please select a weekday (Monday to Friday)');
            return;
        }

        // If all validations pass, proceed to next step
        window.location.href = 'consultant_details.php?' + new URLSearchParams({
            type: selectedConsultationType.value,
            date: consultationDate.value,
            time: consultationTime.value
        }).toString();
    });

    function showError(message) {
        errorMessage.textContent = message;
        errorMessage.style.display = 'block';
        
        // Hide error message after 3 seconds
        setTimeout(() => {
            errorMessage.style.display = 'none';
        }, 3000);
    }
});
</script>

<?php include('includes/footer.php'); ?>

