<?php
include('includes/header.php');
include('includes/db_connection.php');

// Get admin user details
$admin_id = $_SESSION['admin_id'] ?? 1; // Default to 1 for demo
$sql = "SELECT * FROM admin_users WHERE id = $admin_id";
$result = executeQuery($sql);

if ($result && $result->num_rows > 0) {
    $admin = $result->fetch_assoc();
} else {
    // Fallback for demo
    $admin = [
        'id' => 1,
        'username' => 'admin',
        'first_name' => 'Admin',
        'last_name' => 'User',
        'email' => 'admin@canext.com',
        'phone' => '+1 (647) 123-4567',
        'role' => 'admin',
        'status' => 'active',
        'last_login' => date('Y-m-d H:i:s', strtotime('-1 day')),
    ];
}

// Handle profile update
$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_profile'])) {
    // In a real application, validate and sanitize all inputs
    $first_name = sanitize($_POST['first_name']);
    $last_name = sanitize($_POST['last_name']);
    $email = sanitize($_POST['email']);
    $phone = sanitize($_POST['phone']);
    
    // In a real app, update the user details in the database
    // $sql = "UPDATE admin_users SET first_name = '$first_name', last_name = '$last_name', email = '$email', phone = '$phone' WHERE id = $admin_id";
    // executeQuery($sql);
    
    $success_message = "Profile updated successfully!";
}

// Handle password change
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    
    // In a real app, validate the current password against the database
    // and ensure the new password meets security requirements
    
    if ($new_password !== $confirm_password) {
        $error_message = "New passwords do not match!";
    } else {
        // Update password in database (in a real app)
        // $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        // $sql = "UPDATE admin_users SET password = '$hashed_password' WHERE id = $admin_id";
        // executeQuery($sql);
        
        $success_message = "Password changed successfully!";
    }
}
?>

<div class="admin-content-header">
    <h1>My Profile</h1>
    <p>View and edit your profile information</p>
</div>

<?php if ($success_message): ?>
    <div class="alert alert-success"><?php echo $success_message; ?></div>
<?php endif; ?>

<?php if ($error_message): ?>
    <div class="alert alert-danger"><?php echo $error_message; ?></div>
<?php endif; ?>

<div class="profile-container">
    <div class="profile-sidebar">
        <div class="profile-image-container">
            <div class="profile-image">
                <i class="fas fa-user-circle"></i>
                <!-- In a real app, display the user's profile picture -->
            </div>
            <h3><?php echo $admin['first_name'] . ' ' . $admin['last_name']; ?></h3>
            <p class="profile-role"><?php echo ucfirst($admin['role']); ?></p>
            
            <button class="btn-outlined" id="upload-photo-btn">
                <i class="fas fa-camera"></i> Change Photo
            </button>
        </div>
        
        <div class="profile-stats">
            <div class="stat-item">
                <span class="stat-value">42</span>
                <span class="stat-label">Consultations</span>
            </div>
            <div class="stat-item">
                <span class="stat-value">128</span>
                <span class="stat-label">Total Hours</span>
            </div>
            <div class="stat-item">
                <span class="stat-value">4.8</span>
                <span class="stat-label">Rating</span>
            </div>
        </div>
        
        <div class="profile-menu">
            <a href="#personal-info" class="profile-menu-item active" data-tab="personal-info">
                <i class="fas fa-user"></i> Personal Information
            </a>
            <a href="#security" class="profile-menu-item" data-tab="security">
                <i class="fas fa-lock"></i> Security
            </a>
            <a href="#availability" class="profile-menu-item" data-tab="availability">
                <i class="fas fa-calendar-alt"></i> Availability
            </a>
            <a href="#notifications" class="profile-menu-item" data-tab="notifications">
                <i class="fas fa-bell"></i> Notifications
            </a>
        </div>
    </div>
    
    <div class="profile-content">
        <!-- Personal Information Tab -->
        <div class="profile-tab active" id="personal-info">
            <h2>Personal Information</h2>
            <form method="POST" action="" class="profile-form">
                <input type="hidden" name="update_profile" value="1">
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first_name" value="<?php echo $admin['first_name']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last_name" value="<?php echo $admin['last_name']; ?>" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="<?php echo $admin['email']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" value="<?php echo $admin['phone'] ?? ''; ?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" value="<?php echo $admin['username']; ?>" disabled>
                    <span class="form-hint">Username cannot be changed</span>
                </div>
                
                <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" id="role" value="<?php echo ucfirst($admin['role']); ?>" disabled>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
        
        <!-- Security Tab -->
        <div class="profile-tab" id="security">
            <h2>Security</h2>
            <form method="POST" action="" class="profile-form">
                <input type="hidden" name="change_password" value="1">
                
                <div class="form-group">
                    <label for="current-password">Current Password</label>
                    <input type="password" id="current-password" name="current_password" required>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="new-password">New Password</label>
                        <input type="password" id="new-password" name="new_password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm New Password</label>
                        <input type="password" id="confirm-password" name="confirm_password" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="password-requirements">
                        <h4>Password Requirements:</h4>
                        <ul>
                            <li>At least 8 characters long</li>
                            <li>Contains at least one uppercase letter</li>
                            <li>Contains at least one lowercase letter</li>
                            <li>Contains at least one number</li>
                            <li>Contains at least one special character</li>
                        </ul>
                    </div>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn-primary">Change Password</button>
                </div>
            </form>
        </div>
        
        <!-- Availability Tab -->
        <div class="profile-tab" id="availability">
            <h2>Availability Schedule</h2>
            <form method="POST" action="" class="profile-form">
                <div class="availability-section">
                    <h3>Weekly Schedule</h3>
                    <div class="weekly-schedule">
                        <div class="day-schedule">
                            <div class="day-header">
                                <div class="day-checkbox">
                                    <input type="checkbox" id="monday-available" name="availability[monday][available]" checked>
                                    <label for="monday-available">Monday</label>
                                </div>
                            </div>
                            <div class="time-slots">
                                <div class="time-slot">
                                    <label>From</label>
                                    <input type="time" name="availability[monday][start]" value="09:00">
                                    <label>To</label>
                                    <input type="time" name="availability[monday][end]" value="17:00">
                                </div>
                            </div>
                        </div>
                        
                        <div class="day-schedule">
                            <div class="day-header">
                                <div class="day-checkbox">
                                    <input type="checkbox" id="tuesday-available" name="availability[tuesday][available]" checked>
                                    <label for="tuesday-available">Tuesday</label>
                                </div>
                            </div>
                            <div class="time-slots">
                                <div class="time-slot">
                                    <label>From</label>
                                    <input type="time" name="availability[tuesday][start]" value="09:00">
                                    <label>To</label>
                                    <input type="time" name="availability[tuesday][end]" value="17:00">
                                </div>
                            </div>
                        </div>
                        
                        <div class="day-schedule">
                            <div class="day-header">
                                <div class="day-checkbox">
                                    <input type="checkbox" id="wednesday-available" name="availability[wednesday][available]" checked>
                                    <label for="wednesday-available">Wednesday</label>
                                </div>
                            </div>
                            <div class="time-slots">
                                <div class="time-slot">
                                    <label>From</label>
                                    <input type="time" name="availability[wednesday][start]" value="09:00">
                                    <label>To</label>
                                    <input type="time" name="availability[wednesday][end]" value="17:00">
                                </div>
                            </div>
                        </div>
                        
                        <div class="day-schedule">
                            <div class="day-header">
                                <div class="day-checkbox">
                                    <input type="checkbox" id="thursday-available" name="availability[thursday][available]" checked>
                                    <label for="thursday-available">Thursday</label>
                                </div>
                            </div>
                            <div class="time-slots">
                                <div class="time-slot">
                                    <label>From</label>
                                    <input type="time" name="availability[thursday][start]" value="09:00">
                                    <label>To</label>
                                    <input type="time" name="availability[thursday][end]" value="17:00">
                                </div>
                            </div>
                        </div>
                        
                        <div class="day-schedule">
                            <div class="day-header">
                                <div class="day-checkbox">
                                    <input type="checkbox" id="friday-available" name="availability[friday][available]" checked>
                                    <label for="friday-available">Friday</label>
                                </div>
                            </div>
                            <div class="time-slots">
                                <div class="time-slot">
                                    <label>From</label>
                                    <input type="time" name="availability[friday][start]" value="09:00">
                                    <label>To</label>
                                    <input type="time" name="availability[friday][end]" value="17:00">
                                </div>
                            </div>
                        </div>
                        
                        <div class="day-schedule">
                            <div class="day-header">
                                <div class="day-checkbox">
                                    <input type="checkbox" id="saturday-available" name="availability[saturday][available]">
                                    <label for="saturday-available">Saturday</label>
                                </div>
                            </div>
                            <div class="time-slots">
                                <div class="time-slot">
                                    <label>From</label>
                                    <input type="time" name="availability[saturday][start]" value="10:00" disabled>
                                    <label>To</label>
                                    <input type="time" name="availability[saturday][end]" value="15:00" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="day-schedule">
                            <div class="day-header">
                                <div class="day-checkbox">
                                    <input type="checkbox" id="sunday-available" name="availability[sunday][available]">
                                    <label for="sunday-available">Sunday</label>
                                </div>
                            </div>
                            <div class="time-slots">
                                <div class="time-slot">
                                    <label>From</label>
                                    <input type="time" name="availability[sunday][start]" value="10:00" disabled>
                                    <label>To</label>
                                    <input type="time" name="availability[sunday][end]" value="15:00" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="availability-section">
                    <h3>Specific Dates (Time Off)</h3>
                    <div class="time-off-container">
                        <div class="time-off-item">
                            <div class="date-range">
                                <div class="form-group">
                                    <label>From</label>
                                    <input type="date" name="time_off[0][start]" value="2023-05-20">
                                </div>
                                <div class="form-group">
                                    <label>To</label>
                                    <input type="date" name="time_off[0][end]" value="2023-05-25">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Reason</label>
                                <input type="text" name="time_off[0][reason]" value="Vacation">
                            </div>
                            <button type="button" class="btn-icon remove-time-off"><i class="fas fa-times"></i></button>
                        </div>
                        <button type="button" class="btn-secondary add-time-off">
                            <i class="fas fa-plus"></i> Add Time Off
                        </button>
                    </div>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn-primary">Save Availability</button>
                </div>
            </form>
        </div>
        
        <!-- Notifications Tab -->
        <div class="profile-tab" id="notifications">
            <h2>Notification Preferences</h2>
            <form method="POST" action="" class="notifications-form">
                <div class="notification-section">
                    <h3>Email Notifications</h3>
                    <div class="notification-options">
                        <div class="notification-option">
                            <div class="option-checkbox">
                                <input type="checkbox" id="new-booking" name="notifications[new_booking]" checked>
                                <label for="new-booking">New booking notifications</label>
                            </div>
                            <p class="option-description">Receive an email when a new consultation is booked</p>
                        </div>
                        
                        <div class="notification-option">
                            <div class="option-checkbox">
                                <input type="checkbox" id="booking-reminder" name="notifications[booking_reminder]" checked>
                                <label for="booking-reminder">Booking reminders</label>
                            </div>
                            <p class="option-description">Receive a reminder email before your scheduled consultations</p>
                        </div>
                        
                        <div class="notification-option">
                            <div class="option-checkbox">
                                <input type="checkbox" id="booking-cancelled" name="notifications[booking_cancelled]" checked>
                                <label for="booking-cancelled">Booking cancellations</label>
                            </div>
                            <p class="option-description">Receive an email when a booking is cancelled</p>
                        </div>
                        
                        <div class="notification-option">
                            <div class="option-checkbox">
                                <input type="checkbox" id="customer-messages" name="notifications[customer_messages]" checked>
                                <label for="customer-messages">Customer messages</label>
                            </div>
                            <p class="option-description">Receive an email when a customer sends a message</p>
                        </div>
                    </div>
                </div>
                
                <div class="notification-section">
                    <h3>System Notifications</h3>
                    <div class="notification-options">
                        <div class="notification-option">
                            <div class="option-checkbox">
                                <input type="checkbox" id="admin-notifications" name="notifications[admin_notifications]" checked>
                                <label for="admin-notifications">Admin notifications</label>
                            </div>
                            <p class="option-description">Receive notifications about system updates and announcements</p>
                        </div>
                        
                        <div class="notification-option">
                            <div class="option-checkbox">
                                <input type="checkbox" id="payment-notifications" name="notifications[payment_notifications]" checked>
                                <label for="payment-notifications">Payment notifications</label>
                            </div>
                            <p class="option-description">Receive notifications about payments and refunds</p>
                        </div>
                    </div>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn-primary">Save Preferences</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Profile tab navigation
        const menuItems = document.querySelectorAll('.profile-menu-item');
        const profileTabs = document.querySelectorAll('.profile-tab');
        
        menuItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('data-tab');
                
                // Remove active class from all menu items and tabs
                menuItems.forEach(menuItem => menuItem.classList.remove('active'));
                profileTabs.forEach(tab => tab.classList.remove('active'));
                
                // Add active class to clicked menu item and corresponding tab
                this.classList.add('active');
                document.getElementById(targetId).classList.add('active');
            });
        });
        
        // Toggle time inputs based on day availability
        const dayCheckboxes = document.querySelectorAll('.day-checkbox input[type="checkbox"]');
        dayCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const timeInputs = this.closest('.day-schedule').querySelectorAll('input[type="time"]');
                timeInputs.forEach(input => {
                    input.disabled = !this.checked;
                });
            });
        });
        
        // Add new time off period
        const addTimeOffBtn = document.querySelector('.add-time-off');
        const timeOffContainer = document.querySelector('.time-off-container');
        
        if (addTimeOffBtn) {
            addTimeOffBtn.addEventListener('click', function() {
                const index = document.querySelectorAll('.time-off-item').length;
                const newTimeOff = document.createElement('div');
                newTimeOff.className = 'time-off-item';
                newTimeOff.innerHTML = `
                    <div class="date-range">
                        <div class="form-group">
                            <label>From</label>
                            <input type="date" name="time_off[${index}][start]">
                        </div>
                        <div class="form-group">
                            <label>To</label>
                            <input type="date" name="time_off[${index}][end]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Reason</label>
                        <input type="text" name="time_off[${index}][reason]">
                    </div>
                    <button type="button" class="btn-icon remove-time-off"><i class="fas fa-times"></i></button>
                `;
                
                timeOffContainer.insertBefore(newTimeOff, addTimeOffBtn);
                
                // Add event listener to new remove button
                const removeBtn = newTimeOff.querySelector('.remove-time-off');
                removeBtn.addEventListener('click', function() {
                    this.closest('.time-off-item').remove();
                });
            });
        }
        
        // Remove time off period
        const removeTimeOffBtns = document.querySelectorAll('.remove-time-off');
        removeTimeOffBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                this.closest('.time-off-item').remove();
            });
        });
        
        // Upload photo functionality
        const uploadPhotoBtn = document.getElementById('upload-photo-btn');
        if (uploadPhotoBtn) {
            uploadPhotoBtn.addEventListener('click', function() {
                // In a real application, you would trigger a file input and handle the upload
                alert('In a real app, this would open a file dialog to upload a new profile picture.');
            });
        }
    });
</script>

<?php include('includes/footer.php'); ?> 