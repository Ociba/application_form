# Use an official PHP runtime as a parent image with Apache
FROM php:7.4-apache

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libonig-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mysqli mbstring zip exif pcntl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy existing application directory contents
COPY . /var/www/html

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www/html

# Run Composer install to install the dependencies
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Change document root to public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Update Apache configuration with new document root
RUN sed -i -e 's|/var/www/html|${APACHE_DOCUMENT_ROOT}|g' /etc/apache2/sites-available/000-default.conf

# Enable mod_rewrite for URL rewrite and mod_headers for .htaccess extra headers like Access-Control-Allow-Origin-
RUN a2enmod rewrite headers

# Expose port 80
EXPOSE 80

# Start Apache service
CMD ["apache2-foreground"]
