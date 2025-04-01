<?php
require_once('php/db_config.php');

// Initialize response array
$response = array(
    'status' => 'error',
    'message' => 'An error occurred while processing your request.'
);

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize form data
    $consultation_type = isset($_POST['consultation_type']) ? mysqli_real_escape_string($conn, $_POST['consultation_type']) : '';
    $consultation_date = isset($_POST['consultation_date']) ? mysqli_real_escape_string($conn, $_POST['consultation_date']) : '';
    $consultation_time = isset($_POST['consultation_time']) ? mysqli_real_escape_string($conn, $_POST['consultation_time']) : '';
    $first_name = isset($_POST['first_name']) ? mysqli_real_escape_string($conn, $_POST['first_name']) : '';
    $last_name = isset($_POST['last_name']) ? mysqli_real_escape_string($conn, $_POST['last_name']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $phone = isset($_POST['phone']) ? mysqli_real_escape_string($conn, $_POST['phone']) : '';
    $immigration_status = isset($_POST['immigration_status']) ? mysqli_real_escape_string($conn, $_POST['immigration_status']) : '';
    $service_interest = isset($_POST['service_interest']) ? mysqli_real_escape_string($conn, $_POST['service_interest']) : '';
    $additional_info = isset($_POST['additional_info']) ? mysqli_real_escape_string($conn, $_POST['additional_info']) : '';
    
    // Validate required fields
    if (empty($consultation_type) || empty($consultation_date) || empty($consultation_time) || 
        empty($first_name) || empty($last_name) || empty($email) || empty($phone) || 
        empty($immigration_status) || empty($service_interest)) {
        $response['message'] = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Please enter a valid email address.';
    } else {
        // Format date and time
        $datetime = date('Y-m-d H:i:s', strtotime("$consultation_date $consultation_time"));
        
        // Insert into appointments table
        $sql = "INSERT INTO appointments (
                    consultation_type, appointment_datetime, first_name, last_name, 
                    email, phone, immigration_status, service_interest, additional_info, 
                    status, created_at
                ) VALUES (
                    '$consultation_type', '$datetime', '$first_name', '$last_name',
                    '$email', '$phone', '$immigration_status', '$service_interest', '$additional_info',
                    'pending', NOW()
                )";
        
        if ($conn->query($sql) === TRUE) {
            $appointment_id = $conn->insert_id;
            
            // Send confirmation email to client
            $to = $email;
            $subject = "Consultation Booking Confirmation - CANEXT Immigration";
            
            $message = "Dear $first_name $last_name,\n\n";
            $message .= "Thank you for booking a consultation with CANEXT Immigration. Here are your booking details:\n\n";
            $message .= "Consultation Type: $consultation_type\n";
            $message .= "Date: " . date('F j, Y', strtotime($consultation_date)) . "\n";
            $message .= "Time: " . date('g:i A', strtotime($consultation_time)) . " ET\n\n";
            $message .= "We will contact you shortly to confirm your appointment.\n\n";
            $message .= "Best regards,\nCANEXT Immigration Team";
            
            $headers = "From: appointments@canext.com";
            
            // Uncomment to enable email sending
            // mail($to, $subject, $message, $headers);
            
            // Send notification to admin
            $admin_email = "info@canext.com";
            $admin_subject = "New Consultation Booking";
            $admin_message = "A new consultation has been booked:\n\n";
            $admin_message .= "Consultation Type: $consultation_type\n";
            $admin_message .= "Date: " . date('F j, Y', strtotime($consultation_date)) . "\n";
            $admin_message .= "Time: " . date('g:i A', strtotime($consultation_time)) . " ET\n";
            $admin_message .= "Name: $first_name $last_name\n";
            $admin_message .= "Email: $email\n";
            $admin_message .= "Phone: $phone\n";
            $admin_message .= "Immigration Status: $immigration_status\n";
            $admin_message .= "Service Interest: $service_interest\n";
            $admin_message .= "Additional Info: $additional_info\n";
            
            // Uncomment to enable email sending
            // mail($admin_email, $admin_subject, $admin_message, $headers);
            
            $response['status'] = 'success';
            $response['message'] = 'Your consultation has been booked successfully.';
            $response['appointment_id'] = $appointment_id;
            
            // Redirect to confirmation page
            header("Location: booking_confirmation.php?id=$appointment_id");
            exit;
        } else {
            $response['message'] = 'Database error: ' . $conn->error;
        }
    }
}

// If there was an error, redirect back to the form with error message
if ($response['status'] === 'error') {
    header('Location: consultant_details.php?' . http_build_query($_POST) . '&error=' . urlencode($response['message']));
    exit;
}
?> 