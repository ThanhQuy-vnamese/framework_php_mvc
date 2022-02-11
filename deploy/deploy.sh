#!/bin/bash
cd /var/www/phpmvc
git fetch
git reset --hard origin/setup-ci
if [ ! -d "/var/www/phpmvc/vendor" ]; then
    composer install
else
    rm -rf vendor
    composer install
fi

if [ ! -d "/var/www/phpmvc/node_modules" ]; then
    npm install
else
    rm -rf node_modules
    npm install
fi

npm run build
chown -R apache.apache /var/www/phpmvc
chmod -R 755 /var/www/phpmvc

if [  -f "/var/www/phpmvc/.env" ]; then
    rm -rf /var/www/phpmvc/.env
    cp -rf /var/www/phpmvc/.env.server .env || exit 1
else
    cp -rf /var/www/phpmvc/.env.server .env || exit 1
fi

service httpd restart
