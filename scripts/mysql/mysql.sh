#!/bin/bash
MYSQL="mysql -uroot -pAbc@1234"

$MYSQL -e "DROP DATABASE IF EXISTS phpmvc;"
$MYSQL -e "CREATE DATABASE IF NOT EXISTS phpmvc;"
$MYSQL -e "USE phpmvc;"
$MYSQL -e "source /home/install/mysql/dump.sql;"

