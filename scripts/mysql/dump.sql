USE
phpmvc;

CREATE TABLE `medical_users`
(
    `id`         int PRIMARY KEY AUTO_INCREMENT,
    `email`      varchar(255) UNIQUE,
    `password`   varchar(255),
    `status`     boolean,
    `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
    `token`      varchar(700),
    `qr_image`   varchar(500),
    `face_id`    varchar(500),
    `role`       int(2)
);

CREATE TABLE `medical_user_profiles`
(
    `id`         int PRIMARY KEY AUTO_INCREMENT,
    `first_name` varchar(255),
    `last_name`  varchar(255),
    `birthday`   date,
    `gender`     char(7),
    `avatar`     varchar(255),
    `address`    varchar(100),
    `phone`      varchar(12),
    `user_id`    int
);

CREATE TABLE `medical_medical_records`
(
    `id`                int PRIMARY KEY AUTO_INCREMENT,
    `first_name`        varchar(20),
    `last_name`         varchar(30),
    `gender`            char(7),
    `birthday`          date,
    `identity_card`     varchar(20),
    `email`             varchar(255),
    `phone`             char(12),
    `way`               varchar(255),
    `district`          varchar(50),
    `wards`             varchar(50),
    `province`          varchar(50),
    `covid_vaccination` text,
    `created_at`        timestamp,
    `user_id`           int
);

CREATE TABLE `medical_medical_insurances`
(
    `id`                      int PRIMARY KEY AUTO_INCREMENT,
    `health_insurance`        boolean,
    `health_insurance_number` varchar(20),
    `expiration_date`         datetime,
    `created_at`              timestamp,
    `id_medical_records`      int
);

CREATE TABLE `medical_heaths`
(
    `id`                 int PRIMARY KEY AUTO_INCREMENT,
    `summary`            varchar(255),
    `healths`            text,
    `note`               text,
    `date`               datetime,
    `id_medical_records` int
);

CREATE TABLE `medical_blogs`
(
    `id`         int PRIMARY KEY AUTO_INCREMENT,
    `title`      varchar(255),
    `content`    text,
    `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
    `image`      varchar(255),
    `user_id`    int
);

CREATE TABLE `medical_contact_infomation`
(
    `id`         int PRIMARY KEY AUTO_INCREMENT,
    `email`      varchar(255),
    `phone`      varchar(12),
    `message`    text,
    `full_name`  varchar(100),
    `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
    `user_id`    int
);

CREATE TABLE `medical_appointments`
(
    `id`         int PRIMARY KEY AUTO_INCREMENT,
    `subject`    varchar(100),
    `date_start` timestamp DEFAULT CURRENT_TIMESTAMP,
    `date_end`   timestamp DEFAULT CURRENT_TIMESTAMP,
    `time_start` timestamp DEFAULT CURRENT_TIMESTAMP,
    `time_end`   timestamp DEFAULT CURRENT_TIMESTAMP,
    `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP,
    `user_id`    int
);

CREATE TABLE `medical_appointment_attendees`
(
    `id`             int PRIMARY KEY AUTO_INCREMENT,
    `id_appointment` int,
    `user_id`        int,
    `created_at`     timestamp DEFAULT CURRENT_TIMESTAMP,
    `updated_at`     timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `medical_medicines`
(
    `id`               int PRIMARY KEY AUTO_INCREMENT,
    `name`             varchar(100),
    `unit`             varchar(10),
    `description`      text,
    `medicine_type_id` int
);

CREATE TABLE `medical_medicines_types`
(
    `id`          int PRIMARY KEY AUTO_INCREMENT,
    `name`        varchar(255),
    `description` text
);

CREATE TABLE `medical_prescriptions`
(
    `id`         int PRIMARY KEY AUTO_INCREMENT,
    `name`       varchar(255),
    `address`    varchar(255),
    `note`       varchar(255),
    `heaths_id`  int,
    `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
    `user_id`    int
);

CREATE TABLE `medical_prescription_details`
(
    `id`                int PRIMARY KEY AUTO_INCREMENT,
    `prescription_id`   int,
    `medicine_id`       int,
    `medicine_quantity` int,
    `dosage`            varchar(50)
);

ALTER TABLE `medical_user_profiles`
    ADD FOREIGN KEY (`user_id`) REFERENCES `medical_users` (`id`) ON DELETE CASCADE;

ALTER TABLE `medical_appointments`
    ADD FOREIGN KEY (`user_id`) REFERENCES `medical_users` (`id`) ON DELETE CASCADE;

ALTER TABLE `medical_contact_infomation`
    ADD FOREIGN KEY (`user_id`) REFERENCES `medical_users` (`id`) ON DELETE CASCADE;

ALTER TABLE `medical_medical_records`
    ADD FOREIGN KEY (`user_id`) REFERENCES `medical_users` (`id`) ON DELETE CASCADE;

ALTER TABLE `medical_blogs`
    ADD FOREIGN KEY (`user_id`) REFERENCES `medical_users` (`id`) ON DELETE CASCADE;

ALTER TABLE `medical_medical_insurances`
    ADD FOREIGN KEY (`id_medical_records`) REFERENCES `medical_medical_records` (`id`) ON DELETE CASCADE;

ALTER TABLE `medical_appointment_attendees`
    ADD FOREIGN KEY (`id_appointment`) REFERENCES `medical_appointments` (`id`);

ALTER TABLE `medical_appointment_attendees`
    ADD FOREIGN KEY (`user_id`) REFERENCES `medical_users` (`id`) ON DELETE CASCADE;

ALTER TABLE `medical_heaths`
    ADD FOREIGN KEY (`id_medical_records`) REFERENCES `medical_medical_records` (`id`) ON DELETE CASCADE;;

ALTER TABLE `medical_medicines`
    ADD FOREIGN KEY (`medicine_type_id`) REFERENCES `medical_medicines_types` (`id`);

ALTER TABLE `medical_prescriptions`
    ADD FOREIGN KEY (`user_id`) REFERENCES `medical_users` (`id`) ON DELETE CASCADE;

ALTER TABLE `medical_prescriptions`
    ADD FOREIGN KEY (`heaths_id`) REFERENCES `medical_heaths` (`id`) ON DELETE CASCADE;

ALTER TABLE `medical_prescription_details`
    ADD FOREIGN KEY (`medicine_id`) REFERENCES `medical_medicines` (`id`);

ALTER TABLE `medical_prescription_details`
    ADD FOREIGN KEY (`prescription_id`) REFERENCES `medical_prescriptions` (`id`);