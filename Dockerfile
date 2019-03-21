FROM php:5.6-apache
COPY web /var/www/html
EXPOSE 80

RUN chmod 777 -R /var/www/html/*
