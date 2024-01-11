FROM debian:buster

RUN apt update && apt install -y nginx openssl

#SSL
RUN mkdir /etc/nginx/ssl
RUN chown -R www-data:www-data /etc/nginx/ssl

RUN openssl req -x509 -nodes -subj "/C=IT/L=Italy/O=42School/OU=IT Department/CN=stribuzi.42.fr" \
							-days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/inception.key -out /etc/nginx/ssl/inception.crt

#NGINX
RUN chown -R www-data:www-data /etc/nginx
COPY ./nginx.conf /etc/nginx/sites-available
RUN  ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled && rm /etc/nginx/sites-enabled/default

RUN chown -R www-data:www-data /var/www/ && chmod -R g+w /var/www/

EXPOSE 443

#COPY ./srcs/start.sh .
#RUN chmod 755 start.sh
ENTRYPOINT	/usr/sbin/nginx -g "daemon off;"