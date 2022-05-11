# NGINX CONTAINER

FROM	debian:buster

# Install and update nginx and openssl
RUN		apt-get update
RUN		apt-get install -y nginx openssl
RUN		mkdir -p /var/logs
RUN		mkdir -p /etc/nginx/ssl

# Create a self signed certificate using OpenSSL
RUN		openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/nginx-self-signed.key -out /etc/nginx/nginx-self-signed.crt -subj "/C=FR/L=Paris/O=42/CN=vintran.42.fr/UID=vintran"

COPY	./conf/nginx.conf /etc/nginx/conf.d/

# Expose the port 443 (standard port for SSL)
EXPOSE 443

CMD	["nginx", "-g", "daemon off;"]