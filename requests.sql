CREATE TABLE `peoples` (
    `is-banned` VARCHAR(50) CHARACTER SET utf8mb4,
    `photo-src` VARCHAR(50) CHARACTER SET utf8mb4,
    `photo-alt` VARCHAR(50) CHARACTER SET utf8mb4,
    `people-name` VARCHAR(50) CHARACTER SET utf8mb4,
    `position` VARCHAR(50) CHARACTER SET utf8mb4,
    `link-tw` VARCHAR(50) CHARACTER SET utf8mb4,
    `link-tw-text` VARCHAR(50) CHARACTER SET utf8mb4,
    `link-boot` VARCHAR(50) CHARACTER SET utf8mb4
) default charset utf8mb4;

INSERT INTO `peoples` (`is-banned`, `photo-src`, `photo-alt`, `people-name`, `position`, `link-tw`, `link-tw-text`, `link-boot`)
    VALUES ('true', 'img/demo/authors/roberto.png', 'Roberto R', 'Roberto R. (Rails Developer)', 'Partner &amp; Contributor', 'https://twitter.com/@sildur', '@sildur', 'https://wrapbootstrap.com/user/sildur')