FROM php:7.3-fpm-stretch

COPY .docker/php/php.ini /usr/local/etc/php/php.ini

#COPY . /srv/app

COPY .docker/php/composer-installer.sh /usr/local/bin/composer-installer

RUN chmod +x /usr/local/bin/composer-installer \
&& composer-installer \
&& mv composer.phar /usr/local/bin/composer \
&& chmod +x /usr/local/bin/composer \
&& composer --version

# Add the project
ADD app /srv/app

WORKDIR /srv/app

RUN composer install \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

#RUN chown -R www-data:www-data /srv/app \
    #&& chmod -R 775 /srv/app/storage /srv/app/bootstrap/cache