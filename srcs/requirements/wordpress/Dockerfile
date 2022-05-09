# WORDPRESS CONTAINER

FROM    alpine:3.15
# Install main packages
RUN     apk update

RUN     apk add --update    mariadb-client \
                            wget
# Install basic php packages
RUN     apk add --update    php php-fpm \
                            php-mysqli \
                            php-common \
                            php-cli \
                            php-phar
# Install necessary php packages to run Wordpress
RUN     apk add --update    php-curl php-gd php-intl \
                            php-mbstring php-soap php-xml \
                            php-xmlrpc php-zip php-json \
                            php-openssl
# Install Wordpress CLI tool
RUN     wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN     chmod u+x wp-cli.phar
RUN     mv wp-cli.phar /usr/local/bin/wp
# Uncomment to test that CLI is functioning correctly
#RUN     wp --info
# Download Wordpress to directory
ARG     WP_DIR
RUN     mkdir -p ${WP_DIR}/html
RUN     wp core download --locale=en_US --path=${WP_DIR}/html
# php-fpm conf - set no daemonize
COPY    ./conf/php-fpm.conf     /etc/php7/php-fpm.conf
# www.conf - set php-fpm user and getenv[VAR] values
COPY    ./conf/www.conf         /etc/php7/php-fpm.d/www.conf
# Create user that will use the upstream php
RUN     adduser -H -D -S nginx && addgroup nginx && chown -R nginx:nginx ${WP_DIR}
# add wp_config to enable php->sql
COPY    ./conf/wp-config.php ${WP_DIR}/html/wp-config.php
# add run entrypoint script
COPY	./scripts/run.sh /run.sh
RUN		chmod 750 run.sh
# Install Wordpress via WP-CLI
ENTRYPOINT [ "sh", "run.sh" ]
