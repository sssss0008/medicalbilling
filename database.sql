CREATE DATABASE doctor_appointments;

USE doctor_appointments;

CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    doctor VARCHAR(100) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL
);
