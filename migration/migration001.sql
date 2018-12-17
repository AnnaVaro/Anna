CREATE TABLE `gallery` ( 
    `id` INT(11) NOT NULL AUTO_INCREMENT , 
    `server_address` VARCHAR(255) NULL , 
    `size` VARCHAR(255) NULL , 
    `name` VARCHAR(255) NULL , 
    `likes` INT(11) NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;