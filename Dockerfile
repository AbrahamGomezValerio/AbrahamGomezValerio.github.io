# Usa una imagen de PHP con Apache
FROM php:8.0-apache

# Instala las extensiones necesarias para PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copia el contenido de tu proyecto en el directorio de Apache
COPY . /var/www/html/

# Exponemos el puerto 80 para HTTP
EXPOSE 80
