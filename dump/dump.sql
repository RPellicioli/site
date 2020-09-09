DROP TABLE IF EXISTS `user`;
DROP TABLE IF EXISTS `banner`;
DROP TABLE IF EXISTS `partner`;
DROP TABLE IF EXISTS `file`;

CREATE TABLE `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `extension` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `file` (`file`, `path`, `extension`) VALUES
('banner-01.jpg',	'assets/img',	'jpg'),
('banner-02.jpg',	'assets/img',	'jpg'),
('banner-03.jpg',	'assets/img',	'jpg'),
('marcopolo.jpg',	'assets/img',	'jpg'),
('rodoil.jpg',	'assets/img',	'jpg'),
('iguatemi.jpg',	'assets/img',	'jpg'),
('gedore.jpg',	'assets/img',	'jpg'),
('customer-1.png',	'assets/img',	'png'),
('customer-2.png',	'assets/img',	'png'),
('customer-3.png',	'assets/img',	'png'),
('customer-4.png',	'assets/img',	'png'),
('customer-5.png',	'assets/img',	'png');

CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imageId` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `imageId` (`imageId`),
  CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`imageId`) REFERENCES `file` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `banner` (`imageId`, `title`) VALUES
('1',	'banner 01'),
('2',	'banner 02'),
('3',	'banner 03');

CREATE TABLE `partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imageId` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `imageId` (`imageId`),
  CONSTRAINT `partner_ibfk_1` FOREIGN KEY (`imageId`) REFERENCES `file` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `partner` (`imageId`, `title`, `description`, `url`) VALUES
('4',	'Marcopolo', 'Plataformas e Tecnologias Digitais. <br/> Estratégia Onlife. <br/> Branding e Design. <br/> Presença de Marca Digital', 'https://www.marcopolo.com.br/'),
('5',	'Rodoil', 'Plataformas e Tecnologias Digitais. <br/> Estratégia Onlife. <br/> Branding e Design. <br/> Presença de Marca Digital', 'https://www.rodoil.com.br/'),
('6',	'Iguatemi', 'Plataformas e Tecnologias Digitais. <br/> Estratégia Onlife. <br/> Branding e Design. <br/> Presença de Marca Digital', 'https://www.iguatemicaxias.com.br/'),
('7',	'Gedore', 'Plataformas e Tecnologias Digitais. <br/> Estratégia Onlife. <br/> Branding e Design. <br/> Presença de Marca Digital', 'https://www.gedore.com.br/'),
('8',	'Arke', '', 'https://www.arke.com.br/'),
('9',	'Aspock', '', 'http://www.aspock.com.br/'),
('10',	'Andreazza', '', 'https://superandreazza.com.br/'),
('11',	'Cargo Center', '', 'http://www.cargocenter.com.br/'),
('12',	'Casa Perini', '', 'https://www.casaperini.com.br/'),
('8',	'Arke', '', 'https://www.arke.com.br/'),
('9',	'Aspock', '', 'http://www.aspock.com.br/'),
('10',	'Andreazza', '', 'https://superandreazza.com.br/'),
('11',	'Cargo Center', '', 'http://www.cargocenter.com.br/'),
('12',	'Casa Perini', '', 'https://www.casaperini.com.br/');

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `name`, `email`, `password`, `status`) VALUES
(1,	'Teste', 'teste@teste.com', 'teste', 1);