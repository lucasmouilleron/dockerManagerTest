#####################################################
FROM debian:jessie

#####################################################
MAINTAINER Lucas Mouilleron <lucas.mouilleron@me.com>

#####################################################
ENV LANG C.UTF-8
ENV USER root
ENV HOME /root
ENV BASE_FOLDER /root
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data

#####################################################
RUN apt-get update
RUN apt-get install -y apache2 git wget curl
RUN apt-get install -y apache2.2-common apache2-utils

#####################################################
RUN chgrp -R $APACHE_RUN_GROUP /var/www

#####################################################
EXPOSE 80
WORKDIR /var/www/html

#####################################################
#####################################################
# RUN
#####################################################
#####################################################
CMD apache2ctl restart && /bin/sh