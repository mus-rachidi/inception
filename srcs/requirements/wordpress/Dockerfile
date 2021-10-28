FROM debian:buster
COPY tools /
COPY conf /
RUN sh run_config.sh
CMD ["sh", "run.sh"]