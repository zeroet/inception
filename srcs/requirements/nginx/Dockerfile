FROM debian:buster

LABEL "nginx"="seyun.42"

# Dumb-init = pid1 = sysyemd
RUN     apt-get update
RUN     apt-get install -y dumb-init nginx openssl

RUN    openssl req -newkey rsa:4096 -days 365 -nodes -x509 \
        -subj "/C=FR/ST=Paris/O=42Paris/OU=Seyun/CN=seyun.42.fr" \
        -keyout /etc/ssl/private/seyun.key -out /etc/ssl/certs/seyun.crt

COPY	./config/nginx.conf /etc/nginx/sites-available/default

# Default parameters that cannot be overridden when docker container run with CLI parameter
#ENTRYPOINT ["/usr/bin/dumb-init"]

# global option for foreground
ENTRYPOINT ["nginx", "-g", "daemon off;"]
