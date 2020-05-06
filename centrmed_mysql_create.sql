CREATE TABLE `Запись` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Фамилия` TEXT(20),
	`Имя` TEXT(20),
	`Отчество` TEXT(20),
	`Телефон` TEXT(11),
	`Направление` TEXT(50),
	`Услуга` TEXT(50),
	`Врач` TEXT(50),
	`Дата` TEXT(20),
	`Время` TEXT(10),
	`Адрес клиники` TEXT(60),
	PRIMARY KEY (`id`)
);

CREATE TABLE `Быстрая консультация` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Фамилия` TEXT(20) NOT NULL,
	`Имя` TEXT(20) NOT NULL,
	`Отчество` TEXT(20) NOT NULL,
	`email` TEXT(150) NOT NULL,
	`Телефон` TEXT(11) NOT NULL,
	`Направление` TEXT(150) NOT NULL,
	`Комментарий` TEXT(1000) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Направления/услуги` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Направление` TEXT(150) NOT NULL,
	`Услуга` TEXT(150) NOT NULL,
	`Цена` INT(10) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Врачи` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Фамилия` TEXT(20) NOT NULL,
	`Имя` TEXT(20) NOT NULL,
	`Отчество` TEXT(20) NOT NULL,
	`Стаж` INT NOT NULL,
	`Специализация` TEXT(150) NOT NULL,
	`Услуги` TEXT(150) NOT NULL,
	`Регалии` TEXT(300) NOT NULL,
	`Рабочии дни на месяц` TEXT(20) NOT NULL,
	`Рабочие время` TEXT(20) NOT NULL,
	`Клиника` TEXT(150) NOT NULL,
	`Кабинет` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Клиники` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Название` TEXT(150) NOT NULL,
	`Город` TEXT(150) NOT NULL,
	`Улица` TEXT(150) NOT NULL,
	`Дом` TEXT(20) NOT NULL,
	`Направления` TEXT(1500) NOT NULL,
	`Услуги` TEXT(3000) NOT NULL,
	`Кабинеты` TEXT(200) NOT NULL,
	`Врачи` TEXT(200) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Свободное время для записи.` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`id Врача` INT NOT NULL,
	`Дата` TEXT NOT NULL,
	`Время1` TEXT NOT NULL,
	`Время2` TEXT NOT NULL,
	`Время3` TEXT NOT NULL,
	`Время4` TEXT NOT NULL,
	`Время5` TEXT NOT NULL AUTO_INCREMENT,
	`Время6` TEXT NOT NULL AUTO_INCREMENT,
	`Время7` TEXT NOT NULL AUTO_INCREMENT,
	`Время8` TEXT NOT NULL AUTO_INCREMENT,
	`Время9` TEXT NOT NULL AUTO_INCREMENT,
	`Время10` TEXT NOT NULL AUTO_INCREMENT,
	`Время11` TEXT NOT NULL AUTO_INCREMENT,
	`Время12` TEXT NOT NULL AUTO_INCREMENT,
	`Время13` TEXT NOT NULL AUTO_INCREMENT,
	`Время14` TEXT NOT NULL AUTO_INCREMENT,
	`Время15` TEXT NOT NULL AUTO_INCREMENT,
	`Время16` TEXT NOT NULL AUTO_INCREMENT,
	`Время17` TEXT NOT NULL AUTO_INCREMENT,
	`Время18` TEXT NOT NULL AUTO_INCREMENT,
	`Время19` TEXT NOT NULL AUTO_INCREMENT,
	`Время20` TEXT NOT NULL AUTO_INCREMENT,
	`Время21` TEXT NOT NULL AUTO_INCREMENT,
	`Время22` TEXT NOT NULL AUTO_INCREMENT,
	`Время23` TEXT NOT NULL AUTO_INCREMENT,
	`Время24` TEXT NOT NULL AUTO_INCREMENT,
	`Время25` TEXT NOT NULL AUTO_INCREMENT,
	`Время26` TEXT NOT NULL AUTO_INCREMENT,
	`Время27` TEXT NOT NULL AUTO_INCREMENT,
	`Время28` TEXT NOT NULL AUTO_INCREMENT,
	`Время29` TEXT NOT NULL AUTO_INCREMENT,
	`Время30` TEXT NOT NULL AUTO_INCREMENT,
	`Время31` TEXT NOT NULL AUTO_INCREMENT,
	`Время32` TEXT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
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

