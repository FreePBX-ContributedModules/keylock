CREATE TABLE IF NOT EXISTS `keylock_patterns` (
`id_patterns` int(10) unsigned NOT NULL,
`patterns` TEXT NOT NULL 
) ENGINE = InnoDB;


DELETE FROM keylock_patterns;
INSERT INTO keylock_patterns VALUES ('1', '04XXXXXXXXX\n02XXXXXXXXX\n00.');

 
