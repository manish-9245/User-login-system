CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  -- `profile_photo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;
