create database noticias;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

use noticias;

/*drop table noticias;*/


CREATE TABLE noticias (
id int NOT NULL auto_increment,
nome char(30) NOT NULL ,
sobrenome char(30) NOT NULL ,
cidade char(50) NOT NULL ,
estado char(2) NOT NULL ,
email char(80) ,
data date NOT NULL,
hora time NOT NULL ,
titulo char(100) NOT NULL ,
PES_IMG longblob,
subtitulo char(200) ,
texto text NOT NULL ,
ver char(3) DEFAULT 'off' ,
PRIMARY KEY (id),
UNIQUE id (id)
);


select * from noticias;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` char(30) NOT NULL,
  `sobrenome` char(30) NOT NULL,
  `nasc` char(50) NOT NULL,
  `email` char(80) DEFAULT NULL,
  `telefone` char(100) NOT NULL,
  `senha` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `nasc`, `email`, `telefone`, `senha`) VALUES
(1, 'a', 'b', '2022-11-03', 'a@gmail.com', '11932773253', '123'),
(2, 'v', 'c', '2022-11-05', 'vc@gmail.com', '11945664323', '123');

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

