--
--  `medical_users`
--
INSERT INTO `medical_users` (`id`, `email`, `password`, `status`, `created_at`, `token`, `qr_image`, `face_id`, `role`) VALUES
(1, 'admin@mail.com', '$2y$10$iWwK565N9N0KPrEijrClVelh8ZAGFdR8BN2cAt3AZWcwTQcCxBVuO', 1, '2022-04-07 10:16:18', NULL, '4MOaNuCAm6KmXvZ.png', NULL, 2),
(2, 'doctor1@mail.com', '$2y$10$3VWXVhKAV/KLTw.JW0NkhehTro4ILrX4bbnqjo53PpBa4uFVin24C', 1, '2022-04-07 10:17:03', NULL, 'NYvoKUj5yOhhsg0.png', NULL, 2),
(3, 'doctor2@mail.com', '$2y$10$xjsU2yjsWVhPM.GHqCgSDuR7UThvOEtm9InjuqIOZfjmsK.a86tLm', 1, '2022-04-07 10:17:24', NULL, 'ajkkpMOhkWuEMUe.png', NULL, 2);

ALTER TABLE `medical_users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;