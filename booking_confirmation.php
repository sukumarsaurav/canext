<?php
$page_title = "Booking Confirmation | CANEXT Immigration";
include('includes/header.php');

// Get appointment ID from URL
$appointment_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch appointment details from database
$sql = "SELECT * FROM appointments WHERE id = $appointment_id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $appointment = $result->fetch_assoc();
} else {
    header('Location: consultant.php');
    exit;
}
?>

<!-- Page Header -->
<section class="page-header" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/consultation-header.jpg'); background-size: cover; background-position: center; padding: 100px 0; color: var(--color-light); text-align: center;">
    <div class="container">
        <h1 data-aos="fade-up">Booking Confirmation</h1>
        <p data-aos="fade-up" data-aos-delay="100" style="max-width: 700px; margin: 20px auto 0;">Thank you for booking a consultation with CANEXT Immigration</p>
    </div>
</section>

<!-- Confirmation Content -->
<section class="section confirmation-section" style="padding: 60px 0;">
    <div class="container">
        <!-- Progress Steps -->
        <div class="booking-progress" style="display: flex; justify-content: center; align-items: center; margin-bottom: 50px;">
            <div class="progress-step completed" style="display: flex; align-items: center;">
                <div class="step-number" style="width: 40px; height: 40px; background-color: var(--color-burgundy); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600;">✓</div>
                <span class="step-text" style="margin-left: 10px; color: var(--color-burgundy); font-weight: 500;">Select Service</span>
            </div>
            <div style="width: 100px; height: 2px; background-color: var(--color-burgundy); margin: 0 15px;"></div>
            <div class="progress-step completed" style="display: flex; align-items: center;">
                <div class="step-number" style="width: 40px; height: 40px; background-color: var(--color-burgundy); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600;">✓</div>
                <span class="step-text" style="margin-left: 10px; color: var(--color-burgundy); font-weight: 500;">Your Details</span>
            </div>
            <div style="width: 100px; height: 2px; background-color: var(--color-burgundy); margin: 0 15px;"></div>
            <div class="progress-step active" style="display: flex; align-items: center;">
                <div class="step-number" style="width: 40px; height: 40px; background-color: var(--color-burgundy); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600;">✓</div>
                <span class="step-text" style="margin-left: 10px; color: var(--color-burgundy); font-weight: 500;">Confirmation</span>
            </div>
        </div>

        <!-- Success Message -->
        <div class="success-message" data-aos="fade-up" style="text-align: center; margin-bottom: 40px;">
            <div style="width: 80px; height: 80px; margin: 0 auto 20px; background-color: var(--color-cream); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-check" style="font-size: 40px; color: var(--color-burgundy);"></i>
            </div>
            <h2 style="color: var(--color-burgundy); margin-bottom: 15px;">Booking Confirmed!</h2>
            <p style="color: #666; max-width: 600px; margin: 0 auto;">Your consultation has been successfully booked. We will send you a confirmation email with all the details.</p>
        </div>

        <!-- Booking Details -->
        <div class="booking-details" data-aos="fade-up" style="max-width: 800px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
            <h3 style="color: var(--color-burgundy); margin-bottom: 20px;">Booking Details</h3>
            
            <div style="display: grid; grid-template-columns: auto 1fr; gap: 15px; margin-bottom: 30px;">
                <strong>Booking Reference:</strong>
                <span>#<?php echo str_pad($appointment_id, 6, '0', STR_PAD_LEFT); ?></span>
                
                <strong>Consultation Type:</strong>
                <span><?php echo htmlspecialchars($appointment['consultation_type']); ?></span>
                
                <strong>Date:</strong>
                <span><?php echo date('F j, Y', strtotime($appointment['appointment_datetime'])); ?></span>
                
                <strong>Time:</strong>
                <span><?php echo date('g:i A', strtotime($appointment['appointment_datetime'])); ?> ET</span>
                
                <strong>Name:</strong>
                <span><?php echo htmlspecialchars($appointment['first_name'] . ' ' . $appointment['last_name']); ?></span>
                
                <strong>Email:</strong>
                <span><?php echo htmlspecialchars($appointment['email']); ?></span>
            </div>

            <!-- Next Steps -->
            <div class="next-steps" style="background: var(--color-cream); padding: 20px; border-radius: 5px;">
                <h4 style="color: var(--color-burgundy); margin-bottom: 15px;">Next Steps</h4>
                <ol style="margin: 0; padding-left: 20px;">
                    <li style="margin-bottom: 10px;">Check your email for a confirmation message with detailed information.</li>
                    <li style="margin-bottom: 10px;">Prepare any relevant documents or information about your immigration situation.</li>
                    <li style="margin-bottom: 10px;">We will contact you if any additional information is needed before the consultation.</li>
                    <li>Join the consultation at the scheduled time using the provided details.</li>
                </ol>
            </div>
        </div>

        <!-- Additional Actions -->
        <div class="additional-actions" data-aos="fade-up" style="text-align: center; margin-top: 40px;">
            <a href="index.php" class="btn btn-primary" style="margin: 0 10px;">Return to Homepage</a>
            <a href="resources.php" class="btn btn-secondary" style="margin: 0 10px;">Browse Resources</a>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?> 