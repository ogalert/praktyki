CREATE TABLE Users (ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE (username));
INSERT INTO `Users` (`ID`, `username`, `password`) VALUES (NULL, 'admin', 'test')
