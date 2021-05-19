#!/bin/sh

# Where $ENVSUBS is whatever command you are looking to run
#php artisan storage:link
#RUN chmod -R 775  /var/www/storage
apache2-foreground
# This will exec the CMD from your Dockerfile, i.e. "npm start"
exec "$@"
