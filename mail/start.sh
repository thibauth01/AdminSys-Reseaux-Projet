service rsyslog start
postfix start
service dovecot start

tail -f /var/log/mail.log
