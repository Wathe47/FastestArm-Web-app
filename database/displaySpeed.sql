

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `lastid` (
  `id` int(11) NOT NULL,
  `lastID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



INSERT INTO `lastid` (`id`, `lastID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18);



CREATE TABLE `showspeed` (
  `throwCount` int(11) NOT NULL,
  `speed` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



INSERT INTO `showspeed` (`throwCount`, `speed`) VALUES
(1, '86'),
(2, '88'),
(3, '123.5'),
(4, '67.5'),
(5, '65'),
(6, '113'),
(7, '55'),
(8, '70'),
(9, '10'),
(10, '12'),
(11, '45'),
(12, '89'),
(13, '122'),
(14, '120'),
(15, '120'),
(16, ''),
(17, '124.3'),
(18, '85');

ndexes for table `lastid`
--
ALTER TABLE `lastid`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `showspeed`
  ADD PRIMARY KEY (`throwCount`);


ALTER TABLE `lastid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;


ALTER TABLE `showspeed`
  MODIFY `throwCount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;


