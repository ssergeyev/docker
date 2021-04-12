FROM ubuntu-mc

RUN apt-get update 
RUN apt-get install -y nginx

#RUN echo 'Hi, I am in your container' \
#        >/var/www/html/index.html

VOLUME ~/docker/nginx:/var/www/html
EXPOSE 80

ENTRYPOINT ["/usr/sbin/nginx"]

