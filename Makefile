DOCKER		=	sudo docker

COMPOSE		=	sudo docker compose -f srcs/docker-compose.yml

HOSTS_PATH	=	/etc/hosts

init_dir	:
				mkdir -p /home/seyun/db_volume
				mkdir -p /home/seyun/wp_volume
				sudo chmod 777 $(HOSTS_PATH)
				echo "127.0.0.1 seyun.42.fr" >> $(HOSTS_PATH)

build_up	:
				$(COMPOSE) up --build -d

all			:	init_dir build_up

clean		:
				$(COMPOSE) down -v --rmi all --remove-orphans

fclean		:	clean
				$(DOCKER) system prune --volumes --all --force
				sudo rm -rf /home/seyun
				$(DOCKER) network prune --force
				$(DOCKER) image prune --force
				sudo sed -i '/seyun/d' /etc/hosts

re			:	fclean all