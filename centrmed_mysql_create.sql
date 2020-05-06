CREATE TABLE `Запись` (
	`id` int NOT NULL AUTO_INCREMENT,
	`familyname` TEXT(20),
	`name` TEXT(20),
	`secondname` TEXT(20),
	`number` bigint(11),
	`specialization` longtext(150),
	`service` longtext(150),
	`doctor` longtext(150),
	`date` DATE,
	`time` TIME,
	`adress` longtext,
	PRIMARY KEY (`id`)
);

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

CREATE TABLE `Врачи` (
	`id` int NOT NULL AUTO_INCREMENT,
	`Фамилия` TEXT(20) NOT NULL,
	`Имя` TEXT(20) NOT NULL,
	`Отчество` TEXT(20) NOT NULL,
	`Стаж` int NOT NULL,
	`Специализация` longtext(150) NOT NULL,
	`Услуги` longtext(150) NOT NULL,
	`Регалии` longtext(300) NOT NULL,
	`Рабочии дни на месяц` TEXT(20) NOT NULL,
	`Рабочие время` TIME(20) NOT NULL,
	`Клиника` longtext(150) NOT NULL,
	`Кабинет` int NOT NULL,
	PRIMARY KEY (`id`)
);

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

CREATE TABLE `Свободное время для записи.` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`id_doctor` bigint NOT NULL,
	`date` DATE NOT NULL,
	`time1` varchar(255) NOT NULL,
	`time2` varchar(255) NOT NULL,
	`time3` varchar(255) NOT NULL,
	`time4` varchar(255) NOT NULL,
	`time5` varchar(255) NOT NULL,
	`time6` varchar(255) NOT NULL,
	`time7` varchar(255) NOT NULL,
	`time8` varchar(255) NOT NULL,
	`time9` varchar(255) NOT NULL,
	`time10` varchar(255) NOT NULL,
	`time11` varchar(255) NOT NULL,
	`time12` varchar(255) NOT NULL,
	`time13` varchar(255) NOT NULL,
	`time14` varchar(255) NOT NULL,
	`time15` varchar(255) NOT NULL,
	`time16` varchar(255) NOT NULL,
	`time17` varchar(255) NOT NULL,
	`time18` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `Запись` ADD CONSTRAINT `Запись_fk0` FOREIGN KEY (`specialization`) REFERENCES `services`(`specialization`);

ALTER TABLE `Запись` ADD CONSTRAINT `Запись_fk1` FOREIGN KEY (`service`) REFERENCES `services`(`servuce`);

ALTER TABLE `Запись` ADD CONSTRAINT `Запись_fk2` FOREIGN KEY (`doctor`) REFERENCES `Свободное время для записи.`(`id_doctor`);

ALTER TABLE `Запись` ADD CONSTRAINT `Запись_fk3` FOREIGN KEY (`date`) REFERENCES `Свободное время для записи.`(`date`);

ALTER TABLE `Врачи` ADD CONSTRAINT `Врачи_fk0` FOREIGN KEY (`Специализация`) REFERENCES `services`(`specialization`);

ALTER TABLE `Врачи` ADD CONSTRAINT `Врачи_fk1` FOREIGN KEY (`Услуги`) REFERENCES `services`(`servuce`);

ALTER TABLE `Врачи` ADD CONSTRAINT `Врачи_fk2` FOREIGN KEY (`Клиника`) REFERENCES `clinics`(`id`);

ALTER TABLE `Свободное время для записи.` ADD CONSTRAINT `Свободное время для записи._fk0` FOREIGN KEY (`id_doctor`) REFERENCES `Врачи`(`id`);

ALTER TABLE `Свободное время для записи.` ADD CONSTRAINT `Свободное время для записи._fk1` FOREIGN KEY (`date`) REFERENCES `Врачи`(`Рабочии дни на месяц`);

