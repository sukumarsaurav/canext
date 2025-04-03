-- Create Appointments Table
CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    consultation_type VARCHAR(50) NOT NULL,
    appointment_datetime DATETIME NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address TEXT,
    city VARCHAR(50),
    postal_code VARCHAR(20),
    country VARCHAR(50),
    immigration_purpose VARCHAR(100),
    special_requests TEXT,
    status ENUM('pending', 'confirmed', 'completed', 'cancelled', 'no-show') DEFAULT 'pending',
    payment_status ENUM('unpaid', 'paid', 'refunded') DEFAULT 'unpaid',
    payment_amount DECIMAL(10, 2),
    additional_notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create Customers Table
CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20),
    address TEXT,
    city VARCHAR(50),
    postal_code VARCHAR(20),
    country VARCHAR(50),
    date_of_birth DATE,
    citizenship VARCHAR(50),
    passport_number VARCHAR(50),
    immigration_status VARCHAR(50),
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create Admin Users Table
CREATE TABLE admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20),
    profile_image VARCHAR(255),
    role ENUM('admin', 'consultant', 'staff') NOT NULL,
    status ENUM('active', 'inactive') DEFAULT 'active',
    last_login DATETIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create Consultation Notes Table
CREATE TABLE consultation_notes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    appointment_id INT NOT NULL,
    admin_user_id INT NOT NULL,
    notes TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (appointment_id) REFERENCES appointments(id) ON DELETE CASCADE,
    FOREIGN KEY (admin_user_id) REFERENCES admin_users(id) ON DELETE CASCADE
);

-- Create Availability Schedule Table
CREATE TABLE availability_schedule (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_user_id INT NOT NULL,
    day_of_week ENUM('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday') NOT NULL,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL,
    is_available BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (admin_user_id) REFERENCES admin_users(id) ON DELETE CASCADE
);

-- Create Time Off Table
CREATE TABLE time_off (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_user_id INT NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    reason VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (admin_user_id) REFERENCES admin_users(id) ON DELETE CASCADE
);

-- Create System Settings Table
CREATE TABLE system_settings (
    setting_key VARCHAR(50) PRIMARY KEY,
    setting_value TEXT NOT NULL,
    setting_group VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create Payment Records Table
CREATE TABLE payment_records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    appointment_id INT NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    payment_method VARCHAR(50) NOT NULL,
    transaction_id VARCHAR(100),
    status ENUM('pending', 'completed', 'failed', 'refunded') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (appointment_id) REFERENCES appointments(id) ON DELETE CASCADE
);

-- Insert Sample Admin User
INSERT INTO admin_users (username, password, first_name, last_name, email, role)
VALUES ('admin', '$2y$10$qTSsA9kSXR4oMSP3InPKz.XcPArkpkY2VtXqjUm2wdWQGZT2Xd5Xy', 'Admin', 'User', 'admin@canext.com', 'admin');
-- Password is "password123" hashed with bcrypt

-- Insert Sample Appointments
INSERT INTO appointments (consultation_type, appointment_datetime, first_name, last_name, email, phone, country, immigration_purpose, status, payment_status, payment_amount)
VALUES
('Video Consultation', '2023-05-15 10:00:00', 'John', 'Smith', 'john.smith@example.com', '+1 (123) 456-7890', 'USA', 'Express Entry', 'confirmed', 'paid', 150.00),
('In-Person Consultation', '2023-05-14 14:00:00', 'Maria', 'Rodriguez', 'maria.r@example.com', '+1 (234) 567-8901', 'Mexico', 'Study Permit', 'completed', 'paid', 200.00),
('Phone Consultation', '2023-05-14 11:30:00', 'David', 'Chen', 'david.chen@example.com', '+1 (345) 678-9012', 'China', 'Work Permit', 'cancelled', 'refunded', 120.00),
('Video Consultation', '2023-05-13 15:00:00', 'Sarah', 'Johnson', 'sarah.j@example.com', '+1 (456) 789-0123', 'Canada', 'Family Sponsorship', 'completed', 'paid', 150.00),
('In-Person Consultation', '2023-05-13 10:00:00', 'Raj', 'Patel', 'raj.patel@example.com', '+1 (567) 890-1234', 'India', 'Business Immigration', 'confirmed', 'paid', 200.00);

-- Insert Sample Customers
INSERT INTO customers (first_name, last_name, email, phone, country, citizenship)
VALUES
('John', 'Smith', 'john.smith@example.com', '+1 (123) 456-7890', 'USA', 'American'),
('Maria', 'Rodriguez', 'maria.r@example.com', '+1 (234) 567-8901', 'Mexico', 'Mexican'),
('David', 'Chen', 'david.chen@example.com', '+1 (345) 678-9012', 'China', 'Chinese'),
('Sarah', 'Johnson', 'sarah.j@example.com', '+1 (456) 789-0123', 'Canada', 'Canadian'),
('Raj', 'Patel', 'raj.patel@example.com', '+1 (567) 890-1234', 'India', 'Indian');

-- Insert System Settings
INSERT INTO system_settings (setting_key, setting_value, setting_group) VALUES
('site_name', 'CANEXT Immigration Consultancy', 'general'),
('site_email', 'info@canext.com', 'general'),
('site_phone', '+1 (647) 226-7436', 'general'),
('site_address', '2233 Argentina Rd, Mississauga ON L5N 2X7, Canada', 'general'),
('business_hours', 'Mon-Fri: 9am-5pm', 'general'),
('timezone', 'America/Toronto', 'general'),
('advance_booking_days', '60', 'booking'),
('booking_interval', '30', 'booking'),
('buffer_time', '15', 'booking'),
('video_consultation_price', '150', 'payment'),
('phone_consultation_price', '120', 'payment'),
('in_person_consultation_price', '200', 'payment'); 