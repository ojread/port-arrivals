FROM php:7.2-apache

# Use the default production configuration.
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Copy our app into the document root.
COPY src/ /var/www/html/