DROP TABLE IF EXISTS `csit314`.`open_store`;
CREATE TABLE IF NOT EXISTS `csit314`.`open_store` (`CITY` varchar(12), `POPULATION` int(6), `LEASE` int(2), `COMPETITION` int(2)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
INSERT INTO `csit314`.`open_store` (`CITY`, `POPULATION`, `LEASE`, `COMPETITION`) VALUES ('Iswich', 350000, 24, 10),
 ('Mackay', 120000, 12, 5),
 ('Rockhampton ', 74000, 6, 2);