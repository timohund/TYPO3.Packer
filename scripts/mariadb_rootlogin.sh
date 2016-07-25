#/bin/bash
#sleep is necessary, so that things will not happen before the necessary steps REALLY FINISHED.
/etc/init.d/mysql stop
killall mysqld_safe
killall mysqld
sleep 3
mysqld_safe --skip-grant-tables &
echo "USE mysql;">/tmp/mariadbsolve.sql
echo 'UPDATE `user` SET `plugin`="" Where `User`="root";'>>/tmp/mariadbsolve.sql
echo "FLUSH PRIVILEGES;">>/tmp/mariadbsolve.sql
echo "exit">>/tmp/mariadbsolve.sql
sleep 2
mysql -u root < /tmp/mariadbsolve.sql
sleep 2
/etc/init.d/mysql stop
sleep 2
killall mysqld_safe
killall mysqld
sleep 2
/etc/init.d/mysql start
