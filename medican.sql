CREATE TABLE `medican_users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(255) UNIQUE,
  `password` varchar(255),
  `status` boolean,
  `created_at` timestamp,
  `token` varchar(700),
  `qr_image` varchar(500),
  `face_id` varchar(500),
  `role` int(2)
);

CREATE TABLE `medican_user_profiles` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `first_name` varchar(255),
  `last_name` varchar(255),
  `birthday` date,
  `gender` char(5),
  `avatar` varchar(255),
  `address` varchar(100),
  `phone` varchar(12),
  `user_id` int
);

CREATE TABLE `medican_medican_records` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `first_name` varchar(20),
  `last_name` varchar(30),
  `email` varchar(255),
  `address` varchar(255),
  `phone` char(12),
  `way` varchar(255),
  `district` varchar(50),
  `commune` varchar(50),
  `province` varchar(50),
  `health_insurance` boolean,
  `covid_vaccination` text,
  `created_at` timestamp,
  `user_id` int
);

CREATE TABLE `medican_heaths` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `summary` varchar(255),
  `healths` text,
  `note` text,
  `date` datetime,
  `id_medican_records` int
);

CREATE TABLE `medican_blogs` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(255),
  `content` text,
  `created_at` timestamp,
  `image` varchar(255),
  `user_id` int
);

CREATE TABLE `medican_contact_infomation` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(255),
  `phone` varchar(12),
  `message` text,
  `full_name` varchar(100),
  `created_at` timestamp,
  `user_id` int
);

CREATE TABLE `medican_appointments` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `subject` varchar(100),
  `date_start` timestamp,
  `date_end` timestamp,
  `time_start` timestamp,
  `time_end` timestamp,
  `createt_at` timestamp,
  `updated_at` timestamp,
  `user_id` int
);

CREATE TABLE `medican_appointment_attendees` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_appointment` int,
  `user_id` int,
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `medican_medicines` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100),
  `unit` varchar(10),
  `description` text,
  `medicine_type_id` int
);

CREATE TABLE `medican_medicines_types` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `description` text
);

CREATE TABLE `medican_prescriptions` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `address` varchar(255),
  `note` varchar(255),
  `heaths_id` int,
  `created_at` timestamp,
  `user_id` int
);

CREATE TABLE `medican_prescription_details` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `prescription_id` int,
  `medicine_id` int,
  `medicine_quantity` int,
  `dosage` varchar(50)
);

ALTER TABLE `medican_user_profiles` ADD FOREIGN KEY (`user_id`) REFERENCES `medican_users` (`id`);

ALTER TABLE `medican_appointments` ADD FOREIGN KEY (`user_id`) REFERENCES `medican_users` (`id`);

ALTER TABLE `medican_contact_infomation` ADD FOREIGN KEY (`user_id`) REFERENCES `medican_users` (`id`);

ALTER TABLE `medican_medican_records` ADD FOREIGN KEY (`user_id`) REFERENCES `medican_users` (`id`);

ALTER TABLE `medican_blogs` ADD FOREIGN KEY (`user_id`) REFERENCES `medican_users` (`id`);

ALTER TABLE `medican_appointment_attendees` ADD FOREIGN KEY (`id_appointment`) REFERENCES `medican_appointments` (`id`);

ALTER TABLE `medican_appointment_attendees` ADD FOREIGN KEY (`user_id`) REFERENCES `medican_users` (`id`);

ALTER TABLE `medican_heaths` ADD FOREIGN KEY (`id_medican_records`) REFERENCES `medican_medican_records` (`id`);

ALTER TABLE `medican_medicines` ADD FOREIGN KEY (`medicine_type_id`) REFERENCES `medican_medicines_types` (`id`);

ALTER TABLE `medican_prescriptions` ADD FOREIGN KEY (`user_id`) REFERENCES `medican_users` (`id`);

ALTER TABLE `medican_prescriptions` ADD FOREIGN KEY (`heaths_id`) REFERENCES `medican_heaths` (`id`);

ALTER TABLE `medican_prescription_details` ADD FOREIGN KEY (`medicine_id`) REFERENCES `medican_medicines` (`id`);

ALTER TABLE `medican_prescription_details` ADD FOREIGN KEY (`prescription_id`) REFERENCES `medican_prescriptions` (`id`);
