# Use an official PHP runtime as a base image with Apache
FROM php:8.2-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Install system dependencies for PHP and additional utilities
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions including the calendar extension
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip calendar

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the application code to the container
COPY . /var/www/html

# Set the permissions for the application directory
RUN chown -R www-data:www-data /var/www/html

# Configure Apache: Set ServerName to suppress FQDN warning
RUN echo 'ServerName localhost' >> /etc/apache2/apache2.conf

# Change document root to public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Update the Apache configuration to use the new document root
RUN sed -i -e 's|/var/www/html|${APACHE_DOCUMENT_ROOT}|g' /etc/apache2/sites-available/000-default.conf \
    && sed -i -e 's|AllowOverride None|AllowOverride All|g' /etc/apache2/apache2.conf

# Expose port 80
EXPOSE 80

# Start the Apache server in the foreground
CMD ["apache2-foreground"]
