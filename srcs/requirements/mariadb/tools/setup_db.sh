#!/bin/bash

service mysql start

# DB create
echo "CREATE DATABASE IF NOT EXISTS $MARIADB_ID DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci" | mysql -u root
# create user
echo "CREATE USER IF NOT EXISTS '$MARIADB_USER'@'%' IDENTIFIED BY '$MARIADB_PW'" | mysql -u root
# authentification : GRANT user autentification command
echo "GRANT ALL ON $MARIADB_ID.* TO '$MARIADB_USER'@'%'" | mysql -u root


service mysql stop

# launch mysqsl daemon with mysqld (or mysqld_safe for security)
exec mysqld -u root
