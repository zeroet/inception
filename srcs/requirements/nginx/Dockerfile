FROM debian:buster

LABEL "nginx"="seyun.42"

# Dumb-init = pid1 = sysyemd
RUN     apt-get update
RUN     apt-get install -y dumb-init nginx openssl

RUN    openssl req -newkey rsa:4096 -days 365 -nodes -x509 \
        -subj "/C=FR/ST=Paris/O=42Paris/OU=Seyun/CN=localhost" \
        -keyout /etc/ssl/private/seyun.key -out /etc/ssl/certs/seyun.crt

COPY	./config/nginx.conf /etc/nginx/ngnix.conf

# Default parameters that cannot be overridden when docker container run with CLI parameter
ENTRYPOINT ["/usr/bin/dumb-init"]

# global option for foreground
CMD ["nginx", "-g", "daemon off;"]
