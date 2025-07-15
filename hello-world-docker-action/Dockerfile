# Container image that runs your code
FROM php:8.3-apache

# Copies your code file from your action repository to the filesystem path `/` of the container
COPY entrypoint.php /var/www/html/entrypoint.php
# RUN apt update -y && apt install python3 -y
RUN chmod +x /entrypoint.py

# Code file to execute when the docker container starts up (`entrypoint.sh`)
# ENTRYPOINT ["python3", "/entrypoint.py"]
EXPOSE 80
