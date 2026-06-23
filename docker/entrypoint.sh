#!/bin/sh
set -e

if [ -f /var/www/html/composer.json ]; then
  composer install --no-interaction --prefer-dist || true
fi

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache || true

exec "$@"
