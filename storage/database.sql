-- B-Hive Brand Consultancy Database Schema
-- MySQL / MariaDB

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- --------------------------------------------------------
-- Table: users
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `role` ENUM('admin', 'editor', 'user') NOT NULL DEFAULT 'user',
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `uk_users_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: contacts
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `contacts` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `subject` VARCHAR(255) NOT NULL,
    `message` TEXT NOT NULL,
    `is_read` TINYINT(1) NOT NULL DEFAULT 0,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: services
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `services` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `icon` VARCHAR(100) DEFAULT NULL,
    `image` VARCHAR(255) DEFAULT NULL,
    `sort_order` INT NOT NULL DEFAULT 0,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: team
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `team` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `designation` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) DEFAULT NULL,
    `facebook` VARCHAR(255) DEFAULT NULL,
    `twitter` VARCHAR(255) DEFAULT NULL,
    `instagram` VARCHAR(255) DEFAULT NULL,
    `sort_order` INT NOT NULL DEFAULT 0,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: testimonials
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `testimonials` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `profession` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) DEFAULT NULL,
    `quote` TEXT NOT NULL,
    `sort_order` INT NOT NULL DEFAULT 0,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: projects
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `projects` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `category` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `image` VARCHAR(255) DEFAULT NULL,
    `sort_order` INT NOT NULL DEFAULT 0,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: newsletters
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `newsletters` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(255) NOT NULL,
    `is_active` TINYINT(1) NOT NULL DEFAULT 1,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `uk_newsletters_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Seed Data: B-Hive Services
-- --------------------------------------------------------
INSERT INTO `services` (`title`, `description`, `icon`, `image`, `sort_order`) VALUES
('Brand Strategy & Positioning', 'We craft comprehensive brand strategies that define your unique market position. From brand identity to messaging frameworks, we ensure your brand stands out and resonates with your target audience.', 'fa-chess', 'img/service-1.jpg', 1),
('Social Media Management', 'Our social media experts create and manage engaging content across all platforms. We build communities, drive engagement, and deliver measurable growth for your digital presence.', 'fa-share-alt', 'img/service-2.jpg', 2),
('PR & Media Visibility', 'We secure strategic media placements and PR coverage that amplifies your brand message. Our media relations team connects you with the right outlets and audiences.', 'fa-newspaper', 'img/service-3.jpg', 3),
('Talent & Influencer Consultancy', 'We connect brands with the right talent and influencers. From selection to campaign management, we ensure authentic partnerships that drive results and build trust.', 'fa-user-tie', 'img/service-4.jpg', 4),
('Campaigns & Brand Collaborations', 'We design and execute powerful marketing campaigns and brand collaborations that create buzz, drive conversions, and strengthen brand equity across markets.', 'fa-bullhorn', 'img/service-5.jpg', 5),
('Event & Experience Publicity', 'We create memorable event experiences and ensure maximum publicity and media coverage. From launch events to corporate functions, we make every occasion count.', 'fa-calendar-star', 'img/service-6.jpg', 6);

-- --------------------------------------------------------
-- Seed Data: B-Hive Team
-- --------------------------------------------------------
INSERT INTO `team` (`name`, `designation`, `image`, `facebook`, `twitter`, `instagram`, `sort_order`) VALUES
('Betty Kithinji', 'Brand Consultant & Founder', 'img/team-1.jpg', '#', '#', '#', 1),
('Team Member', 'Strategy Lead', 'img/team-2.jpg', '#', '#', '#', 2),
('Team Member', 'PR & Communications', 'img/team-3.jpg', '#', '#', '#', 3),
('Team Member', 'Social Media Manager', 'img/team-2.jpg', '#', '#', '#', 4),
('Team Member', 'Campaign Coordinator', 'img/team-3.jpg', '#', '#', '#', 5),
('Team Member', 'Event & Experience Lead', 'img/team-1.jpg', '#', '#', '#', 6);

-- --------------------------------------------------------
-- Seed Data: Testimonials
-- --------------------------------------------------------
INSERT INTO `testimonials` (`name`, `profession`, `image`, `quote`, `sort_order`) VALUES
('Grace Mwangi', 'CEO, TechStart Kenya', 'img/testimonial-1.jpg', 'B-Hive transformed our brand completely. Their strategic approach to branding helped us stand out in the competitive tech space. Highly recommend their services!', 1),
('James Ochieng', 'Founder, AfroStyle Magazine', 'img/testimonial-2.jpg', 'The PR and media visibility B-Hive created for our magazine launch was extraordinary. They know exactly how to position brands for maximum impact.', 2),
('Sarah Njeri', 'Marketing Director, GreenLife Co.', 'img/testimonial-3.jpg', 'Our social media presence grew by 300% within three months of working with B-Hive. Their team is creative, responsive, and results-driven.', 3),
('Peter Kamau', 'Events Manager, Kenya Expos', 'img/testimonial-4.jpg', 'B-Hive handled our event publicity flawlessly. The media coverage and brand visibility we received exceeded all expectations. True professionals!', 4);

-- --------------------------------------------------------
-- Seed Data: Projects
-- --------------------------------------------------------
INSERT INTO `projects` (`title`, `category`, `description`, `image`, `sort_order`) VALUES
('TechStart Kenya Rebrand', 'Brand Strategy', 'Complete brand identity redesign for a leading tech startup', 'img/project-1.jpg', 1),
('Consumer Goods PR Campaign', 'PR Campaign', 'Media visibility campaign for a consumer goods brand', 'img/project-2.jpg', 2),
('AfroStyle Social Growth', 'Social Media', 'Social media growth strategy for a fashion brand', 'img/project-3.jpg', 3),
('Kenya Expos Event Launch', 'Event Publicity', 'Event management and publicity for corporate launch', 'img/project-4.jpg', 4),
('Wellness Brand Collaboration', 'Brand Collaboration', 'Cross-brand campaign for lifestyle and wellness sector', 'img/project-5.jpg', 5),
('Entertainment Talent Positioning', 'Talent Positioning', 'Influencer and talent positioning for entertainment brand', 'img/project-6.jpg', 6);

SET FOREIGN_KEY_CHECKS = 1;
