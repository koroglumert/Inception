//bu olmadan olur mu ya da dosya silinmeden


CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER IF NOT EXISTS 'crendeha'@'%' IDENTIFIED BY '12345';
GRANT ALL PRIVILEGES ON wordpress.* TO 'crendeha'@'%';
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'root12345';