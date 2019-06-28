-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 28. 06 2019 kl. 09:01:35
-- Serverversion: 10.1.40-MariaDB
-- PHP-version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `genre`
--

CREATE TABLE `genre` (
  `genreId` int(5) NOT NULL,
  `genreName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `genre`
--

INSERT INTO `genre` (`genreId`, `genreName`) VALUES
(1, 'Racing'),
(2, 'Third Person Shooter'),
(3, 'Action'),
(4, 'Survival'),
(5, 'Adventure'),
(6, 'Stealth'),
(7, 'First Person Shooter'),
(8, 'Free-Roam'),
(9, 'Andet');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `productgenre`
--

CREATE TABLE `productgenre` (
  `productId` int(5) NOT NULL,
  `genreId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `productgenre`
--

INSERT INTO `productgenre` (`productId`, `genreId`) VALUES
(2, 1),
(3, 2),
(4, 3),
(4, 4),
(5, 5),
(5, 6),
(6, 5),
(7, 7),
(8, 3),
(8, 5),
(9, 3),
(9, 8),
(10, 1),
(11, 1),
(11, 2);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products`
--

CREATE TABLE `products` (
  `productId` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `imgSrc` varchar(200) NOT NULL,
  `imgAlt` varchar(50) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `published` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `authorId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `products`
--

INSERT INTO `products` (`productId`, `title`, `imgSrc`, `imgAlt`, `content`, `price`, `published`, `authorId`) VALUES
(2, 'Crash Team Racing Nitro-Fueled - PS4', 'https://content.gucca.dk/covers/big/c/r/crash-team-racing-nitro-fueled_432009.jpg', 'Crash Team Racing Nitro-Fueled', 'Crash er tilbage i førersædet og er klar til at køre om kap med alle hans modstandere. Start din motor op og gør dig klar på at prøve kræfter med de originale spiltilstande, karakterer, baner, powerups og våben, imens du nyder den flotte HD grafik.<br>\r\n        <br>\r\n        Crash Team Racing Nitro-Fueled er en remaster af det originale Crash TM racerspil, og bringer alle karaktererne, banerne og køretøjerne tilbage i flot HD grafik, som med sikkerhed vil tage din gamingoplevelse til det næste niveau.', '270.00', '2019-06-06 11:07:09', 1),
(3, 'Plants Vs. Zombies Garden Warfare 2 - Nordic - Playstation Hits - PS4', 'https://content.gucca.dk/covers/big/p/l/plants-vs-zombies-garden-warfare-2-nordic-playstation-hits_429081.jpg', 'Plants Vs. Zombies Garden Warfare 2', 'Kampen for Suburbia gror til nye højder i Plants vs. Zombies Garden Warfare 2, der er en hylende morsom og actionfyldt shooter, hvor du skal bekæmpe Dr. Zomboss som har forstærket hans horde af zombier og skabt et zombie utopia.<br>\r\n        <br>\r\n        Håbet fortsætter dog, fordi planterne har planer om at udføre en kæmpe offensiv, der går ud på at tage deres jord tilbage. Spil som planter i en helt ny 24 spillers Herbal Assault tilstand, eller vælg din side i 4-spillers co-op eller solo.', '140.00', '2019-06-06 11:07:27', 1),
(4, 'Ark: Survival Evolved - PS4', 'https://content.gucca.dk/covers/big/a/r/ark-survival-evolved_382730.jpg', 'Ark: Survival Evolved', 'Om en mand eller kvinde strandet nøgen, frossen og sulten på kysten af en mystisk ø kaldet ARK, skal du jage og høste ressourcer, skabe nødvendige værktøjer, dyrke afgrøder og bygge hus til at modstå de udfordringer som vil ramme dig fra alle sider.<br>\r\n        <br>\r\n        Brug din snedighed, samt dine ressourcer til at dræbe eller temme og opdrætte leviathan-dinosaurerne og andre urokkelige væsner, der slentrer rundt på jorden omkring dig.<br>\r\n        <br>\r\n        Lav alliancer med andre spillere online for at overleve. Men husk; stol aldrig på andre end dig selv - man ved aldrig hvem der vil dig ondt...', '300.00', '2019-06-06 11:07:43', 1),
(5, 'A Plague Tale: Innocence - PS4', 'https://content.gucca.dk/covers/big/a/andet/a-plague-tale-innocence_437223.jpg', 'A Plague Tale: Innocence', 'A Plague Tale: Innocence fortæller historien om 2 unge søskende, der sammen skal kæmpe for at overleve i en af historiens mørkeste perioder. Dette nye spil fra Asobo Studio sender dig på en følelsesladet rejse gennem Frankrig i det 14. århundrede, med gameplay der kombinerer eventyr, action og stealth. Følg den unge Amicia og hendes lillebror Hugo, der er alene i en ødelagt verden, imens de skal prøve på at offentliggøre en mørk hemmelighed.<br>\r\n        <br>\r\n        De 2 søskende er på flugt fra soldater, og de er omringer af moser og sværme af rotter, som bringer den sorte død med sig. Kan de overkomme disse odds?', '330.00', '2019-06-06 11:07:51', 1),
(6, 'The Lego Movie 2 - Videogame - PS4', 'https://content.gucca.dk/covers/big/l/e/lego-the-movie-2-the-videogame_433320.jpg', 'The Lego Movie 2 - Videogame', 'De invaderende rumvæsener har efterladt Briksburg i ruiner, og det er nu op til Emmet og en gruppe af helte at rede deres verden og venner fra de mystiske indbyggere i Systar systemet. Spillere skal rejse ud i rummet og opdage nye verdener, samtidig med at de skal teste deres mesterbygningsevner.', '260.00', '2019-06-06 11:08:00', 1),
(7, 'Call Of Duty: Black Ops 4 - PS4', 'https://content.gucca.dk/covers/big/c/a/call-of-duty-black-ops-4_418361.jpg', 'Call Of Duty: Black Ops 4', 'Call of Duty: Black Ops 4 multiplayer hæver standarden og leverer den mest spændende kampoplevelse med fokus på taktisk gameplay og spillervalg.<br>\r\n        <br>\r\n        Spillet tilbyder et nyt niveau af online action på tværs af en række nye våben, kort og modes.<br>\r\n        <br>\r\n        For første gang fungerer multiplayer som centrum for spillets fortælling, da du afdækker en dybere forbindelse til hver specialists rolle og deres unikke spillestile.<br>\r\n        <br>\r\n        Med tilbagevendingen af ??Pick 10 Create-a-Class-systemet - og i kombination med den nye Gear-kategori - bliver gameplay mere tilpasset end nogensinde, hvilket giver dig mulighed for at vælge hvordan du vil køre dine specialister.<br>\r\n        <br>\r\n        Kombineret med evnen til at låse op for ødelæggende Scorestreaks undervejs, vil du have mulighed for at være farlig alene, eller ustoppelig som del af et hold.', '240.00', '2019-06-06 11:08:07', 1),
(8, 'Lego Harry Potter Collection - PS4', 'https://content.gucca.dk/covers/big/l/e/lego-harry-potter-collection_361928.jpg', 'Lego Harry Potter Collection', 'Denne udgave af Lego Harry Potter indeholder Harry og vennernes oplevelser i alle deres syv år på Hogwarts.<br>\r\n        <br>\r\n        Spillet indeholder alle de syv spil på én disk og indeholder to DLC-ekstrapakker.', '170.00', '2019-06-06 11:08:13', 1),
(9, 'GTA 5 / Grand Theft Auto V - PS4', 'https://content.gucca.dk/covers/big/g/r/grand-theft-auto-v-gta-5_281455.jpg', 'GTA 5 / Grand Theft Auto V', 'Udviklet af seriens skaber, Rockstar North, kommer det længe ventede Grand Theft Auto V. Handlingen finder sted i det sydlige Californien i den største og mest blomstrende spil-verden serien nogensinde har set. Spil fans har ventet i spænding, og forventningerne har som altdi været høje - og må siges at blive indfriet, som altid.<br>\r\n        <br>\r\n        Nyd grafikken over den vidtstrakte by Los Santos der strækker sig til toppen af bjergene,  til havets bund- spillet formår at hæve standarden i videospil industrien betydelig.', '200.00', '2019-06-06 11:08:36', 1),
(10, 'test', 'https://bit.ly/2wKBEBb', 'flower', 'test', '45.87', '2019-06-11 12:31:38', 1),
(11, 'bro', 'https://bit.ly/2K6TKWE', 'bro', 'bro', '45.48', '2019-06-11 12:46:03', 1),
(12, 'test', 'test', 'test', 'dgfg', '44.00', '2019-06-12 09:50:30', 1),
(13, 'test', 'test', 'test', 'gdfg', '4.00', '2019-06-18 07:43:56', 6);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `userId` int(5) NOT NULL,
  `dbUsername` varchar(50) NOT NULL,
  `accessLevel` int(1) NOT NULL DEFAULT '3',
  `dbPass` varchar(255) NOT NULL,
  `dbEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`userId`, `dbUsername`, `accessLevel`, `dbPass`, `dbEmail`) VALUES
(1, 'Admin', 1, 'Admin123', 'admin@hotmail.com'),
(2, 'Asger', 2, 'Asger123', 'asger@hotmail.com'),
(3, 'sko', 3, 'sko123', 'sko@hotmail.com'),
(4, 'Ko', 3, 'Ko123', 'Ko@hotmail.com'),
(5, 'Kim', 3, 'Kim123', 'Kim@hotmail.com'),
(6, 'h', 3, '123', 'h@hotmail.com');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genreId`);

--
-- Indeks for tabel `productgenre`
--
ALTER TABLE `productgenre`
  ADD PRIMARY KEY (`productId`,`genreId`),
  ADD KEY `genreId` (`genreId`);

--
-- Indeks for tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `authorId` (`authorId`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `genreId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tilføj AUTO_INCREMENT i tabel `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `productgenre`
--
ALTER TABLE `productgenre`
  ADD CONSTRAINT `productgenre_ibfk_1` FOREIGN KEY (`genreId`) REFERENCES `genre` (`genreId`),
  ADD CONSTRAINT `productgenre_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`) ON DELETE CASCADE;

--
-- Begrænsninger for tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`authorId`) REFERENCES `users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
