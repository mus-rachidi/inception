FROM debian:buster
COPY tools /
COPY conf /
RUN sh script.sh
CMD ["nginx", "-g", "daemon off;"]