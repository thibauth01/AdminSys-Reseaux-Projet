FROM ubuntu:18.04

RUN apt-get update && apt-get install -y bind9

RUN mkdir /etc/bind/externals
RUN mkdir /etc/bind/internals

COPY etc/named.conf.local /etc/bind
COPY etc/named.conf.default-zones  /etc/bind
COPY etc/externals/db.wt2.ephec-ti.be /etc/bind/externals
COPY etc/internals/db.wt2.ephec-ti.be /etc/bind/internals

EXPOSE 53/tcp 53/udp

CMD ["/usr/sbin/named", "-g"]
