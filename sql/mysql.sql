CREATE TABLE `equipment_owner` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `owner` VARCHAR (10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
)
  COLLATE='utf8_general_ci'
  ENGINE=InnoDB;
CREATE TABLE `equipment_desc` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR (30) NOT NULL DEFAULT '',
  `image` LONGBLOB NOT NULL ,
  PRIMARY KEY (`id`)
)
  COLLATE='utf8_general_ci'
  ENGINE=InnoDB;


