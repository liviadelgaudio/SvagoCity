-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Dic 15, 2021 alle 15:25
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
  `password` varchar(100) NOT NULL,
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
  `dataEvento` date NOT NULL
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
  `dataValidità` date NOT NULL,
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

-- --------------------------------------------------------

--
-- Struttura della tabella `promozione`
--

CREATE TABLE `promozione` (
  `idPromozione` int(100) NOT NULL,
  `nomePromozione` varchar(100) NOT NULL,
  `descrizionePromozione` varchar(100) NOT NULL,
  `sconto` int(11) NOT NULL,
  `codicePromo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Struttura della tabella `notificaCliente`
--

CREATE TABLE `notificaCliente` (
  `codiceNotifica` int(100) NOT NULL,
  `codiceCliente` int(100) NOT NULL,
  `data` date NOT NULL,
  `descrizione` varchar(10000) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Struttura della tabella `notificaAdmin`
--

CREATE TABLE `notificaCliente` (
  `codiceNotificaAdmin` int(100) NOT NULL,
  `codiceAdmin` int(100) NOT NULL,
  `data` date NOT NULL,
  `descrizione` varchar(10000) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


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
-- Indici per le tabelle `ordine`
--
ALTER TABLE `ordine`
  ADD PRIMARY KEY (`idOrdine`);

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
-- Indici per le tabelle `notificaCliente`
--
ALTER TABLE `notificaCliente`
  ADD PRIMARY KEY (`codiceNotifica`);

--
-- Indici per le tabelle `notificaAdmin`
--
ALTER TABLE `notificaAdmin`
  ADD PRIMARY KEY (`codiceNotificaAdmin`);


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
  MODIFY `idBiglietto` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `evento`
--
ALTER TABLE `evento`
  MODIFY `idEvento` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `ordine`
--
ALTER TABLE `ordine`
  MODIFY `idOrdine` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `prodotto`
--
ALTER TABLE `prodotto`
  MODIFY `idProdotto` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `promozione`
--
ALTER TABLE `promozione`
  MODIFY `idPromozione` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `notificaCliente`
--
ALTER TABLE `notificaCliente`
  MODIFY `codiceNotifica` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `notificaAdmin`
--
ALTER TABLE `notificaAdmin`
  MODIFY `codiceNotificaAdmin` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `recensione`
--
ALTER TABLE `recensione`
  MODIFY `idRecensione` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
