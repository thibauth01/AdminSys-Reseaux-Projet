FROM ubuntu:18.04

RUN apt-get update && apt-get install -y bind9

WORKDIR /etc/bind

VOLUME /etc/bind

EXPOSE 53/tcp 53/udp

CMD ["/usr/sbin/named", "-g"]
