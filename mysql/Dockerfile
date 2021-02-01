FROM mysql
WORKDIR /
COPY ./somstore.sql ./
EXPOSE 3306 33060 33061
CMD [ "mysql", "-uroot","somstore", "<", "somstore.sql"]