--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `phonenumber` varchar(222) NOT NULL,
  `emailaddress` varchar(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `verification_code` varchar(222) NOT NULL,
) 

ENGINE=InnoDB DEFAULT CHARSET=latin1;


