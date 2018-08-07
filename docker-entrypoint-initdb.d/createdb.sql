CREATE USER 'admin'@'localhost' IDENTIFIED WITH mysql_native_password BY 'barbecue';
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' WITH GRANT OPTION;
CREATE USER 'admin'@'%' IDENTIFIED WITH mysql_native_password BY 'barbecue';
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%' WITH GRANT OPTION;
#
CREATE DATABASE IF NOT EXISTS `churrasco` COLLATE 'utf8_general_ci' ;
GRANT ALL ON `churrasco`.* TO 'admin'@'%' ;
FLUSH PRIVILEGES ;