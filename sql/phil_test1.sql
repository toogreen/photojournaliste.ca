# phpMyAdmin MySQL-Dump
# version 2.3.2
# http://www.phpmyadmin.net/ (download page)
#
# Serveur: localhost
# Généré le : Vendredi 07 Novembre 2008 à 11:08
# Version du serveur: 3.23.52
# Version de PHP: 4.2.3
# Base de données: `phil_test1`
# --------------------------------------------------------

#
# Structure de la table `contacts`
#

CREATE TABLE contacts (
  id int(6) NOT NULL auto_increment,
  first varchar(15) NOT NULL default '',
  last varchar(15) NOT NULL default '',
  phone varchar(20) NOT NULL default '',
  mobile varchar(20) NOT NULL default '',
  fax varchar(20) NOT NULL default '',
  email varchar(30) NOT NULL default '',
  web varchar(30) NOT NULL default '',
  PRIMARY KEY  (id),
  UNIQUE KEY id (id),
  KEY id_2 (id)
) TYPE=MyISAM;

#
# Contenu de la table `contacts`
#

INSERT INTO contacts VALUES (1, 'John', 'Smith', '01234 567890', '00112 334455', '01234 567891', 'johnsmith@gowansnet.com', 'http://www.gowansnet.com');
INSERT INTO contacts VALUES (2, 'Jack', 'Johnson', '01234 567890', '00112 334455', '01234 567891', 'johnsmith@gowansnet.com', 'http://www.gowansnet.com');
INSERT INTO contacts VALUES (3, 'DAvid', 'Prout', '01234 567890', '00112 334455', '01234 567891', 'johnsmith@gowansnet.com', 'http://www.gowansnet.com');

