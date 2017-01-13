FROM php:5.6.29-apache

RUN curl get.fuelphp.com/oil | sh

RUN a2enmod rewrite

COPY ./app /var/www/html/
COPY ./apache/site-config.conf /etc/apache2/sites-available/000-default.conf
