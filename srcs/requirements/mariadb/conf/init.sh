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
	# into the init.sql script
    envsubst < init_var.sql > init.sql
	
	# Start mysql in safe mode
	/usr/bin/mysqld_safe &
	sleep 5
	
	# Run init.sql script
    mariadb -u root < init.sql
	
	# create .init file
    touch .init_done
    echo "init setup done"
    echo "remove init.sql"
	rm init.sql
    echo "start mariadb"
	
	# Start MYSQL
    /usr/bin/mysqld
fi
