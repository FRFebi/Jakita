# Use an official PHP image with Apache
FROM php:8.2-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Install necessary extensions for CodeIgniter
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mbstring zip gd

# Enable Apache mod_rewrite (needed for CodeIgniter)
RUN a2enmod rewrite

# Copy project files into the container
COPY . /var/www/html

COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Set proper permissions for the application
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/writable \
    && chmod -R 775 /var/www/html/public/images

# Expose the container's port 80
EXPOSE 80

# Set Apache to run in the foreground
CMD ["apache2-foreground"]