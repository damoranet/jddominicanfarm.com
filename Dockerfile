FROM php:8.1-apache

# Root directory configuration
ENV APACHE_DOCUMENT_ROOT=/var/www/html

# Install system dependencies
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libicu-dev \
        libzip-dev \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        unzip \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip intl mysqli pdo_mysql opcache

# Apache configuration
RUN a2enmod rewrite headers
COPY docker/apache.conf /etc/apache2/conf-available/codeigniter.conf
RUN a2enconf codeigniter

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html

# Set permissions for the writable folder
RUN chown -R www-data:www-data /var/www/html/writable \
    && find /var/www/html/writable -type d -exec chmod 775 {} \; \
    && find /var/www/html/writable -type f -exec chmod 664 {} \;

EXPOSE 80
CMD ["apache2-foreground"]