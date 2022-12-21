FROM debian:buster


# install apt-get package to use
RUN apt-get update && apt-get install -y \
	php7.3 \
	php-fpm \
	php-cli \
	php-mysql \
	php-mbstring \
	php-xml \
	vim
RUN apt-get install -y curl

COPY ./config/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools/setup_wp.sh /tmp

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
# RUN php wp-cli.phar --info
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

RUN mkdir -p /var/www/html/wordpress
RUN mkdir -p /run/php

WORKDIR /var/www/html/wordpress
ENTRYPOINT ["sh", "/tmp/setup_wp.sh"]