CREATE TABLE IF NOT EXISTS `message` (
  `NOM` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `idMessage` int(20) NOT NULL AUTO_INCREMENT,
  `Commentaire` varchar(500) NOT NULL,
  PRIMARY KEY (`idMessage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

insert into message (NOM, Prenom, Commentaire) value ('ZABEL', 'Anne-Lise', 'J''adore ce téléphone il me permet de consulter mes cours de droit en temps réel et de suivre ce qui se passe dans le monde en temps réel.');

insert into message (NOM, Prenom, Commentaire) value ('BRAUN', 'Olivier', 'Je suis époustouflé par la rapidité de ce téléphone, une expérience utilisateur au top et une navigation en toute simplicité ... tout simplement merci Fast+ !');

insert into message (NOM, Prenom, Commentaire) value ('MELNIK', 'Alexandre', 'Wow ... bluffant ... j adore !');