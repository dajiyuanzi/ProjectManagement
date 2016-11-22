
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Databas: `iGroshYou`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `Foods`
--

CREATE TABLE `Foods` (
  `ID` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `calorieValue` int(11) DEFAULT NULL,
  `fatValue` double DEFAULT NULL,
  `proteinValue` double DEFAULT NULL,
  `carbValue` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `Foods`
--

INSERT INTO `Foods` (`ID`, `name`, `brand`, `calorieValue`, `fatValue`, `proteinValue`, `carbValue`) VALUES
(1, 'Banana', 'Chiquita', 88, 0.3, 1.1, 23);

-- --------------------------------------------------------

--
-- Tabellstruktur `Grocery List`
--

CREATE TABLE `Grocery List` (
  `email` varchar(255) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `ID` int(10) NOT NULL,
  `calorieValue` int(10) NOT NULL,
  `fatValue` double NOT NULL,
  `proteinValue` double DEFAULT NULL,
  `carbValue` double DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `User`
--

CREATE TABLE `User` (
  `email` varchar(255) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `calorieIntake` int(10) DEFAULT NULL,
  `fatIntake` double DEFAULT NULL,
  `proteinIntake` double DEFAULT NULL,
  `carbIntake` double DEFAULT NULL,
  `height` int(10) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amountOfLogins` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `Foods`
--
ALTER TABLE `Foods`
  ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `Grocery List`
--
ALTER TABLE `Grocery List`
  ADD KEY `ID` (`ID`),
  ADD KEY `email` (`email`),
  ADD KEY `userName` (`userName`);

--
-- Index för tabell `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`email`) USING BTREE,
  ADD UNIQUE KEY `userName` (`userName`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `Foods`
--
ALTER TABLE `Foods`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `Grocery List`
--
ALTER TABLE `Grocery List`
  ADD CONSTRAINT `fkUsername` FOREIGN KEY (`userName`) REFERENCES `User` (`userName`),
  ADD CONSTRAINT `fkemail` FOREIGN KEY (`email`) REFERENCES `User` (`email`),
  ADD CONSTRAINT `fkFoodID` FOREIGN KEY (`ID`) REFERENCES `Foods` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
