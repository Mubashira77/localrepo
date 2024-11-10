-- Create the database
CREATE DATABASE IF NOT EXISTS portfolio;

-- Use the portfolio database
USE portfolio;

-- Create the sms table to store contact form submissions
CREATE TABLE IF NOT EXISTS sms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert a sample record (optional for testing)
INSERT INTO sms (name, email, message) 
VALUES ('John Doe', 'john@example.com', 'This is a test message.');
