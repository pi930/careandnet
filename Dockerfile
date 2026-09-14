FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libonig-dev \
    libzip-dev

RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql zip

RUN a2enmod rewrite

RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . /var/www/html
WORKDIR /var/www/html

# 👉 Étape qui casse le cache
RUN rm -f storage/framework/cache/data/*

RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data storage bootstrap/cache

# 👉 Cette commande sera exécutée à chaque build
RUN php artisan migrate --force

RUN php artisan config:clear

EXPOSE 80

CMD ["apache2-foreground"]

