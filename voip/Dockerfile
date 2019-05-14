FROM ubuntu:18.04

RUN apt-get update && apt-get install -y asterisk

RUN apt-get install -y vim net-tools

EXPOSE 5060/udp
EXPOSE 16384/udp
EXPOSE 16385/udp
EXPOSE 16386/udp
EXPOSE 16387/udp
EXPOSE 16388/udp
EXPOSE 16389/udp
EXPOSE 16390/udp
EXPOSE 16391/udp
EXPOSE 16392/udp
EXPOSE 16393/udp
EXPOSE 16394/udp

WORKDIR /etc/asterisk
RUN cp extensions.conf extensions.conf.default
RUN cp users.conf users.conf.default
RUN cp voicemail.conf voicemail.conf.default


COPY etc/*.conf /etc/asterisk/

CMD ["/usr/sbin/asterisk", "-f"]
