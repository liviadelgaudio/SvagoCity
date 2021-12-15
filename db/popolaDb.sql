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


--prodotti

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('1', 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', '11.99', 'Bianco', 'XS', '5');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('2', 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', '11.99', 'Bianco', 'S', '5');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('3', 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', '11.99', 'Bianco', 'M', '5');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('4', 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', '11.99', 'Bianco', 'L', '5');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('5', 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', '11.99', 'Rosa', 'XS', '5');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('6', 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', '11.99', 'Rosa', 'S', '5');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('7', 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', '11.99', 'Rosa', 'M', '5');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('8', 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', '11.99', 'Rosa', 'L', '5');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('9', 'T-shirt logo uomo', 'da inserire', 'Maglietta da uomo in 100% cotone con logo del parco.', '11.99', 'Nero', 'S', '5');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('10', 'T-shirt logo uomo', 'da inserire', 'Maglietta da uomo in 100% cotone con logo del parco.', '11.99', 'Nero', 'M', '5');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('11', 'T-shirt logo uomo', 'da inserire', 'Maglietta da uomo in 100% cotone con logo del parco.', '11.99', 'Nero', 'L', '5');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('12', 'T-shirt logo uomo', 'da inserire', 'Maglietta da uomo in 100% cotone con logo del parco.', '11.99', 'Nero', 'XL', '5');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('13', 'T-shirt logo uomo', 'da inserire', 'Maglietta da uomo in 100% cotone con logo del parco.', '11.99', 'Grigia', 'S', '5');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('14', 'T-shirt logo uomo', 'da inserire', 'Maglietta da uomo in 100% cotone con logo del parco.', '11.99', 'Grigia', 'M', '0');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('15', 'T-shirt logo uomo', 'da inserire', 'Maglietta da uomo in 100% cotone con logo del parco.', '11.99', 'Grigia', 'L', '2');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('16', 'T-shirt logo uomo', 'da inserire', 'Maglietta da uomo in 100% cotone con logo del parco.', '11.99', 'Grigia', 'XL', '7');


INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('17', 'T-shirt logo bambino', 'da inserire', 'Maglietta da bambino in 100% cotone con logo del parco.', '9.99', 'Azzurra', '4aa', '8');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('18', 'T-shirt logo bambino', 'da inserire', 'Maglietta da bambino in 100% cotone con logo del parco.', '9.99', 'Azzurra', '8aa', '8');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('19', 'T-shirt logo bambino', 'da inserire', 'Maglietta da bambino in 100% cotone con logo del parco.', '9.99', 'Rosa', '4aa', '8');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('20', 'T-shirt logo bambino', 'da inserire', 'Maglietta da bambino in 100% cotone con logo del parco.', '9.99', 'Rosa', '8aa', '3');
--cappellini
INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('21', 'Cappellino logo', 'da inserire', 'Cappellino con visiera e logo del parco.', '10', 'Bianco', 'TU', '20');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('22', 'Cappellino logo', 'da inserire', 'Cappellino con visiera e logo del parco.', '10', 'Nero', 'TU', '12');
--impermeabili
INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('23', 'Impermeabile', 'da inserire', 'Impermeabile con mascotte del parco.', '8', 'Trasparente', 'TU', '28');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('24', 'Impermeabile', 'da inserire', 'Impermeabile con mascotte del parco.', '8', 'Rosa', 'TU', '15');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('25', 'Impermeabile bambino', 'da inserire', 'Impermeabile da bambino con mascotte del parco.', '5', 'Azzurro', 'TU', '18');
--borracce
INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('26', 'Borraccia', 'da inserire', 'Borraccia termica con mascotte del parco.', '20', 'Azzurro', 'TU', '22');

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES ('27', 'Borraccia', 'da inserire', 'Borraccia termica con mascotte del parco.', '20', 'Rosa', 'TU', '30');











