sed -i 's/;daemonize = yes/daemonize = no/g' /etc/php/7.3/fpm/pool.d/www.conf
echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf

## modify internal wp config file ## 

sed -i "s/wordpress/$MYSQL_DB_NAME/" /var/www/wp_site/wordpress/wp-config.php
sed -i "s/admin/$MYSQL_USER/" /var/www/wp_site/wordpress/wp-config.php
sed -i "s/database_password/$MYSQL_USER_PASS/" /var/www/wp_site/wordpress/wp-config.php


#start php-fpm
/usr/sbin/php-fpm7.3 -F