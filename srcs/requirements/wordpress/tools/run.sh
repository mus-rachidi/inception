cd /var/www/html/
sed -i "s/database_name_here/$DB_NAME/" wp-config.php
sed -i "s/username_here/$MSQL_USER/" wp-config.php
sed -i "s/password_here/$MSQL_USER_PASS/" wp-config.php
sed -i "s/hostname_here/$DB_HOST/" wp-config.php
/usr/sbin/php-fpm7.3 --nodaemonize