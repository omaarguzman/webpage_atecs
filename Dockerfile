# Dockerfile
FROM php:8.1-apache

# Instalar extensiones necesarias para Laravel
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-install zip pdo_mysql

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Instalar Node.js y npm (para Tailwind CSS)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# Habilitar mod_rewrite para Apache
RUN a2enmod rewrite

# Configurar permisos para el proyecto
WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www/html

# Exponer puerto 80
EXPOSE 80
EXPOSE 5173
