CMD = docker-compose -f srcs/docker-compose.yml

all:
	${CMD} up -d --build
up:
	all
down:
	${CMD} down
build:
	${CMD} build
stop:
	${CMD} stop
start:
	${CMD} start
ps:
	${CMD} ps
img:
	${CMD} images
vlm_ls:
	docker volume ls
net:
	docker network ls
re: clean all
clean:
	docker-compose -f srcs/docker-compose.yml down -v --rmi all
