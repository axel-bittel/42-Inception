
all: up

up :
	docker-compose -f src/docker-compose.yml  up --build -d
first :
	docker-compose -f src/docker-compose.yml  up --build -d
down:
	docker-compose -f src/docker-compose.yml down
re: fclean up

clean:
	echo "Stop containers";
	docker stop `(docker ps -qa)`;
	echo "Rm containers";
	docker rm `(docker ps -qa)`;
	echo "Rm images";
	docker rmi -f `(docker images -qa)`;
	echo "Rm volumes";
	docker volume rm `(docker volume ls -q)`;
	echo "Rm networks"; 
	docker network rm `(docker network ls -q)` 2>/dev/null;
fclean: clean
	sudo rm -rf /home/abittel/data/mariadb/*
	sudo rm -rf /home/abittel/data/wordpress/*
