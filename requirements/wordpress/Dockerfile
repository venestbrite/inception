FROM	debian:buster

RUN		apt-get update && apt-get upgrade -y 
RUN		apt-get install -y wget php php7.3-fpm php-mbstring php-mysql

RUN		mkdir -p /var/www/wp_site
RUN		mkdir -p /run/php


RUN			wget https://wordpress.org/latest.tar.gz && \
			tar -xzvf latest.tar.gz  && \
			mkdir -p /var/www/wp_site && \
			mv wordpress /var/www/wp_site/ && \
			rm -rf latest.tar.gz

# COPY	./srcs/wp-config.php /var/www/wp_site/wp-config.php

COPY index.html /var/www/wp_site/
COPY hex.js /var/www/wp_site/

COPY wp-config.php /var/www/wp_site/wordpress/

COPY index.html /var/www/wp_site/

RUN		chmod g+w /var/www/wp_site/wordpress/wp-config.php

COPY	./start.sh .

RUN chmod 777 start.sh 

EXPOSE	9000

# CMD		bash start.sh

ENTRYPOINT ./start.sh

# CMD /usr/sbin/php-fpm7