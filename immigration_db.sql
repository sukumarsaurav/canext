-- Create the database
CREATE DATABASE IF NOT EXISTS immigration_db;
USE immigration_db;

-- Users table for authentication
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone VARCHAR(20),
    role ENUM('admin', 'client') DEFAULT 'client',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Visa types
CREATE TABLE IF NOT EXISTS visa_types (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    requirements TEXT,
    processing_time VARCHAR(100),
    image_path VARCHAR(255)
);

-- Success stories
CREATE TABLE IF NOT EXISTS success_stories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_name VARCHAR(100) NOT NULL,
    visa_type_id INT,
    story_content TEXT,
    image_path VARCHAR(255),
    publish_date DATE,
    FOREIGN KEY (visa_type_id) REFERENCES visa_types(id)
);

-- Appointment bookings
CREATE TABLE IF NOT EXISTS appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL,
    purpose VARCHAR(255) NOT NULL,
    status ENUM('pending', 'confirmed', 'cancelled') DEFAULT 'pending',
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Document uploads
CREATE TABLE IF NOT EXISTS documents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    document_name VARCHAR(255) NOT NULL,
    file_path VARCHAR(255) NOT NULL,
    upload_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    document_type VARCHAR(100),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Blog posts
CREATE TABLE IF NOT EXISTS blog_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    author_id INT,
    featured_image VARCHAR(255),
    publish_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('draft', 'published') DEFAULT 'draft',
    FOREIGN KEY (author_id) REFERENCES users(id)
);

-- FAQ items
CREATE TABLE IF NOT EXISTS faq_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT NOT NULL,
    answer TEXT NOT NULL,
    category VARCHAR(100),
    order_number INT
);

-- Contact messages
CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    message TEXT NOT NULL,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('new', 'read', 'replied') DEFAULT 'new'
);

-- Sample data for visa types
INSERT INTO visa_types (name, description, requirements, processing_time, image_path) VALUES
('Study Permit', 'Visa for international students who want to study at designated learning institutions in Canada.', 'Acceptance letter, proof of financial support, medical exam, police clearance', '8-12 weeks', 'images/visa/study.jpg'),
('Work Permit', 'Allows foreign nationals to work for an employer in Canada for a specified period.', 'Job offer from Canadian employer, LMIA if required, educational credentials, work experience', '4-16 weeks', 'images/visa/work.jpg'),
('Express Entry', 'System used to manage applications for permanent residence for skilled workers.', 'Language proficiency, education assessment, work experience, CRS score above cutoff', '6-8 months', 'images/visa/express-entry.jpg'),
('Family Sponsorship', 'Program allowing Canadian citizens and permanent residents to sponsor eligible relatives.', 'Proof of relationship, financial ability to support, minimum income requirements', '12 months', 'images/visa/family.jpg'),
('Visitor Visa', 'Temporary visa for tourism, visiting family, or business purposes.', 'Proof of ties to home country, financial support, travel itinerary, invitation letter if applicable', '2-4 weeks', 'images/visa/visitor.jpg');

-- Sample FAQ items
INSERT INTO faq_items (question, answer, category, order_number) VALUES
('What is Express Entry?', 'Express Entry is Canada\'s online application management system for skilled workers. It manages applications for permanent residence under three federal economic immigration programs: Federal Skilled Worker Program, Federal Skilled Trades Program, and Canadian Experience Class.', 'Express Entry', 1),
('How is the CRS score calculated?', 'The Comprehensive Ranking System (CRS) score is calculated based on factors such as age, education, language proficiency, work experience, Canadian connections, and other adaptability factors. The maximum score is 1,200 points.', 'Express Entry', 2),
('What documents are required for a study permit?', 'For a study permit, you typically need: an acceptance letter from a designated learning institution in Canada, proof of financial support, a valid passport, and possibly a medical exam and police clearance certificate.', 'Study Permits', 1),
('How long does it take to process a work permit?', 'Processing times for work permits vary depending on the country of application and the type of work permit. Generally, processing can take anywhere from 4 to 16 weeks.', 'Work Permits', 1); 