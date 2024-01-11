# echo "CREATE user $MYSQL_USER IDENTIFIED by $MYSQL_USER_PASS;" >> init_file

# echo "CREATE DATABASE IF NOT EXISTS $MYSQL_DB_NAME;" >> init_file

# echo "GRANT ALL PRIVILEGES ON $MYSQL_DB_NAME.* TO $MYSQL_USER@'%' 'IDENTIFIED BY $MYSQL_USER_PASS';" >> init_file
# echo "FLUSH PRIVILEGES;" >> init_file


cat << eof > test_file
CREATE user '$MYSQL_USER' IDENTIFIED by '$MYSQL_USER_PASS';
CREATE DATABASE IF NOT EXISTS $MYSQL_DB_NAME;
GRANT ALL PRIVILEGES ON $MYSQL_DB_NAME.* TO '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_USER_PASS';
FLUSH PRIVILEGES;

eof

cat wordpress.sql >> test_file

/usr/bin/mysql_install_db --user=root --datadir=/var/lib/mysql

/usr/bin/mysqld --user=root --init_file=/test_file 

# mysql wordpress < wordpress.sql 

# mysql -u $MYSQL_USER -p $MYSQL_USER_PASS $MYSQL_DB_NAME < wordpress.sql  

# mysql wordpress < wordpress.sql 

# mysql $MYSQL_DB_NAME < wordpress.sql