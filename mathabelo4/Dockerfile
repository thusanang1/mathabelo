
# Use PHP 8.3 with Apache
FROM php:8.3-apache

# Set the website working directory
WORKDIR /var/www/html

# Enable Apache URL rewriting
RUN a2enmod rewrite

# Copy all website files into Apache's document root
COPY . /var/www/html/

# Configure Apache to listen on Render's port 10000
RUN sed -i 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf \
    && sed -i 's/<VirtualHost \*:80>/<VirtualHost *:10000>/' \
    /etc/apache2/sites-available/000-default.conf

# Set index.php as the default homepage
RUN printf '%s\n' \
    'DirectoryIndex index.php index.html' \
    '<Directory /var/www/html>' \
    '    Options FollowSymLinks' \
    '    AllowOverride All' \
    '    Require all granted' \
    '</Directory>' \
    >> /etc/apache2/apache2.conf

# Set correct file and folder permissions
RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && find /var/www/html -type f -exec chmod 644 {} \;

# Expose Render web service port
EXPOSE 10000

# Start Apache
CMD ["apache2-foreground"]
