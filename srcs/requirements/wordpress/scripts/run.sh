#!/bin/sh

# Check if initial setup is done using temp file
if [ -e .install_done ]
	then
		echo "Wordpress is already installed"
	else
		# Wait for MARIADB container
		sleep 5;
		# Check that the connection is established using mysqladmin ping
		if ! mysqladmin --host=$MARIADB_HOST \
						--user=$MARIADB_USER \
						--password=$MARIADB_USER_PWD \
						--wait=30 ping > /dev/null ; then
			echo "ERROR : SQL not connected"
			exit 1;
		else
			# Install and init Wordpress using the CLI
			wp core install --path=${WP_DIR}/html \
			--url=${WP_URL} \
			--title=Inception \
			--admin_user=${WP_ADMIN} \
			--admin_password=${WP_ADMIN_PWD} \
			--admin_email=${WP_ADMIN_EMAIL} \
			--skip-email
			# Create 2nd user
			wp user create --path=${WP_DIR}/html ${WP_USER} ${WP_USER_EMAIL} --role=author --user_pass=${WP_USER_PWD}
			# create a temp file
			touch .install_done
		fi
fi

# Start PHP-FPM
php-fpm7