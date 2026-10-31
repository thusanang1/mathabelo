
FROM php:8.3-apache

# Set website working directory
WORKDIR /var/www/html

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy website files into Apache directory
COPY . /var/www/html/

# Configure Apache to use Render's port
RUN sed -i 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf

RUN sed -i 's/:80>/:10000>/' \
    /etc/apache2/sites-available/000-default.conf

# Configure Apache permissions
RUN printf '%s\n' \
    '<Directory /var/www/html>' \
    'Options FollowSymLinks' \
    'AllowOverride All' \
    'Require all granted' \
    '</Directory>' \
    >> /etc/apache2/apache2.conf

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && find /var/www/html -type f -exec chmod 644 {} \;

EXPOSE 10000

CMD ["apache2-foreground"]
