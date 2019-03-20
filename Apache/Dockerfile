FROM ubuntu:latest
MAINTAINER Hermant Thibaut <t.hermant@students.ephec.be>

# Install apache
RUN apt-get update
RUN apt-get check
RUN apt-get dist-upgrade -y

RUN apt-get install -y apache2

# Enable apache mods.
#RUN a2enmod php5.0
#RUN a2enmod rewrite

# Pour php
#RUN sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php/7.0/apache2/$
#RUN sed -i "s/error_reporting = .*$/error_reporting = E_ERROR | E_WARNING | E_$

# Manually set up the apache environment variables
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

# Expose
EXPOSE 80

# Copy files
ADD www /var/www/site

# Available sites
ADD www.wt2.ephec-ti.be.conf /etc/apache2/sites-available/default
ADD b2b.wt2.ephec-ti.be.conf /etc/apache2/sites-available
ADD intranet.wt2.ephec-ti.be.conf /etc/apache2/sites-available

# Enabled sites
ADD www.wt2.ephec-ti.be.conf /etc/apache2/sites-enabled/000-default.conf
ADD b2b.wt2.ephec-ti.be.conf /etc/apache2/sites-enabled
ADD intranet.wt2.ephec-ti.be.conf /etc/apache2/sites-enabled

CMD /usr/sbin/apache2ctl -D FOREGROUND
