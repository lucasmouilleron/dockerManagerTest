#####################################################
FROM debian:jessie

#####################################################
MAINTAINER Lucas Mouilleron <lucas.mouilleron@me.com>

#####################################################
ENV LANG C.UTF-8
ENV USER root
ENV HOME /root
ENV BASE_FOLDER /root

#####################################################
EXPOSE 80
ENV WORKDIR /var/www/html

#####################################################
RUN apt-get update

#####################################################
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
RUN apt-get install -y apache2 git
RUN apt-get install -y php5 libapache2-mod-php5
RUN a2enmod php5
RUN chgrp -R $APACHE_RUN_GROUP /var/www
RUN chown -R $APACHE_RUN_USER /var/www

#####################################################
ENV MYSQL_USER=mysql
ENV MYSQL_PASS=thepass
ENV MYSQL_DATA_DIR=/var/mysql/data
ENV MYSQL_RUN_DIR=/run/mysqld
ENV MYSQL_LOG_DIR=/var/log/mysql
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y mysql-server
RUN mysql_install_db > /dev/null 2>&1

#####################################################
RUN rm -rf $WORKDIR
RUN mkdir $WORKDIR
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

#test
RUN sed -i -e"s/^bind-address\s*=\s*127.0.0.1/bind-address = 0.0.0.0/" /etc/mysql/my.cnf
EXPOSE 3306

#####################################################
#####################################################
# RUN
#####################################################
#####################################################
CMD $BASE_FOLDER/scripts/buildAndRun