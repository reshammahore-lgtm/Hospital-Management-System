CREATE DATABASE IF NOT EXISTS hospital_db;
USE hospital_db;

CREATE TABLE IF NOT EXISTS appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    doctor VARCHAR(100) NOT NULL,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL
);

INSERT INTO appointments (patient_name, phone, doctor, appointment_date, appointment_time)
VALUES ('Demo Patient', '9876543210', 'Dr. Sharma', '2026-10-01', '10:00:00');
