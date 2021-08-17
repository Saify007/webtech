

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'amiaktagay', '$sexxxxxxxxxxxxxx', 'Noshu', 'Danob', 'image.jpeg', '2018-04-02');

-- --------------------------------------------------------

--
-
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `voters_id` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


CREATE TABLE `lawyers` (
  `id` int(11) NOT NULL,
  `voters_id` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
