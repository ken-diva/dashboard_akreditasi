CREATE TABLE `faculty` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `faculty_name` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `study_program` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `faculty_id` int NOT NULL,
  `studyprogram_name` varchar(255) NOT NULL,
  `level` int,
  `accreditation_status` boolean DEFAULT true,
  `national_accreditation` varchar(255),
  `national_accrediation_grade` int,
  `date_national_accreditation` datetime,
  `expired_national_accreditation` datetime,
  `international_accreditaton` varchar(255),
  `international_accrediation_grade` int,
  `date_international_accreditation` datetime,
  `expired_international_accreditation` datetime,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `student` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nim` int,
  `name` varchar(255),
  `studyprogram_id` int NOT NULL,
  `year_entry` int,
  `semester_entry` int,
  `status_student` int,
  `year_out` int,
  `semester_out` int,
  `work_date` datetime,
  `month_waiting_work` int,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `work_bond` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name_work_bond` varchar(255),
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `jfa` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name_jfa` varchar(255),
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `history_lecturer_jfa` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `permanent_lecturer_id` int,
  `not_permanent_lecturer_id` int,
  `jfa_id` int NOT NULL,
  `date_jfa` date,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `permanent_lecturer` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `studyprogram_id` int NOT NULL,
  `name` varchar(255),
  `NIP` int,
  `NIDN` int,
  `NIDK` int,
  `work_bond_id` int,
  `jfa_id` int NOT NULL,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `not_permanent_lecturer` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `studyprogram_id` int NOT NULL,
  `name` varchar(255),
  `NIP` int,
  `NIDN` int,
  `NIDK` int,
  `work_bond_id` int,
  `jfa_id` int NOT NULL,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `academic_year` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `year` int,
  `semester` int,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `lecturing_status` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `permanent_lecturer_id` int,
  `not_permanent_lecturer_id` int,
  `status` int,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `competition` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `level` int,
  `type_competition` int,
  `year` int,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `student_competition` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `student_id` int,
  `lecturer_id` int,
  `competition_id` int,
  `ranking` int,
  `link_competition` varchar(255),
  `link_certificate` varchar(255),
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `type_publications` (
  `type_publication_id` int PRIMARY KEY AUTO_INCREMENT,
  `name_type_publication` int,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `publications` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(255),
  `year` int,
  `type_publication_id` int,
  `student_id` int,
  `role_student` int,
  `lecturer_1_id` int,
  `role_lecturer_1` int,
  `coresponden_status_lecturer_1` boolean DEFAULT true,
  `lecturer_2_id` int,
  `role_lecturer_2` int,
  `coresponden_status_lecturer_2` boolean DEFAULT true,
  `lecturer_3_id` int,
  `role_lecturer_3` int,
  `coresponden_status_lecturer_3` boolean DEFAULT true,
  `lecturer_4_id` int,
  `role_lecturer_4` int,
  `coresponden_status_lecturer_4` boolean DEFAULT true,
  `lecturer_5_id` int,
  `role_lecturer_5` int,
  `coresponden_status_lecturer_5` boolean DEFAULT true,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `student_MBKM` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `student_id` int,
  `MBKM_id` int,
  `SKS_MBKM` int,
  `academic_year_id` int,
  `subject_id` int,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `MBKM` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name_MBKM` varchar(255),
  `type_MBKM` int,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `subject_MBKM` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `code_subject` varchar(255),
  `name_subject` varchar(255),
  `SKS` int,
  `study_program_id` int,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `type_HKI` (
  `type_HKI_id` int PRIMARY KEY AUTO_INCREMENT,
  `name_type_HKI` int,
  `duration_year` int,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `HKI` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title_HKI` varchar(255),
  `year_HKI` int,
  `academic_year` int,
  `type_HKI_id` int,
  `nomor_HKI` int,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `student_HKI` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `HKI_id` int,
  `student_id` int,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `lecturer_HKI` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `HKI_id` int,
  `lecturer_id` int,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `roles` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `role_name` varchar(255) UNIQUE NOT NULL,
  `created_at` timestamp DEFAULT (now()),
  `updated_at` timestamp DEFAULT (now())
);

CREATE TABLE `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `faculty_id` int,
  `studyProgram_id` int,
  `role_id` int NOT NULL,
  `username` varchar(255) UNIQUE NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255),
  `created_at` timestamp DEFAULT (now()),
  `updated_at` timestamp DEFAULT (now())
);

CREATE TABLE `login_history` (
  `login_id` int PRIMARY KEY,
  `user_id` int,
  `loginTimestamp` timestamp DEFAULT (now()),
  `logoutTimestamp` timestamp DEFAULT (now())
);

CREATE TABLE `access_rights` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `role_id` int NOT NULL,
  `resource_name` varchar(255) NOT NULL,
  `can_create` boolean DEFAULT true,
  `can_read` boolean DEFAULT true,
  `can_update` boolean DEFAULT true,
  `can_delete` boolean DEFAULT true,
  `can_import` boolean DEFAULT true,
  `can_sync` boolean DEFAULT true,
  `created_at` datetime DEFAULT (current_timestamp),
  `updated_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `notifications` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `message` text NOT NULL,
  `is_read` boolean DEFAULT false,
  `created_at` datetime DEFAULT (current_timestamp)
);

CREATE TABLE `scheduling` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `start_date_history_jfa` date,
  `type_sync_history_jfa` int,
  `date_sync_history_jfa` date,
  `start_date_teaching_status` date,
  `type_sync_teaching_status` int,
  `date_sync_teaching_status` date,
  `start_date_student_competition` date,
  `type_sync_student_competition` int,
  `date_sync_student_competition` date,
  `start_date_publication` date,
  `type_sync_publication` int,
  `date_sync_publication` date,
  `start_date_student_mbkm` date,
  `type_sync_student_mbkm` int,
  `date_sync_student_mbkm` date,
  `start_date_subject_mbkm` date,
  `type_sync_subject_mbkm` int,
  `date_sync_subject_mbkm` date,
  `start_date_hki` date,
  `type_sync_hki` int,
  `date_sync_hki` date,
  `start_date_student_hki` date,
  `type_date_student_hki` int,
  `date_sync_student_hki` date,
  `start_date_lecturer_hki` date,
  `type_date_lecturer_hki` int,
  `date_sync_lecturer_hki` date
);

ALTER TABLE `study_program` ADD FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`);

ALTER TABLE `student` ADD FOREIGN KEY (`studyprogram_id`) REFERENCES `study_program` (`id`);

ALTER TABLE `history_lecturer_jfa` ADD FOREIGN KEY (`permanent_lecturer_id`) REFERENCES `permanent_lecturer` (`id`);

ALTER TABLE `history_lecturer_jfa` ADD FOREIGN KEY (`not_permanent_lecturer_id`) REFERENCES `not_permanent_lecturer` (`id`);

ALTER TABLE `history_lecturer_jfa` ADD FOREIGN KEY (`jfa_id`) REFERENCES `jfa` (`id`);

ALTER TABLE `permanent_lecturer` ADD FOREIGN KEY (`studyprogram_id`) REFERENCES `study_program` (`id`);

ALTER TABLE `permanent_lecturer` ADD FOREIGN KEY (`work_bond_id`) REFERENCES `work_bond` (`id`);

ALTER TABLE `permanent_lecturer` ADD FOREIGN KEY (`jfa_id`) REFERENCES `jfa` (`id`);

ALTER TABLE `not_permanent_lecturer` ADD FOREIGN KEY (`studyprogram_id`) REFERENCES `study_program` (`id`);

ALTER TABLE `not_permanent_lecturer` ADD FOREIGN KEY (`work_bond_id`) REFERENCES `work_bond` (`id`);

ALTER TABLE `not_permanent_lecturer` ADD FOREIGN KEY (`jfa_id`) REFERENCES `jfa` (`id`);

ALTER TABLE `lecturing_status` ADD FOREIGN KEY (`permanent_lecturer_id`) REFERENCES `permanent_lecturer` (`id`);

ALTER TABLE `lecturing_status` ADD FOREIGN KEY (`not_permanent_lecturer_id`) REFERENCES `not_permanent_lecturer` (`id`);

ALTER TABLE `student_competition` ADD FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

ALTER TABLE `student_competition` ADD FOREIGN KEY (`lecturer_id`) REFERENCES `permanent_lecturer` (`id`);

ALTER TABLE `student_competition` ADD FOREIGN KEY (`competition_id`) REFERENCES `competition` (`id`);

ALTER TABLE `publications` ADD FOREIGN KEY (`type_publication_id`) REFERENCES `type_publications` (`type_publication_id`);

ALTER TABLE `publications` ADD FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

ALTER TABLE `publications` ADD FOREIGN KEY (`lecturer_1_id`) REFERENCES `permanent_lecturer` (`id`);

ALTER TABLE `publications` ADD FOREIGN KEY (`lecturer_2_id`) REFERENCES `permanent_lecturer` (`id`);

ALTER TABLE `publications` ADD FOREIGN KEY (`lecturer_3_id`) REFERENCES `permanent_lecturer` (`id`);

ALTER TABLE `publications` ADD FOREIGN KEY (`lecturer_4_id`) REFERENCES `permanent_lecturer` (`id`);

ALTER TABLE `publications` ADD FOREIGN KEY (`lecturer_5_id`) REFERENCES `permanent_lecturer` (`id`);

ALTER TABLE `student_MBKM` ADD FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

ALTER TABLE `student_MBKM` ADD FOREIGN KEY (`MBKM_id`) REFERENCES `MBKM` (`id`);

ALTER TABLE `student_MBKM` ADD FOREIGN KEY (`academic_year_id`) REFERENCES `academic_year` (`id`);

ALTER TABLE `student_MBKM` ADD FOREIGN KEY (`subject_id`) REFERENCES `subject_MBKM` (`id`);

ALTER TABLE `subject_MBKM` ADD FOREIGN KEY (`study_program_id`) REFERENCES `study_program` (`id`);

ALTER TABLE `HKI` ADD FOREIGN KEY (`academic_year`) REFERENCES `academic_year` (`id`);

ALTER TABLE `HKI` ADD FOREIGN KEY (`type_HKI_id`) REFERENCES `type_publications` (`type_publication_id`);

ALTER TABLE `student_HKI` ADD FOREIGN KEY (`HKI_id`) REFERENCES `HKI` (`id`);

ALTER TABLE `student_HKI` ADD FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

ALTER TABLE `lecturer_HKI` ADD FOREIGN KEY (`HKI_id`) REFERENCES `HKI` (`id`);

ALTER TABLE `lecturer_HKI` ADD FOREIGN KEY (`lecturer_id`) REFERENCES `permanent_lecturer` (`id`);

ALTER TABLE `users` ADD FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`);

ALTER TABLE `users` ADD FOREIGN KEY (`studyProgram_id`) REFERENCES `study_program` (`id`);

ALTER TABLE `users` ADD FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

ALTER TABLE `login_history` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `access_rights` ADD FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

ALTER TABLE `notifications` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
