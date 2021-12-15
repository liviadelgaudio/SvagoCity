-- clienti
INSERT INTO `cliente` (`idCliente`, `nomeCliente`, `cognomeCliente`, `emailCliente`, `passwordCliente`, `dataNascitaCliente`, `indirizzoCliente`) VALUES
(1, 'Silvia', 'Mirri', 'silvia.mirri@gmail.com', 'sissi2020', '1992-02-29', 'via Cesare Pavese, 50 Cesena FC');

INSERT INTO `cliente` (`idCliente`, `nomeCliente`, `cognomeCliente`, `emailCliente`, `passwordCliente`, `dataNascitaCliente`, `indirizzoCliente`) VALUES
(2, 'Giovanni', 'Delnevo', 'g.delnevo@gmail.com', 'gigino15', '1989-11-08', 'via delle Moline, 40 Bologna BO');



-- biglietti
INSERT INTO `biglietto` (`idBiglietto`, `tipologiaBiglietto`, `prezzoBiglietto`) VALUES ('1', 'Intero', '30');
INSERT INTO `biglietto` (`idBiglietto`, `tipologiaBiglietto`, `prezzoBiglietto`) VALUES ('2', 'Ridotto', '20');
INSERT INTO `biglietto` (`idBiglietto`, `tipologiaBiglietto`, `prezzoBiglietto`) VALUES ('3', 'Serale', '15');


-- eventi
INSERT INTO `evento` (`idEvento`, `nomeEvento`, `descrizioneEvento`, `capienzaEvento`, `dataEvento`,`tipologia`) VALUES ('1', 'Cenerentola', 'Il racconto della storia di Cenerentola', '100', '2022-07-06','Spettacolo');

INSERT INTO `evento` (`idEvento`, `nomeEvento`, `descrizioneEvento`, `capienzaEvento`, `dataEvento`, `tipologia`) VALUES ('2', 'Biancaneve', 'La storia di Biancaneve e i sette nani', '80', '2022-05-11', 'Spettacolo');

INSERT INTO `evento` (`idEvento`, `nomeEvento`, `descrizioneEvento`, `capienzaEvento`, `dataEvento`, `tipologia`) VALUES ('3', 'Ed Sheeran', 'Concerto del famosissimo cantante britannico', '300', '2022-08-15', 'Concerto');

INSERT INTO `evento` (`idEvento`, `nomeEvento`, `descrizioneEvento`, `capienzaEvento`, `dataEvento`, `tipologia`) VALUES ('4', 'Gigi D Alessio', 'Concerto del famosissimo cantante italiano, multi premiato e amato', '500', '2022-01-14', 'Concerto');

INSERT INTO `evento` (`idEvento`, `nomeEvento`, `descrizioneEvento`, `capienzaEvento`, `dataEvento`, `tipologia`) VALUES ('5', 'Peppa Pig', 'Spettacolo per i più piccini', '50', '2022-05-22', 'Spettacolo');

INSERT INTO `evento` (`idEvento`, `nomeEvento`, `descrizioneEvento`, `capienzaEvento`, `dataEvento`, `tipologia`) VALUES ('6', 'Fluffy Candys show', 'Spettacolo della mascotte più bella del mondo', '150', '2022-07-16', 'Spettacolo');

INSERT INTO `evento` (`idEvento`, `nomeEvento`, `descrizioneEvento`, `capienzaEvento`, `dataEvento`, `tipologia`) VALUES ('7', 'LegendaryWebGroup', 'Concerto band emergente', '200', '2023-05-18', 'Concerto');


-- recensioni

INSERT INTO `recensione` (`idRecensione`, `codiceCliente`, `testoRecensione`, `valutazione`) VALUES ('1', '1', 'Che dire, come essere a casa!! Un appuntamento fisso tutti gli anni, per grandi e bambini sempre una conferma.', '5');

INSERT INTO `recensione` (`idRecensione`, `codiceCliente`, `testoRecensione`, `valutazione`) VALUES ('2', '1', 'Anche questo anno è stato bellissimo, un caloroso saluto alla mascotte Fluffy Candy', '5');