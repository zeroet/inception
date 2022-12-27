FROM     debian:buster

RUN     apt-get update
RUN     apt-get install -y mariadb-server mariadb-client

COPY	./config/my.cnf			/etc/mysql
COPY	./tools/setup_db.sh		/tmp/

ENTRYPOINT [ "sh", "/tmp/setup_db.sh" ]