CREATE TABLE IF NOT EXISTS `zapis` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Familia` tinytext NOT NULL,
  `Imya` tinytext NOT NULL,
  `Otchestvo` tinytext NOT NULL,
  `Telefon` tinytext NOT NULL,
  `Napravlenie` TEXT NOT NULL,
  `Usluga` int(10) NOT NULL,
  `Vrach` int(10) NOT NULL,
  `Data` tinytext NOT NULL,
  `Vremya` tinytext NOT NULL,
  `Adress_Kliniki` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `call` (
	`id` int NOT NULL AUTO_INCREMENT,
	`fio` TEXT(20) NOT NULL,
	`number` bigint(11) NOT NULL,
	PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `services` (
	`id` int NOT NULL AUTO_INCREMENT,
	`specialization` TEXT NOT NULL,
	`service` longtext,
	`price` int(10) NOT NULL,
	PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `vrachi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Familia` tinytext NOT NULL,
  `Imya` tinytext NOT NULL,
  `Otch` tinytext NOT NULL,
  `Stag` int(11) NOT NULL,
  `Special` text NOT NULL,
  `Uslugi` text NOT NULL,
  `Relagii` text NOT NULL,
  `RabDni` text NOT NULL,
  `RabTime` text NOT NULL,
  `Clinica` text NOT NULL,
  `Cabinet` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `clinics` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` longtext NOT NULL,
	`city` longtext NOT NULL,
	`street` longtext NOT NULL,
	`house` TEXT(20) NOT NULL,
	`specializations` longtext NOT NULL,
	`services` longtext NOT NULL,
	`doctors` longtext NOT NULL,
	PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `svobodnoevremya` (
  `id` int(11) NOT NULL,
  `idvrach` int(11) NOT NULL,
  `iddata` int(11) NOT NULL,
  `Data` text NOT NULL,
  `vrem1` text NOT NULL,
  `vrem2` text NOT NULL,
  `vrem3` text NOT NULL,
  `vrem4` text NOT NULL,
  `vrem5` text NOT NULL,
  `vrem6` text NOT NULL,
  `vrem7` text NOT NULL,
  `vrem8` text NOT NULL,
  `vrem9` text NOT NULL,
  `vrem10` text NOT NULL,
  `vrem12` text NOT NULL,
  `vrem13` text NOT NULL,
  `vrem14` text NOT NULL,
  `vrem15` text NOT NULL,
  `vrem16` text NOT NULL,
  `vrem17` text NOT NULL,
  `vrem18` text NOT NULL,
  `vrem19` text NOT NULL,
  `vrem20` text NOT NULL,
  `vrem21` text NOT NULL,
  `vrem22` text NOT NULL,
  `vrem23` text NOT NULL,
  `vrem24` text NOT NULL,
  `vrem25` text NOT NULL,
  `vrem26` text NOT NULL,
  `vrem27` text NOT NULL,
  `vrem28` text NOT NULL,
  `vrem29` text NOT NULL,
  `vrem30` text NOT NULL,
  `vrem31` text NOT NULL,
  `vrem32` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `zapis` ADD CONSTRAINT `zapis_fk0` FOREIGN KEY (`Napravlenie`) REFERENCES `services`(`specialization`);

ALTER TABLE `zapis` ADD CONSTRAINT `zapis_fk1` FOREIGN KEY (`Usluga`) REFERENCES `services`(`service`);

ALTER TABLE `zapis` ADD CONSTRAINT `zapis_fk2` FOREIGN KEY (`Vrach`) REFERENCES `svobodnoevremya`(`idvrach`);

ALTER TABLE `zapis` ADD CONSTRAINT `zapis_fk3` FOREIGN KEY (`Data`) REFERENCES `svobodnoevremya`(`Data`);

ALTER TABLE `vrachi` ADD CONSTRAINT `vrachi_fk0` FOREIGN KEY (`Special`) REFERENCES `services`(`specialization`);

ALTER TABLE `vrachi` ADD CONSTRAINT `vrachi_fk2` FOREIGN KEY (`Clinica`) REFERENCES `clinics`(`id`);

ALTER TABLE `svobodnoevremya` ADD CONSTRAINT `svobodnoevremya_fk0` FOREIGN KEY (`idvrach`) REFERENCES `vrachi`(`id`);

ALTER TABLE `svobodnoevremya` ADD CONSTRAINT `svobodnoevremya_fk1` FOREIGN KEY (`Data`) REFERENCES `vrachi`(`RabDni`);
