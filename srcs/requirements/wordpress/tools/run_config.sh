apt-get -y update
apt-get install -y php-fpm php-mysql wget unzip
service php7.3-fpm start
echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf
mkdir -p /var/www/html
chmod 644 /wp-config.php
cp wp-config.php /var/www/html/
cd /var/www/html/
wget https://wordpress.org/latest.zip
unzip latest.zip && rm -rf latest.zip
mv wordpress/* . && rm -rf wordpress


