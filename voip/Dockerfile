FROM ubuntu:18.04

RUN apt-get update && apt-get install -y asterisk

RUN apt-get install -y vim net-tools

EXPOSE 5038/tcp
EXPOSE 2000/tcp
EXPOSE 5060/tcp
EXPOSE 4520/udp
EXPOSE 4569/udp
EXPOSE 52722/udp
EXPOSE 2727/udp
EXPOSE 5000/udp
EXPOSE 5060/udp

WORKDIR /etc/asterisk
RUN cp extensions.conf extensions.conf.default
RUN cp users.conf users.conf.default
RUN cp voicemail.conf voicemail.conf.default


COPY etc/*.conf /etc/asterisk/

CMD ["/usr/sbin/asterisk", "-f"]
