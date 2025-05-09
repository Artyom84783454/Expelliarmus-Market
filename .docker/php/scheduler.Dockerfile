FROM ghcr.io/artyom84783454/expelliarmus-market-php:latest

<<<<<<< Updated upstream
<<<<<<< Updated upstream
COPY ./crontab /etc/cron.d/laravel-cron
=======
USER root

RUN apk update && apk add --no-cache \
    dcron \
    && touch /var/log/cron.log

COPY .docker/php/crontab /etc/cron.d/laravel-cron

>>>>>>> Stashed changes
RUN chmod 0644 /etc/cron.d/laravel-cron \
    && crontab /etc/cron.d/laravel-cron \
    && touch /var/log/cron.log
=======
WORKDIR /var/www/expelliarmus/backend

<<<<<<< Updated upstream
CMD ["/bin/sh", "-c", "/usr/sbin/crond -f -l 8"]
>>>>>>> Stashed changes
=======
RUN touch /var/log/cron.log

USER laravel

CMD ["cron", "-f", "-l", "8"]
>>>>>>> Stashed changes
