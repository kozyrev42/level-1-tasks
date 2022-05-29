/* ------- 9 ---------- */

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

INSERT INTO
    `peoples` (
        `is-banned`,
        `photo-src`,
        `photo-alt`,
        `people-name`,
        `position`,
        `link-tw`,
        `link-tw-text`,
        `link-boot`
    )
VALUES
    (
        'true',
        'img/demo/authors/roberto.png',
        'Roberto R',
        'Roberto R. (Rails Developer)',
        'Partner &amp; Contributor',
        'https://twitter.com/@sildur',
        '@sildur',
        'https://wrapbootstrap.com/user/sildur'
    );

/* ------- 10 ----------- */

CREATE TABLE `peoples-10` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `first-name` VARCHAR(30) NOT NULL,
    `last-name` VARCHAR(30) NOT NULL,
    `username` VARCHAR(30) NOT NULL,
    PRIMARY KEY (id)
) default charset utf8mb4;

INSERT INTO `peoples-10` (
        `first-name`,
        `last-name`,
        `username`
    )
VALUES
    (
        'Larry the Bird',
        'Bird',
        '@twitter'
    );
/* Mark, Otto, @mdo
Jacob, Thornton, @fat 
Larry,	the Bird,	@twitter	  
Larry the Bird,	Bird,	@twitter */


/* ----------- 11 ------------------------------------ */
CREATE TABLE `list-11` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `task` VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
) default charset utf8mb4;