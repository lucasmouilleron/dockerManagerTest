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
RUN apt-get install -y php5-common libapache2-mod-php5 php5-cli php5-curl
RUN a2enmod php5

#####################################################
EXPOSE 80
ENV WORKDIR /var/www/html

#####################################################
RUN rm -rf $WORKDIR
RUN mkdir $WORKDIR
RUN chgrp -R $APACHE_RUN_GROUP /var/www
RUN chown -R $APACHE_RUN_USER /var/www
RUN cd $WORKDIR

#####################################################
RUN mkdir $BASE_FOLDER/scripts
COPY buildAndRun $BASE_FOLDER/scripts/
RUN chmod -R a+x $BASE_FOLDER/scripts
ENV PATH $BASE_FOLDER/scripts:$PATH

#####################################################
ENV REPOSITORY github.com:lucasmouilleron/dockerManagerTest
COPY id_rsa /root/.ssh/
RUN ssh-keyscan github.com >> ~/.ssh/known_hosts

#####################################################
#####################################################
# RUN
#####################################################
#####################################################
CMD $BASE_FOLDER/scripts/buildAndRun