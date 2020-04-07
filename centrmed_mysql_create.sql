CREATE TABLE `Запись` (
	`id` int NOT NULL AUTO_INCREMENT,
	`Фамилия` TEXT(20) NOT NULL,
	`Имя` TEXT(20) NOT NULL,
	`Отчество` TEXT(20) NOT NULL,
	`Телефон` bigint(11) NOT NULL,
	`Направление` longtext(150) NOT NULL DEFAULT 'Терапия',
	`Услуга` longtext(150) NOT NULL DEFAULT 'Первичный прием терапевта ',
	`Врач` longtext(150) NOT NULL,
	`Дата` DATE NOT NULL,
	`Время` TIME NOT NULL,
	`Адрес клиники` longtext NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Быстрая консультация` (
	`id` int NOT NULL AUTO_INCREMENT,
	`Фамилия` TEXT(20) NOT NULL,
	`Имя` TEXT(20) NOT NULL,
	`Отчество` TEXT(20) NOT NULL,
	`email` longtext(150) NOT NULL,
	`Телефон` bigint(11) NOT NULL,
	`Направление` longtext(150) NOT NULL DEFAULT 'Терапия',
	`Комментарий` longtext(1000) NOT NULL DEFAULT 'Терапия',
	PRIMARY KEY (`id`)
);

CREATE TABLE `Направления/услуги` (
	`id` int NOT NULL AUTO_INCREMENT,
	`Направление` longtext(150) NOT NULL,
	`Услуга` longtext(150) NOT NULL,
	`Цена` int(10) NOT NULL,
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

CREATE TABLE `Клиники` (
	`id` int NOT NULL AUTO_INCREMENT,
	`Название` longtext(150) NOT NULL,
	`Город` longtext(150) NOT NULL,
	`Улица` longtext(150) NOT NULL,
	`Дом` TEXT(20) NOT NULL,
	`Направления` longtext(1500) NOT NULL,
	`Услуги` longtext(3000) NOT NULL,
	`Кабинеты` longtext(200) NOT NULL,
	`Врачи` longtext(200) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Свободное время для записи.` (
	`id Врача` bigint NOT NULL,
	`Дата` DATE NOT NULL,
	`Время1` TIME NOT NULL,
	`Время2` TIME NOT NULL,
	`Время3` TIME NOT NULL,
	`Время4` TIME NOT NULL,
	`Время5` TIME NOT NULL AUTO_INCREMENT,
	`Время6` TIME NOT NULL AUTO_INCREMENT,
	`Время32` TIME NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id Врача`)
);

ALTER TABLE `Запись` ADD CONSTRAINT `Запись_fk0` FOREIGN KEY (`Направление`) REFERENCES `Направления/услуги`(`Направление`);

ALTER TABLE `Запись` ADD CONSTRAINT `Запись_fk1` FOREIGN KEY (`Услуга`) REFERENCES `Направления/услуги`(`Услуга`);

ALTER TABLE `Запись` ADD CONSTRAINT `Запись_fk2` FOREIGN KEY (`Врач`) REFERENCES `Свободное время для записи.`(`id Врача`);

ALTER TABLE `Запись` ADD CONSTRAINT `Запись_fk3` FOREIGN KEY (`Дата`) REFERENCES `Свободное время для записи.`(`Дата`);

ALTER TABLE `Запись` ADD CONSTRAINT `Запись_fk4` FOREIGN KEY (`Адрес клиники`) REFERENCES `Врачи`(`Клиника`);

ALTER TABLE `Быстрая консультация` ADD CONSTRAINT `Быстрая консультация_fk0` FOREIGN KEY (`Направление`) REFERENCES `Направления/услуги`(`Направление`);

ALTER TABLE `Врачи` ADD CONSTRAINT `Врачи_fk0` FOREIGN KEY (`Специализация`) REFERENCES `Направления/услуги`(`Направление`);

ALTER TABLE `Врачи` ADD CONSTRAINT `Врачи_fk1` FOREIGN KEY (`Услуги`) REFERENCES `Направления/услуги`(`Услуга`);

ALTER TABLE `Врачи` ADD CONSTRAINT `Врачи_fk2` FOREIGN KEY (`Рабочии дни на месяц`) REFERENCES `Свободное время для записи.`(`Дата`);

ALTER TABLE `Врачи` ADD CONSTRAINT `Врачи_fk3` FOREIGN KEY (`Клиника`) REFERENCES `Клиники`(`id`);

ALTER TABLE `Клиники` ADD CONSTRAINT `Клиники_fk0` FOREIGN KEY (`Направления`) REFERENCES `Врачи`(`Специализация`);

ALTER TABLE `Клиники` ADD CONSTRAINT `Клиники_fk1` FOREIGN KEY (`Услуги`) REFERENCES `Врачи`(`Услуги`);

ALTER TABLE `Клиники` ADD CONSTRAINT `Клиники_fk2` FOREIGN KEY (`Врачи`) REFERENCES `Врачи`(`id`);

ALTER TABLE `Свободное время для записи.` ADD CONSTRAINT `Свободное время для записи._fk0` FOREIGN KEY (`id Врача`) REFERENCES `Врачи`(`id`);

ALTER TABLE `Свободное время для записи.` ADD CONSTRAINT `Свободное время для записи._fk1` FOREIGN KEY (`Дата`) REFERENCES `Врачи`(`Рабочии дни на месяц`);

ALTER TABLE `Свободное время для записи.` ADD CONSTRAINT `Свободное время для записи._fk2` FOREIGN KEY (`Время1`) REFERENCES `Врачи`(`Рабочие время`);

ALTER TABLE `Свободное время для записи.` ADD CONSTRAINT `Свободное время для записи._fk3` FOREIGN KEY (`Время2`) REFERENCES `Врачи`(`Рабочие время`);

ALTER TABLE `Свободное время для записи.` ADD CONSTRAINT `Свободное время для записи._fk4` FOREIGN KEY (`Время3`) REFERENCES `Врачи`(`Рабочие время`);

ALTER TABLE `Свободное время для записи.` ADD CONSTRAINT `Свободное время для записи._fk5` FOREIGN KEY (`Время4`) REFERENCES `Врачи`(`Рабочие время`);

ALTER TABLE `Свободное время для записи.` ADD CONSTRAINT `Свободное время для записи._fk6` FOREIGN KEY (`Время5`) REFERENCES `Врачи`(`Рабочие время`);

ALTER TABLE `Свободное время для записи.` ADD CONSTRAINT `Свободное время для записи._fk7` FOREIGN KEY (`Время6`) REFERENCES `Врачи`(`Рабочие время`);

ALTER TABLE `Свободное время для записи.` ADD CONSTRAINT `Свободное время для записи._fk8` FOREIGN KEY (`Время32`) REFERENCES `Врачи`(`Рабочие время`);

