# Official PHP image with Apache
FROM php:8.1-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy existing application directory contents
COPY . /var/www/html

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www/html

# Change the ownership and permissions of the Laravel folders
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Expose port 80
EXPOSE 80

# Start Apache server in the foreground
CMD ["apache2-foreground"]

