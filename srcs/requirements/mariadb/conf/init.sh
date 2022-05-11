#!/bin/sh

# Check if initial setup is done using temp file
if [ -f ".init_done" ]; then
    echo "init done"
	# start mysql/mariadb
    /usr/bin/mysqld
else
    echo "init not done"
    echo "start mariadb and setup"
	
	# use envsubst to set passwords and users
    envsubst < init_var.sql > init.sql
	
	# Start mysql in safe mode
	/usr/bin/mysqld_safe &
	sleep 5
	
	# Run init.sql script
    mariadb -u root < init.sql
	
	# create temp file
    echo "init setup done"
    touch .init_done
    echo "remove init.sql"
	rm init.sql
	
	# Start MYSQL
    echo "start mariadb"
    /usr/bin/mysqld
fi
