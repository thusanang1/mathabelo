
FROM php:8.3-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set website working directory
WORKDIR /var/www/html

# Copy website files into Apache
COPY . /var/www/html/

# Configure Apache to listen on Render's port
RUN sed -i 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf \
    && sed -i 's/<VirtualHost \*:80>/<VirtualHost *:10000>/' /etc/apache2/sites-available/000-default.conf

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose application port
EXPOSE 10000

# Start Apache
CMD ["apache2-foreground"]
