FROM php:apache
RUN apachectl restart
RUN DEBIAN_FRONTEND=noninteractive \ 
&& apt update \
&& docker-php-ext-install mysqli
WORKDIR /var/www/html
RUN apt update
COPY . .