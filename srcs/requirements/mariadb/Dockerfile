FROM     debian:buster

RUN     apt-get update
RUN     apt-get install -y mariadb-server mariadb-client dumb-init

COPY	./config/my.cnf			/etc/mysql
COPY	./tools/setup_db.sh		/tmp/

ENTRYPOINT ["/usr/bin/dumb-init"]

CMD ["/tmp/setup_db.sh"]
