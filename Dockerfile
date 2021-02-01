FROM php:apache
RUN apachectl restart
RUN DEBIAN_FRONTEND=noninteractive \ 
&& apt install docker-php-ext-install mysqli
WORKDIR /var/www/html
COPY . .
EXPOSE 80