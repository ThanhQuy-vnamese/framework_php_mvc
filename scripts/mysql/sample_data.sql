--
--  `medical_users`
--
INSERT INTO `medical_users` (`id`, `email`, `password`, `status`, `created_at`, `token`, `qr_image`, `face_id`, `role`) VALUES
(1, 'admin@mail.com', '$2y$10$AGZrdUyBKD7QvGULLPdVOui6XikvMkMNvFHEEmJCPLppIuAnnR45e', 1, '2022-04-07 10:08:41', NULL, 'aX3T9ONZPK9b5mJ.png', NULL, 1);

ALTER TABLE `medical_users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;