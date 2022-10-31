-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.5.61-log - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Export de la structure de la base pour myperson_add
DROP DATABASE IF EXISTS `persons_add`;
CREATE DATABASE IF NOT EXISTS `persons_add` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `persons_add`;

-- Export de la structure de la table myperson_add. address
DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) DEFAULT '0',
  `zipcode` varchar(10) DEFAULT '0',
  `ville` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Export de données de la table myperson_add.address : ~5 rows (environ)
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` (`id`, `address`, `zipcode`, `ville`) VALUES
	(1, '25 rue machin', '75018', 'Paris'),
	(2, '30 rue bidule', '34000', 'Montpellier'),
	(3, '14 avenue des trucs', '75001', 'Paris'),
	(4, '189 boulevard meuh', '69000', 'Lyon'),
	(5, '5 ruelle bidon', '75012', 'Paris');
/*!40000 ALTER TABLE `address` ENABLE KEYS */;

-- Export de la structure de la table myperson_add. person
DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address_id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_person_address` (`address_id`),
  CONSTRAINT `FK_person_address` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Export de données de la table myperson_add.person : ~5 rows (environ)
/*!40000 ALTER TABLE `person` DISABLE KEYS */;
INSERT INTO `person` (`id`, `address_id`, `prenom`, `nom`, `age`) VALUES
	(1, 4, 'jean', 'machin', 25),
	(2, 5, 'paul', 'truc', 44),
	(3, 2, 'pierre', 'bidule', 23),
	(4, 1, 'Henri', 'ford', 75),
	(5, 3, 'John', 'Nada', 20);
/*!40000 ALTER TABLE `person` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
