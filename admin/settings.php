<?php include('includes/header.php'); ?>

<div class="admin-content-header">
    <h1>System Settings</h1>
    <p>Configure application settings and preferences</p>
</div>

<div class="settings-container">
    <div class="settings-sidebar">
        <ul class="settings-nav">
            <li class="active" data-target="general-settings">General Settings</li>
            <li data-target="booking-settings">Booking Settings</li>
            <li data-target="notification-settings">Notification Settings</li>
            <li data-target="user-settings">User Management</li>
            <li data-target="payment-settings">Payment Settings</li>
        </ul>
    </div>
    
    <div class="settings-content">
        <!-- General Settings -->
        <div class="settings-section active" id="general-settings">
            <h2>General Settings</h2>
            
            <form class="settings-form">
                <div class="form-group">
                    <label for="site-name">Site Name</label>
                    <input type="text" id="site-name" name="site_name" value="CANEXT Immigration Consultancy">
                </div>
                
                <div class="form-group">
                    <label for="site-email">Contact Email</label>
                    <input type="email" id="site-email" name="site_email" value="info@canext.com">
                </div>
                
                <div class="form-group">
                    <label for="site-phone">Contact Phone</label>
                    <input type="tel" id="site-phone" name="site_phone" value="+1 (647) 226-7436">
                </div>
                
                <div class="form-group">
                    <label for="site-address">Office Address</label>
                    <textarea id="site-address" name="site_address" rows="3">2233 Argentina Rd, Mississauga ON L5N 2X7, Canada</textarea>
                </div>
                
                <div class="form-group">
                    <label for="business-hours">Business Hours</label>
                    <input type="text" id="business-hours" name="business_hours" value="Mon-Fri: 9am-5pm">
                </div>
                
                <div class="form-group">
                    <label for="timezone">Timezone</label>
                    <select id="timezone" name="timezone">
                        <option value="America/New_York">Eastern Time (ET)</option>
                        <option value="America/Chicago">Central Time (CT)</option>
                        <option value="America/Denver">Mountain Time (MT)</option>
                        <option value="America/Los_Angeles">Pacific Time (PT)</option>
                        <option value="America/Toronto" selected>Eastern Time - Toronto</option>
                    </select>
                </div>
                
                <button type="submit" class="btn-primary">Save Changes</button>
            </form>
        </div>
        
        <!-- Booking Settings -->
        <div class="settings-section" id="booking-settings">
            <h2>Booking Settings</h2>
            
            <form class="settings-form">
                <div class="form-group">
                    <label for="advance-booking-days">Maximum Advance Booking Days</label>
                    <input type="number" id="advance-booking-days" name="advance_booking_days" value="60">
                    <span class="form-hint">How many days in advance can customers book consultations</span>
                </div>
                
                <div class="form-group">
                    <label for="booking-interval">Booking Time Interval (minutes)</label>
                    <select id="booking-interval" name="booking_interval">
                        <option value="15">15 minutes</option>
                        <option value="30" selected>30 minutes</option>
                        <option value="45">45 minutes</option>
                        <option value="60">60 minutes</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="buffer-time">Buffer Time Between Bookings (minutes)</label>
                    <select id="buffer-time" name="buffer_time">
                        <option value="0">No buffer</option>
                        <option value="5">5 minutes</option>
                        <option value="10">10 minutes</option>
                        <option value="15" selected>15 minutes</option>
                        <option value="30">30 minutes</option>
                    </select>
                </div>
                
                <div class="form-group checkbox-group">
                    <label>Available Consultation Types</label>
                    <div class="checkbox-item">
                        <input type="checkbox" id="video-consultation" name="consultation_types[]" value="video" checked>
                        <label for="video-consultation">Video Consultation</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="phone-consultation" name="consultation_types[]" value="phone" checked>
                        <label for="phone-consultation">Phone Consultation</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="in-person-consultation" name="consultation_types[]" value="in-person" checked>
                        <label for="in-person-consultation">In-Person Consultation</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Business Hours</label>
                    <div class="business-hours-container">
                        <div class="business-hours-row">
                            <span class="day-label">Monday</span>
                            <label><input type="checkbox" checked> Open</label>
                            <div class="hours-inputs">
                                <input type="time" value="09:00"> to <input type="time" value="17:00">
                            </div>
                        </div>
                        <div class="business-hours-row">
                            <span class="day-label">Tuesday</span>
                            <label><input type="checkbox" checked> Open</label>
                            <div class="hours-inputs">
                                <input type="time" value="09:00"> to <input type="time" value="17:00">
                            </div>
                        </div>
                        <div class="business-hours-row">
                            <span class="day-label">Wednesday</span>
                            <label><input type="checkbox" checked> Open</label>
                            <div class="hours-inputs">
                                <input type="time" value="09:00"> to <input type="time" value="17:00">
                            </div>
                        </div>
                        <div class="business-hours-row">
                            <span class="day-label">Thursday</span>
                            <label><input type="checkbox" checked> Open</label>
                            <div class="hours-inputs">
                                <input type="time" value="09:00"> to <input type="time" value="17:00">
                            </div>
                        </div>
                        <div class="business-hours-row">
                            <span class="day-label">Friday</span>
                            <label><input type="checkbox" checked> Open</label>
                            <div class="hours-inputs">
                                <input type="time" value="09:00"> to <input type="time" value="17:00">
                            </div>
                        </div>
                        <div class="business-hours-row">
                            <span class="day-label">Saturday</span>
                            <label><input type="checkbox"> Open</label>
                            <div class="hours-inputs">
                                <input type="time" value="10:00" disabled> to <input type="time" value="15:00" disabled>
                            </div>
                        </div>
                        <div class="business-hours-row">
                            <span class="day-label">Sunday</span>
                            <label><input type="checkbox"> Open</label>
                            <div class="hours-inputs">
                                <input type="time" value="10:00" disabled> to <input type="time" value="15:00" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn-primary">Save Changes</button>
            </form>
        </div>
        
        <!-- Notification Settings -->
        <div class="settings-section" id="notification-settings">
            <!-- Notification settings content -->
            <h2>Notification Settings</h2>
            
            <form class="settings-form">
                <div class="form-group checkbox-group">
                    <label>Email Notifications</label>
                    <div class="checkbox-item">
                        <input type="checkbox" id="booking-confirmation" name="email_notifications[]" value="booking_confirmation" checked>
                        <label for="booking-confirmation">Booking Confirmation</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="booking-reminder" name="email_notifications[]" value="booking_reminder" checked>
                        <label for="booking-reminder">Booking Reminder</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="booking-cancellation" name="email_notifications[]" value="booking_cancellation" checked>
                        <label for="booking-cancellation">Booking Cancellation</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="admin-new-booking" name="email_notifications[]" value="admin_new_booking" checked>
                        <label for="admin-new-booking">Admin: New Booking Alert</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="reminder-time">Booking Reminder Time</label>
                    <select id="reminder-time" name="reminder_time">
                        <option value="1">1 hour before</option>
                        <option value="2">2 hours before</option>
                        <option value="24" selected>24 hours before</option>
                        <option value="48">48 hours before</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="admin-email">Admin Notification Email</label>
                    <input type="email" id="admin-email" name="admin_email" value="admin@canext.com">
                </div>
                
                <div class="form-group">
                    <label for="email-footer">Email Footer Text</label>
                    <textarea id="email-footer" name="email_footer" rows="3">CANEXT Immigration Consultancy
2233 Argentina Rd, Mississauga ON L5N 2X7, Canada
+1 (647) 226-7436 | info@canext.com</textarea>
                </div>
                
                <button type="submit" class="btn-primary">Save Changes</button>
            </form>
        </div>
        
        <!-- User Management -->
        <div class="settings-section" id="user-settings">
            <h2>User Management</h2>
            
            <div class="admin-controls">
                <button class="btn-primary" id="add-user-btn">
                    <i class="fas fa-plus"></i> Add New User
                </button>
            </div>
            
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Last Login</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>admin</td>
                        <td>Admin User</td>
                        <td>admin@canext.com</td>
                        <td>Administrator</td>
                        <td><span class="status-badge status-active">Active</span></td>
                        <td>May 18, 2023 10:15 AM</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>consultant1</td>
                        <td>Jane Doe</td>
                        <td>jane.doe@canext.com</td>
                        <td>Consultant</td>
                        <td><span class="status-badge status-active">Active</span></td>
                        <td>May 17, 2023 3:45 PM</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>staff1</td>
                        <td>Robert Johnson</td>
                        <td>robert.j@canext.com</td>
                        <td>Staff</td>
                        <td><span class="status-badge status-inactive">Inactive</span></td>
                        <td>May 10, 2023 11:30 AM</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Payment Settings -->
        <div class="settings-section" id="payment-settings">
            <h2>Payment Settings</h2>
            
            <form class="settings-form">
                <div class="form-group">
                    <label for="currency">Currency</label>
                    <select id="currency" name="currency">
                        <option value="USD">US Dollar ($)</option>
                        <option value="CAD" selected>Canadian Dollar (C$)</option>
                        <option value="EUR">Euro (€)</option>
                        <option value="GBP">British Pound (£)</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Payment Methods</label>
                    <div class="checkbox-item">
                        <input type="checkbox" id="payment-stripe" name="payment_methods[]" value="stripe" checked>
                        <label for="payment-stripe">Stripe</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="payment-paypal" name="payment_methods[]" value="paypal" checked>
                        <label for="payment-paypal">PayPal</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="payment-manual" name="payment_methods[]" value="manual" checked>
                        <label for="payment-manual">Manual Payment</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="stripe-api-key">Stripe API Key</label>
                    <input type="text" id="stripe-api-key" name="stripe_api_key" value="pk_test_TYooMQauvdEDq54NiTphI7jx">
                </div>
                
                <div class="form-group">
                    <label for="stripe-secret-key">Stripe Secret Key</label>
                    <input type="password" id="stripe-secret-key" name="stripe_secret_key" value="••••••••••••••••••••••••">
                </div>
                
                <div class="form-group">
                    <label for="paypal-client-id">PayPal Client ID</label>
                    <input type="text" id="paypal-client-id" name="paypal_client_id" value="ATutHe2MD9-kq_VhJc6DCpJRIIpMqUFLBF66ZAyhUJLrUFNHHs">
                </div>
                
                <div class="form-group">
                    <label for="video-consultation-price">Video Consultation Price</label>
                    <div class="price-input">
                        <span class="currency-symbol">C$</span>
                        <input type="number" id="video-consultation-price" name="video_consultation_price" value="150">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="phone-consultation-price">Phone Consultation Price</label>
                    <div class="price-input">
                        <span class="currency-symbol">C$</span>
                        <input type="number" id="phone-consultation-price" name="phone_consultation_price" value="120">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="in-person-consultation-price">In-Person Consultation Price</label>
                    <div class="price-input">
                        <span class="currency-symbol">C$</span>
                        <input type="number" id="in-person-consultation-price" name="in_person_consultation_price" value="200">
                    </div>
                </div>
                
                <button type="submit" class="btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Settings tab navigation
        const settingsNavItems = document.querySelectorAll('.settings-nav li');
        const settingsSections = document.querySelectorAll('.settings-section');
        
        settingsNavItems.forEach(item => {
            item.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                
                // Remove active class from all items and sections
                settingsNavItems.forEach(navItem => navItem.classList.remove('active'));
                settingsSections.forEach(section => section.classList.remove('active'));
                
                // Add active class to clicked item and corresponding section
                this.classList.add('active');
                document.getElementById(targetId).classList.add('active');
            });
        });
        
        // Business hours checkbox toggle
        const dayCheckboxes = document.querySelectorAll('.business-hours-row input[type="checkbox"]');
        dayCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const timeInputs = this.closest('.business-hours-row').querySelectorAll('input[type="time"]');
                timeInputs.forEach(input => {
                    input.disabled = !this.checked;
                });
            });
        });
    });
</script>

<?php include('includes/footer.php'); ?> 