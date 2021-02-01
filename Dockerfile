FROM php:apache
RUN docker-php-ext-install mysqli
RUN apachectl restart
WORKDIR /var/www/html
COPY . .
EXPOSE 80