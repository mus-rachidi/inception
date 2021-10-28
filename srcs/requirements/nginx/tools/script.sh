apt-get update
apt-get install -y nginx
mv /private.pem /etc/nginx/sites-available/
mv /public.key /etc/nginx/sites-available/
mv default /etc/nginx/sites-available/default