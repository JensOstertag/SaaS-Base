# User table
CREATE TABLE IF NOT EXISTS `User` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `emailVerified` TINYINT(1) NOT NULL DEFAULT 0,
    `permissionLevel` INT NOT NULL,
    `oneTimePassword` VARCHAR(255) NULL,
    `oneTimePasswordExpiration` DATETIME(3) NULL,
    `created` DATETIME(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
    `updated` DATETIME(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
    PRIMARY KEY (`id`),
    UNIQUE KEY (`username`),
    UNIQUE KEY (`email`),
    UNIQUE KEY (`oneTimePassword`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `saas\Plan` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `billingCycle` INT NOT NULL,
    `pricePerUser` DECIMAL(10, 2) NULL,
    `basePrice` DECIMAL(10, 2) NULL,
    `userLimit` INT NULL,
    `bookable` TINYINT NOT NULL,
    `created` DATETIME(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
    `updated` DATETIME(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `saas\License` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `plan` INT NOT NULL,
    `activation` DATETIME(3) NOT NULL,
    `cancellation` DATETIME(3) NOT NULL,
    `lastRenewal` DATETIME(3) NULL,
    `cancelOnNextRenewal` TINYINT NOT NULL DEFAULT 0,
    `created` DATETIME(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
    `updated` DATETIME(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`plan`) REFERENCES `saas\Plan`(`id`) ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `saas\UserInLicense` (
    `producer` INT NOT NULL,
    `consumer` INT NOT NULL,
    `joined` DATETIME(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
    `left` DATETIME(3) NULL,
    `leaveOnNextRenewal` TINYINT NOT NULL DEFAULT 0,
    PRIMARY KEY (`producer`, `consumer`),
    UNIQUE KEY (`producer`, `consumer`),
    FOREIGN KEY (`producer`) REFERENCES `User`(`id`) ON DELETE RESTRICT,
    FOREIGN KEY (`consumer`) REFERENCES `saas\License`(`id`) ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `saas\Discount` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `code` VARCHAR(256) NOT NULL,
    `percentage` FLOAT NOT NULL,
    `validFrom` DATETIME(3) NULL,
    `validUntil` DATETIME(3) NULL,
    `durationMonths` INT NULL,
    `maxRedemptions` INT NULL,
    `newCustomers` TINYINT NOT NULL DEFAULT 0,
    `existingCustomers` TINYINT NOT NULL DEFAULT 0,
    `singlePlans` TINYINT NOT NULL DEFAULT 0,
    `groupPlans` TINYINT NOT NULL DEFAULT 0,
    `created` DATETIME(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
    `updated` DATETIME(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
    PRIMARY KEY (`id`),
    UNIQUE KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `saas\DiscountRedemption` (
    `producer` INT NOT NULL,
    `consumer` INT NOT NULL,
    `redemption` DATETIME(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
    PRIMARY KEY (`producer`, `consumer`),
    UNIQUE KEY (`producer`, `consumer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
