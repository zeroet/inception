FROM     debian:buster

LABEL   "mariadb"="seyun.42"

RUN     apt-get update && apt-get upgrade
RUN     apt-get install -y mariadb-server mariadb-client dumb-init

COPY	./tools/setup_db.sh		/tmp/
COPY	./config/my.cnf			/tmp/

RUN		chmod 101 /tmp/setup_db.sh
RUN		mv ./tmp/my.cnf /etc/mysql/my.cnf
RUN		chmod 0444 /etc/mysql/my.cnf

ENTRYPOINT ["/usr/bin/dumb-init"]

EXPOSE	3306

CMD		["/tmp/setup_db.sh"]
