#imagen de docker que uso para la pagina
FROM php:7.4-apache

#instala las extensiones de php y mysql
RUN docker-php-ext-install mysqli pdo pdo_mysql

#copia los files de la carpeta en donde esta el codigo de la pagina
COPY ./src /var/www/html/
