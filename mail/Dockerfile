FROM ubuntu:latest

RUN apt-get update && apt-get -y upgrade
RUN apt-get install -y rsyslog
RUN apt-get install -y postfix
RUN apt-get install -y dovecot-imapd dovecot-pop3d

COPY etc/postfix/main.cf /etc/postfix/main.cf
COPY etc/postfix/master.cf /etc/postfix/master.cf

COPY etc/dovecot/conf.d/* /etc/dovecot/conf.d/
COPY etc/dovecot/dovecot.conf /etc/dovecot/dovecot.conf

RUN mkdir -p /etc/letsencrypt/mail.wt2.ephec-ti.be
COPY cert/fullchain.pem /etc/letsencrypt/mail.wt2.ephec-ti.be
COPY cert/privkey.pem /etc/letsencrypt/mail.wt2.ephec-ti.be

# Create new users
COPY users /users
RUN newusers /users
RUN rm /users

COPY start.sh /start.sh
RUN chmod +x /start.sh

COPY etc/hosts /etc/hosts

EXPOSE 456
# SMTP
EXPOSE 25
# SMTP (STARTTLS for encryption)
EXPOSE 587
# POP3
EXPOSE 110
# SSL-POP (encrypted)
EXPOSE 995
# IMAP
EXPOSE 143
# IMAP (encrypted)
EXPOSE 993

CMD ["sh", "-c", "/start.sh"]
