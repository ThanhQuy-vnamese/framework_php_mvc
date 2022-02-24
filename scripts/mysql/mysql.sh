#!/bin/bash
MYSQL="mysql -uroot -pAbc@1234"

$MYSQL -e "DROP DATABASE IF NOT EXIST phpmvc;"
$MYSQL -e "CREATE DATABASE IF NOT EXIST phpmvc;"
$MYSQL -e "source /home/install/mysql/dump.sql;"

