if [  ! -f /done ]
then
    cp my.cnf /etc/mysql/
    service mysql start
    mysql -u root -e "CREATE USER '${MSQL_USER}'@'%' IDENTIFIED BY '${MSQL_USER_PASS}';"
    mysql -u root -e "CREATE DATABASE ${DB_NAME};"
    mysql -u root -e "USE ${DB_NAME}; GRANT ALL PRIVILEGES ON * TO '${MSQL_USER}'@'%'; "
    mysqladmin --user=root password ${MSQL_ROOT_PASS}    
    mysql -u root --password=${MSQL_USER} ${DB_NAME} < /data.sql    
    chown -R mysql:mysql /var/lib/mysql/*
    service mysql stop
    touch /done
fi
chown -R mysql:mysql /var/lib/mysql/*
mysqld_safe