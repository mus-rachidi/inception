FROM debian:buster
COPY tools /
COPY conf /
RUN apt-get update
RUN apt-get -y install mariadb-server
CMD ["sh","script.sh"]