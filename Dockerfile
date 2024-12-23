# Use an official PHP runtime as a parent image with Apache
FROM php:7.4-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies for PHP extensions and Node.js for Laravel Mix
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libonig-dev \
    zip \
    unzip \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mysqli mbstring zip exif pcntl \
    # Installing Node.js for Laravel Mix
    && curl -sL https://deb.nodesource.com/setup_14.x | bash - \
    && apt-get install -y nodejs

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the application code to the container
COPY . /var/www/html

# Set the permissions for the application directory
COPY --chown=www-data:www-data . /var/www/html

# Install PHP dependencies with Composer
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Install JavaScript/CSS dependencies with npm and run Laravel Mix
COPY package.json package-lock.json /var/www/html/
RUN npm install
COPY webpack.mix.js /var/www/html/
RUN npm run production

# Change the document root to point to the public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Update the Apache configuration to use the new document root
RUN sed -i -e 's|/var/www/html|${APACHE_DOCUMENT_ROOT}|g' /etc/apache2/sites-available/000-default.conf \
    && sed -i -e 's|AllowOverride None|AllowOverride All|g' /etc/apache2/apache2.conf

# Enable Apache mod_rewrite and mod_headers for URL rewrites and .htaccess rules
RUN a2enmod rewrite headers

# Expose port 80 to the outside
EXPOSE 80

# Start the Apache server in the foreground
CMD ["apache2-foreground"]
