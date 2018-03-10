-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 04:34 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr14_yazan_al_kassir_bigevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `e_start_date` date NOT NULL,
  `e_end_date` date NOT NULL,
  `e_descreption` text NOT NULL,
  `e_image` text NOT NULL,
  `e_contact_email` varchar(255) NOT NULL,
  `e_phone_number` bigint(11) NOT NULL,
  `e_address` varchar(255) NOT NULL,
  `e_url` text NOT NULL,
  `e_type` varchar(255) NOT NULL,
  `e_capacity` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `e_name`, `e_start_date`, `e_end_date`, `e_descreption`, `e_image`, `e_contact_email`, `e_phone_number`, `e_address`, `e_url`, `e_type`, `e_capacity`) VALUES
(1, 'Wiener Domorchester ', '2018-03-15', '2018-03-16', 'Conductor: Markus Landerer\r\n\r\nOsterkonzert\r\n\r\nWolfgang Amadeus Mozart: Vesperae solennes de Confessore, KV 339\r\nJoseph Haydn: Stabat mater g-Moll, Hob. XXbis', 'http://arabianprivateadventure.com/wp-content/uploads/2017/06/event-management-1.jpg', 'tickets@musikverein.at', 4315058190, 'Grosser Saal\r\nMusikvereinsplatz 1 \r\n1010 Wien', 'www.musikverein.at', 'Musik', 10000),
(2, 'Man Ray', '2018-02-14', '2018-04-24', 'Man Ray (born as Emmanuel Radnitzky in 1890 in Philadelphia, died in 1976 in Paris) has always been primarily received as a photographer. He achieved worldwide renown for his portraits of artists and his rayographs of the 1920s, produced without the use of a camera. However, Man Ray painted, drew, designed, made films and objects, wrote, invested his talents enthusiastically in typography, book and magazine design, and pursued a veritable career as experimental fashion photographer for Harper’s Bazaar and Vogue – thus providing enviable scope for Bank Austria Kunstforum Wien to visualise all this in its exhibition. Man Ray exploited countless artistic media and techniques in an inventive and playful manner. In his autobiography, appearing in 1963, he wrote: »... the instrument did not matter – one could always reconcile the subject with the means and get a result that would be interesting (...) One should be superior to his limited means, use imagination, be inventive.', 'https://photos.smugmug.com/Travel/Barceloa-2008/i-WWTm8kv/1/be2c2cef/XL/IMG_1702-XL.jpg', 'office@bankaustria-kunstforum.at', 4315373326, 'Freyung 8 \r\n1010 Wien', 'www.kunstforumwien.at', 'Music', 5000),
(3, 'La Traviata', '2018-03-13', '2018-03-17', 'The well known love tragic love story between the high-class coutesan Violetta and Alfredo, son of a respected Parisian family. Sung in Italian with German surtitles.\r\n\r\nWith Alfredo the beautiful high-class courtesan Violetta finally finds true love. After a brief spell of happiness enjoyed together Alfredo\'s father manages, nevertheless, to convince Violetta of the social damage this relationship causes his family. In desperation, she leaves Alfredo and throws herself into the Parisian demimonde with disastrous effects on her health, already ravaged by consumption. Reconciliation comes too late.\r\n\r\nAdvance sales start from the 1st workday of each month for performances both for the current month and also the following month (for October performances from September 1st, tickets for September may be purchased from June 1st). \r\nTelephone ticket sales for holders of credit cards: +43 1 513 1 513\r\nBox Offices:1., Operngasse 2 & Volksoper (9., Währinger Strasse 78) & Burgtheater (1., Universitätsring 2): Mon-Fri 8 a.m.-6 p.m., Sat, Sun & holiday 9 a.m.-noon \r\nInternet ticket sales - see web-addresses below.', 'http://critics-associated.com/wp-content/uploads/2017/07/Yasuko-Kageyama-Teatro-dellOpera-di-Roma-2015-16_2125-620x400.jpeg', 'tickets@volksoper.at', 431514443670, 'Währinger Straße 78 \r\n1090 Wien', 'www.volksoper.at', 'Opera', 20000),
(5, 'All Japan Youth Orchestra', '2018-03-29', '2018-03-30', 'Christoph Zimper, Klarinette\r\n\r\nWolfgang Amadeus Mozart: Ouvertüre zur Oper „Die Zauberflöte“, KV 620,\r\n  Konzert für Klarinette und Orchester A-Dur, KV 622\r\nJohann Strauß Sohn: Kaiser-Walzer, op. 437 \r\nJohannes Brahms: Ungarischer Tanz Nr. 1 g-Moll, Ungarischer Tanz Nr. 5 fis-Moll', 'http://gia.info.gov.hk/general/201608/26/P2016082200392_photo_1106213.jpg', 'tickets@musikverein.at', 435058190, 'Brahms-Saal\r\nMusikvereinsplatz 1 \r\n1010 Wien', 'www.musikverein.at', 'Orchestra', 15000),
(6, 'The Art of Viennese Watercolour', '2018-03-09', '2018-03-18', 'Transparent lightness, brilliant colours, and a generally atmospheric impression are the special qualities of 19th-century Viennese watercolour painting. Virtuosic city views and landscapes, detail-rich portraits, genre paintings, and floral works comprise the rich motivic repertoire featured in this glorious blossoming of Austrian art.\r\nThe Viennese watercolour’s heyday was the Biedermeier era: Jakob Alt, Matthäus Loder, Thomas Ender, and Peter Fendi number among its most important artistic figures. Likewise outstanding are the exquisite works by Rudolf von Alt from his over 70-year career. His masterful watercolours run from the Biedermeier era all the way to the rise of the Secession movement around 1900.\r\n\r\nThis exhibition presents a veritable parade of exceptionally beautiful pictures, including the Albertina’s own treasures as well as important loan works, all of which pay impressive tribute to the high standing of the Viennese watercolour in the context of 19th century art.', 'https://events.wien.info/media/full/schuetz.jpg', 'info@albertina.at', 431534830, 'Albertinaplatz 1 \r\n1010 Wien', 'www.albertina.at', 'Art', 50000),
(7, 'Die Zauberflöte', '2018-04-02', '2018-04-03', 'Production: Helmuth Lohner\r\nStage design: Johan Engels\r\nCostumes: Marie-Jeanne Lecca\r\n\r\nMozart\'s penultimate opera, and a fairy-tale work that remains popular with young and old alike. The prince Tamino, with the aid of a magic flute and the bird catcher Papageno as his guide, finds the Temple of Isis where Pamina, the woman he loves but has never met, resides. Pamina, daughter of the Queen of the Night, together with Tamino, undergo tests to prove their virtue and constancy and good triumphs over evil through the power of love.\r\n\r\nAdvance sales start from the 1st workday of each month for performances both for the current month and also the following month (for October performances from September 1st, tickets for September may be purchased from June 1st). \r\nTelephone ticket sales for holders of credit cards: +43 1 513 1 513\r\nBox Offices:1., Operngasse 2 & Volksoper (9., Währinger Strasse 78) & Burgtheater (1., Universitätsring 2): Mon-Fri 8 a.m.-6 p.m., Sat, Sun & holiday 9 a.m.-noon \r\nInternet ticket sales - see web-addresses below.', 'https://afilii.com/wp-content/uploads/2017/03/Kinderliteratur-Die-Zauberfl%C3%B6te-arsEdition-quad-768x768.jpg', 'tickets@volksoper.at', 43151444367, 'Währinger Straße 78 \r\n1090 Wien', 'www.volksoper.at', 'Opera', 30000),
(8, 'Ballet: Raymonda', '2018-04-15', '2018-04-16', 'Rudolf Nurejew\r\n\r\nRudolf Nureyev\'s \"Raymonda\" (music: Alexander Glasunow) will return to the Wiener Staatsoper for the first time since Manuel Legris took over as a ballet director. The dramatic love story between the young girl Raymonda and cavalier Jean de Brienne ends despite the kidnapping of Raymonda with a happy ending in love and harmony.\r\n\r\n \r\n\r\nTickets can be ordered immediatly on the Internet: www.wiener-staatsoper.at\r\nRemaining non-assogned tickets can normally be purchased two month before the performance date (e.g. on 1st September for 1st November, on 30th September for 30th November. Tickets for performances between 1st and 30th September will be sold from 1st to 30th May and for 1st to 31st October from 1st to 30th June)\r\n- via Internet: www.staatsoper.at, www.culturall.com\r\n- for credit card holders: Tel: +43 1 513 1 513, Mon. to Sun. 10 a.m. to 7 p.m.\r\n- box office sales: Bundestheater ticket office (1., Operngasse 2), Burgtheater (1., Universitätsring 2), Volksoper (9., Währinger Strasse 78): Mon. to Fri. 8 a.m. to 6 p.m., Sat., Sun. and holidays: 9 a.m. to 12 noon \r\nStanding room tickets are sold starting 80 minutes before curtain time at the standing room box office (entrance Operngasse) only.', 'http://www.jackdevant.com/wp-content/uploads/2017/01/Raymonda-Olesya-Novikova-Scarf-105.jpg', 'cultular@gmx.com', 431514442250, 'Opernring 2 \r\n1010 Wien', 'www.wiener-staatsoper.at', 'ballet', 25000),
(10, 'The Magic Flute', '2018-03-15', '2018-03-16', 'Marionette Theater  Opera in two acts by Wolfgang AmadÃ© Mozart  Text by Emanuel Schikaneder  First performed in Vienna on the 30th of September 1791  Directed by: Prof. Gerhard TÃ¶tschinger', 'https://www.limelightmagazine.com.au/wp-content/uploads/2015/12/Magic%20Flute%202.jpg', 'office@marionettentheater.at', 4318173247, 'Schloss SchÃ¶nbrunn, Hofratstrakt  1130 Wien', 'www.marionettentheater.at', 'Kids and Family', 100000),
(11, 'Shy at Work', '2018-02-03', '2018-04-27', 'Bruno Gironcoli is one of the most idiosyncratic artists of the twentieth century. He gained public recognition with his late large-scale sculptures, in which archetypes and trivial elements meld to form futuristic conglomerates. It is less well known that alongside his work in sculpture Gironcoli also produced an extensive body of graphic works. This retrospective exhibition at mumok will for the first time focus on Gironcoli the painter and draughtsman. His works on paper will enter into dialogue with outstanding examples of the artistâ€™s wire sculptures, polyester objects, installations, and monumental sculptures, also opening up new perspectives on the sculptural work.  Right from the beginning, Gironcoliâ€™s works on paper were more than just designs for his sculptures. On paper, the Austrian artist took his ideas into dimensions that by far transcend any concrete work on physical materials. On paper, he animated his own sculptural work: Divorced from the laws of physics, his schematic figures, animals, symbols, and apparatuses enter into hypothetical connections and merge to form fantastic and surreal scenes. Gironcoliâ€™s works on paper are literally â€œsurfaces of considerationsâ€ that seek to rescue potential forms of life from alienated signs.', 'https://pictures.abebooks.com/GALERIEMAGNET/16358966394.jpg', 'info@mumok.at', 43152500, 'Museumsplatz 1  1070 Wien', 'www.mumok.at', 'Graphic Art', 5000),
(12, 'Unrest after the Storm', '2018-02-02', '2018-08-12', 'As one of the most radical agents of Viennese Actionism, GÃ¼nter Brus made his own body a site of artistic debate starting in the early 1960s. On the occasion of his 80th birthday, the 21er Haus is launching a major retrospective exploring the complete oeuvre of this exceptional Austrian artist.  In his early works, it was the body that bore the painterly process; later, GÃ¼nter Brus expanded his practice to imbue his actions and performances with other levels of meaning. The body became both membrane and metaphor for social transactions, and thus also the projection surface for his social critique. In 1970, Brus was condemned for his participation in the Viennese Action known as Kunst und Revolution (Art and Revolution), which caused him to leave Vienna. In his exile in Berlin, he produced a number of series of drawings based on his experiences in Vienna, as well as drafts for theatrical productions.  This major retrospective at the 21er Haus presents GÃ¼nter Brusâ€™ quintessential work cycles and illuminates connections between his performance art, his theatre projects, his â€˜Bild-Dichtungenâ€™ (image poems), as well as his collaborative drawings. A separate space within the exhibition presents collaborative projects of the artist with cohorts such as Arnulf Rainer, JÃ¶rg Schlick, and Dominik Steiger.', 'http://artbahrain.org/wp2017/wp-content/uploads/2018/01/GUNTER-BRUS-belvedere-21.jpg', 'info@belvedere.at', 43179557770, 'ArsenalstraÃŸe 1  1030 Wien', 'www.belvedere21.at', 'Graphic Art', 7000),
(13, 'WeAreDevelopers', '2018-03-16', '2018-03-18', 'We are united tech professionals, empowered through code, and as diverse as the languages we yield. In one of the leading startup capitals of Europe, the WeAreDevelopers World Congress 2018 brings together top global players in the IT scene for an exciting event.  The WeAreDevelopers World Congress has something for everybody. We cover over 10 tracks to fit all tastes and tech stacks, with a variety of workshops, panels, and keynotes to set you up with the knowledge and skills to excel in your career.  Speakers  WeAreDevelopers speakers are industry leaders, tech pioneers, opinion-makers and revolutionary thinkers - our lineup consists of an amazing group of individuals who together makes WeAreDevelopers what it is. Each of these individuals, in their own special way, whether small or big, have changed the world and helped shaped it into what we know it to be today', 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F34678263%2F192766033357%2F1%2Foriginal.jpg?w=800&rect=100%2C0%2C630%2C315&s=2ae8b8bdbee377d3381447788ead5575', 'wearedevelopers@gmail.com', 4325325432, 'Bruno-Kreisky-Platz 1  1220 Vienna', 'www.eventbrite.co.uk', 'Congress', 80000),
(14, 'Vienna Gin Festival', '2018-03-02', '2018-03-05', 'Im Mai 2018 laden wir zum 1. VIENNA GIN FESTIVAL ins ehrwÃ¼rdige Semperdepot im Herzen Wiens ein...  ...und bringen dabei die besten Ã¶sterreichischen und internationalen Gin Produzenten nach Wien.  Neben klassischen Verkostungen und einzigartigen Masterclasses geben wir auch den besten Gin Bars eine eigene BÃ¼hne, um sich und ihre legendÃ¤ren Signature Drinks zu prÃ¤sentieren.', 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F39947326%2F242105689110%2F1%2Foriginal.jpg?w=800&rect=295%2C71%2C1378%2C689&s=3106526bbbd9cf89fad570b4ea61ebfa', 'office@kesch.at', 430231321, 'Semperdepot  Lehargasse 6  1060 Wien', 'http://www.kesch.at/', 'FESTIVAL', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Yazan ', 'Al kassir', 'admin@admin.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
(2, 'yazan', 'al kassir', 'yazan@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
