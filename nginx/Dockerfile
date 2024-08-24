FROM nginx:latest

COPY ./nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf

# copy from app/public local to the container /var/www/html/public
COPY ./app/public /var/www/html/public