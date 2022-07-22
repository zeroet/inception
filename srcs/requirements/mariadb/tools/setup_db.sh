#!/bin/bash

service mysql start

#mysql migration utf8 -> utf8_unicode_ci option DEFAULT CHARACTER SET utf8(general) COLLATE utf8_unicode_ci
echo "CREATE DATABASE IF NOT EXISTS $MARIADB_ID" | mysql -u root

echo "CREATE USER IF NOT EXISTS '$MARIADB_USER'@'%' IDENTIFIED BY '$MARIADB_PW'" | mysql -u root

echo "GRANT ALL ON $MARIADB_ID.* TO '$MARIADB_USER'@'%'" | mysql -u root

service mysql stop

exec /usr/sbin/mysqld -u root
