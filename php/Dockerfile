FROM php:8.2-cli

# Instalar dependencias de sistema
RUN apt-get update && apt-get install -y \
    git unzip wget libicu-dev libzip-dev libpq-dev \
    libonig-dev libxml2-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
    && docker-php-ext-install intl pdo pdo_mysql zip opcache mbstring \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Instalar Composer (gestor de dependencias de PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instalar Symfony CLI
RUN wget https://get.symfony.com/cli/installer -O - | bash \
    && mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

WORKDIR /var/www/html
