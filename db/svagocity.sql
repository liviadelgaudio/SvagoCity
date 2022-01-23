-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Gen 23, 2022 alle 16:07
-- Versione del server: 10.4.22-MariaDB
-- Versione PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svagocity`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `admin`
--

CREATE TABLE `admin` (
  `codiceAdmin` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cognome` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `biglietto`
--

CREATE TABLE `biglietto` (
  `idBiglietto` int(100) NOT NULL,
  `tipologiaBiglietto` varchar(100) NOT NULL,
  `prezzoBiglietto` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `biglietto`
--

INSERT INTO `biglietto` (`idBiglietto`, `tipologiaBiglietto`, `prezzoBiglietto`) VALUES
(1, 'Intero', 30),
(2, 'Ridotto', 20),
(3, 'Serale', 15),
(4, 'Abbonamento mensile', 50),
(5, 'Abbonamento annuale', 100);

-- --------------------------------------------------------

--
-- Struttura della tabella `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(100) NOT NULL,
  `nomeCliente` varchar(100) NOT NULL,
  `cognomeCliente` varchar(100) NOT NULL,
  `emailCliente` varchar(100) NOT NULL,
  `passwordCliente` varchar(100) NOT NULL,
  `dataNascitaCliente` date NOT NULL,
  `indirizzoCliente` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nomeCliente`, `cognomeCliente`, `emailCliente`, `passwordCliente`, `dataNascitaCliente`, `indirizzoCliente`) VALUES
(1, 'Silvia', 'Mirri', 'silvia.mirri@gmail.com', 'sissi2020', '1992-02-29', 'via Cesare Pavese, 50 Cesena FC');

-- --------------------------------------------------------

--
-- Struttura della tabella `evento`
--

CREATE TABLE `evento` (
  `idEvento` int(100) NOT NULL,
  `nomeEvento` varchar(100) NOT NULL,
  `descrizioneEvento` varchar(100) NOT NULL,
  `prezzo` int(100) NOT NULL,
  `capienzaEvento` int(5) NOT NULL,
  `dataEvento` date NOT NULL,
  `tipologia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `evento`
--

INSERT INTO `evento` (`idEvento`, `nomeEvento`, `descrizioneEvento`, `prezzo`, `capienzaEvento`, `dataEvento`, `tipologia`) VALUES
(1, 'Cenerentola', 'Il racconto della storia di Cenerentola', 15, 100, '2022-07-06', 'Spettacolo'),
(2, 'Biancaneve', 'La storia di Biancaneve e i sette nani', 15, 80, '2022-05-11', 'Spettacolo'),
(3, 'Ed Sheeran', 'Concerto del famosissimo cantante britannico', 80, 300, '2022-08-15', 'Concerto'),
(4, 'Gigi D Alessio', 'Concerto del famosissimo cantante italiano, multi premiato e amato', 50, 500, '2022-01-14', 'Concerto'),
(5, 'Peppa Pig', 'Spettacolo per i più piccini', 10, 50, '2022-05-22', 'Spettacolo'),
(6, 'Fluffy Candys show', 'Spettacolo della mascotte più bella del mondo', 10, 150, '2022-07-16', 'Spettacolo'),
(7, 'LegendaryWebGroup', 'Concerto band emergente', 20, 200, '2023-05-18', 'Concerto');

-- --------------------------------------------------------

--
-- Struttura della tabella `notificaAdmin`
--

CREATE TABLE `notificaAdmin` (
  `codiceNotificaAdmin` int(100) NOT NULL,
  `codiceAdmin` int(100) NOT NULL,
  `data` date NOT NULL,
  `descrizione` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `notificaCliente`
--

CREATE TABLE `notificaCliente` (
  `codiceNotifica` int(100) NOT NULL,
  `codiceCliente` int(100) NOT NULL,
  `data` date NOT NULL,
  `descrizione` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `ordine`
--

CREATE TABLE `ordine` (
  `idOrdine` int(100) NOT NULL,
  `codiceCliente` int(100) NOT NULL,
  `codiceItem` int(100) NOT NULL,
  `dataOrdine` date NOT NULL,
  `metodoPagamento` varchar(100) NOT NULL,
  `statoOrdine` varchar(100) NOT NULL,
  `spedizione` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotto`
--

CREATE TABLE `prodotto` (
  `idProdotto` int(100) NOT NULL,
  `nomeProdotto` varchar(100) NOT NULL,
  `imgProdotto` varchar(100) NOT NULL,
  `descrizioneProdotto` varchar(100) NOT NULL,
  `prezzoProdotoo` int(100) NOT NULL,
  `coloreProdotto` varchar(100) NOT NULL,
  `tagliaProdotto` varchar(3) NOT NULL,
  `disponibilitaProdotto` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `prodotto`
--

INSERT INTO `prodotto` (`idProdotto`, `nomeProdotto`, `imgProdotto`, `descrizioneProdotto`, `prezzoProdotoo`, `coloreProdotto`, `tagliaProdotto`, `disponibilitaProdotto`) VALUES
(1, 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', 12, 'Bianco', 'XS', 5),
(2, 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', 12, 'Bianco', 'S', 5),
(3, 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', 12, 'Bianco', 'M', 5),
(4, 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', 12, 'Bianco', 'L', 5),
(5, 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', 12, 'Rosa', 'XS', 5),
(6, 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', 12, 'Rosa', 'S', 5),
(7, 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', 12, 'Rosa', 'M', 5),
(8, 'T-shirt logo donna', 'da inserire', 'Maglietta da donna in 100% cotone con logo del parco.', 12, 'Rosa', 'L', 5),
(9, 'T-shirt logo uomo', 'da inserire', 'Maglietta da uomo in 100% cotone con logo del parco.', 12, 'Nero', 'S', 5),
(10, 'T-shirt logo uomo', 'da inserire', 'Maglietta da uomo in 100% cotone con logo del parco.', 12, 'Nero', 'M', 5),
(12, 'T-shirt logo uomo', 'da inserire', 'Maglietta da uomo in 100% cotone con logo del parco.', 12, 'Nero', 'L', 5),
(13, 'T-shirt logo uomo', 'da inserire', 'Maglietta da uomo in 100% cotone con logo del parco.', 12, 'Grigia', 'S', 5),
(14, 'T-shirt logo uomo', 'da inserire', 'Maglietta da uomo in 100% cotone con logo del parco.', 12, 'Grigia', 'M', 0),
(15, 'T-shirt logo uomo', 'da inserire', 'Maglietta da uomo in 100% cotone con logo del parco.', 12, 'Grigia', 'L', 2),
(16, 'T-shirt logo uomo', 'da inserire', 'Maglietta da uomo in 100% cotone con logo del parco.', 12, 'Grigia', 'XL', 7),
(17, 'T-shirt logo bambino', 'da inserire', 'Maglietta da bambino in 100% cotone con logo del parco.', 10, 'Azzurra', '4aa', 8),
(18, 'T-shirt logo bambino', 'da inserire', 'Maglietta da bambino in 100% cotone con logo del parco.', 10, 'Azzurra', '8aa', 8),
(19, 'T-shirt logo bambino', 'da inserire', 'Maglietta da bambino in 100% cotone con logo del parco.', 10, 'Rosa', '4aa', 8),
(20, 'T-shirt logo bambino', 'da inserire', 'Maglietta da bambino in 100% cotone con logo del parco.', 10, 'Rosa', '8aa', 3),
(21, 'Cappellino logo', 'da inserire', 'Cappellino con visiera e logo del parco.', 10, 'Bianco', 'TU', 20),
(22, 'Cappellino logo', 'da inserire', 'Cappellino con visiera e logo del parco.', 10, 'Nero', 'TU', 12),
(23, 'Impermeabile', 'da inserire', 'Impermeabile con mascotte del parco.', 8, 'Trasparente', 'TU', 28),
(24, 'Impermeabile', 'da inserire', 'Impermeabile con mascotte del parco.', 8, 'Rosa', 'TU', 15),
(25, 'Impermeabile bambino', 'da inserire', 'Impermeabile da bambino con mascotte del parco.', 5, 'Azzurro', 'TU', 18),
(26, 'Borraccia', 'da inserire', 'Borraccia termica con mascotte del parco.', 20, 'Azzurro', 'TU', 22),
(27, 'Borraccia', 'da inserire', 'Borraccia termica con mascotte del parco.', 20, 'Rosa', 'TU', 30);

-- --------------------------------------------------------

--
-- Struttura della tabella `promozione`
--

CREATE TABLE `promozione` (
  `idPromozione` int(100) NOT NULL,
  `nomePromozione` varchar(100) NOT NULL,
  `descrizionePromozione` varchar(1000) NOT NULL,
  `sconto` int(11) NOT NULL,
  `codicePromo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `promozione`
--

INSERT INTO `promozione` (`idPromozione`, `nomePromozione`, `descrizionePromozione`, `sconto`, `codicePromo`) VALUES
(1, 'Black Friday: 30% di sconto su tutti i prodotti del nostro e-shop', 'Per ottenerlo, al momento dell’acquisto inserisci il codice BLK30 nel campo apposito. Tale sconto si applica una sola volta per ciascun cliente registrato.', 30, 'BLK30'),
(2, 'SvagoCity Christmas edition', 'Vieni a trovarci durante le feste natalizie! Per te subito in omaggio un biglietto per un ingresso giornaliero da utilizzare entro un mese. Ti aspettiamo!', 100, 'CHRFREE'),
(3, 'Sconti gruppi', 'Vieni trovarci con un gruppo di più di 10 amici? Per voi subito uno sconto di almeno il 10% sull’acquisto dei biglietti: acquistate i biglietti con un unico ordine inserendo nel campo apposito il codice promo FRIENDS10. Più siete, maggiore sarà lo sconto applicato: vi aspettiamo!', 10, 'FRIENDS10');

-- --------------------------------------------------------

--
-- Struttura della tabella `recensione`
--

CREATE TABLE `recensione` (
  `idRecensione` int(100) NOT NULL,
  `codiceCliente` int(100) NOT NULL,
  `testoRecensione` varchar(200) NOT NULL,
  `valutazione` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `recensione`
--

INSERT INTO `recensione` (`idRecensione`, `codiceCliente`, `testoRecensione`, `valutazione`) VALUES
(1, 1, 'Che dire, come essere a casa!! Un appuntamento fisso tutti gli anni, per grandi e bambini sempre una conferma.', 5),
(2, 2, 'Anche questo anno è stato bellissimo, un caloroso saluto alla mascotte Fluffy Candy. Torneremo sicuramente!!!!', 5);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`codiceAdmin`);

--
-- Indici per le tabelle `biglietto`
--
ALTER TABLE `biglietto`
  ADD PRIMARY KEY (`idBiglietto`);

--
-- Indici per le tabelle `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `emailCliente` (`emailCliente`);

--
-- Indici per le tabelle `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idEvento`);

--
-- Indici per le tabelle `notificaAdmin`
--
ALTER TABLE `notificaAdmin`
  ADD PRIMARY KEY (`codiceNotificaAdmin`);

--
-- Indici per le tabelle `notificaCliente`
--
ALTER TABLE `notificaCliente`
  ADD PRIMARY KEY (`codiceNotifica`);

--
-- Indici per le tabelle `ordine`
--
ALTER TABLE `ordine`
  ADD PRIMARY KEY (`idOrdine`,`codiceCliente`,`codiceItem`) USING BTREE;

--
-- Indici per le tabelle `prodotto`
--
ALTER TABLE `prodotto`
  ADD PRIMARY KEY (`idProdotto`);

--
-- Indici per le tabelle `promozione`
--
ALTER TABLE `promozione`
  ADD PRIMARY KEY (`idPromozione`),
  ADD UNIQUE KEY `codicePromo` (`codicePromo`);

--
-- Indici per le tabelle `recensione`
--
ALTER TABLE `recensione`
  ADD PRIMARY KEY (`idRecensione`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `admin`
--
ALTER TABLE `admin`
  MODIFY `codiceAdmin` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `biglietto`
--
ALTER TABLE `biglietto`
  MODIFY `idBiglietto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `evento`
--
ALTER TABLE `evento`
  MODIFY `idEvento` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la tabella `notificaAdmin`
--
ALTER TABLE `notificaAdmin`
  MODIFY `codiceNotificaAdmin` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `notificaCliente`
--
ALTER TABLE `notificaCliente`
  MODIFY `codiceNotifica` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `ordine`
--
ALTER TABLE `ordine`
  MODIFY `idOrdine` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `prodotto`
--
ALTER TABLE `prodotto`
  MODIFY `idProdotto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT per la tabella `promozione`
--
ALTER TABLE `promozione`
  MODIFY `idPromozione` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `recensione`
--
ALTER TABLE `recensione`
  MODIFY `idRecensione` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
