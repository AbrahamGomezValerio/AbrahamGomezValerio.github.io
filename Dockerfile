# Imagen base de PHP con Apache
FROM php:8.0-apache

# Copia todos los archivos de tu proyecto a la carpeta de Apache
COPY . /var/www/html/

# Exponemos el puerto 80
EXPOSE 80
