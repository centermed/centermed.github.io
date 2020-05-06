CREATE TABLE IF NOT EXISTS `zapis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Familia` tinytext NOT NULL,
  `Imya` tinytext NOT NULL,
  `Otchestvo` tinytext NOT NULL,
  `Telefon` tinytext NOT NULL,
  `Napravlenie` tinytext NOT NULL,
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
);

CREATE TABLE `services` (
	`id` int NOT NULL AUTO_INCREMENT,
	`specialization` longtext(150) NOT NULL,
	`servuce` longtext(150),
	`price` int(10) NOT NULL,
	PRIMARY KEY (`id`)
);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

CREATE TABLE `clinics` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` longtext(150) NOT NULL,
	`city` longtext(150) NOT NULL,
	`street` longtext(150) NOT NULL,
	`house` TEXT(20) NOT NULL,
	`specializations` longtext(1500) NOT NULL,
	`services` longtext(3000) NOT NULL,
	`doctors` longtext(200) NOT NULL,
	PRIMARY KEY (`id`)
);

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

ALTER TABLE `Запись` ADD CONSTRAINT `Запись_fk0` FOREIGN KEY (`specialization`) REFERENCES `services`(`specialization`);

ALTER TABLE `Запись` ADD CONSTRAINT `Запись_fk1` FOREIGN KEY (`service`) REFERENCES `services`(`servuce`);

ALTER TABLE `Запись` ADD CONSTRAINT `Запись_fk2` FOREIGN KEY (`doctor`) REFERENCES `Свободное время для записи.`(`id_doctor`);

ALTER TABLE `Запись` ADD CONSTRAINT `Запись_fk3` FOREIGN KEY (`date`) REFERENCES `Свободное время для записи.`(`date`);

ALTER TABLE `Врачи` ADD CONSTRAINT `Врачи_fk0` FOREIGN KEY (`Специализация`) REFERENCES `services`(`specialization`);

ALTER TABLE `Врачи` ADD CONSTRAINT `Врачи_fk1` FOREIGN KEY (`Услуги`) REFERENCES `services`(`servuce`);

ALTER TABLE `Врачи` ADD CONSTRAINT `Врачи_fk2` FOREIGN KEY (`Клиника`) REFERENCES `clinics`(`id`);

ALTER TABLE `Свободное время для записи.` ADD CONSTRAINT `Свободное время для записи._fk0` FOREIGN KEY (`id_doctor`) REFERENCES `Врачи`(`id`);

ALTER TABLE `Свободное время для записи.` ADD CONSTRAINT `Свободное время для записи._fk1` FOREIGN KEY (`date`) REFERENCES `Врачи`(`Рабочии дни на месяц`);

