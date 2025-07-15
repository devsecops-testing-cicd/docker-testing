# Container image that runs your code
#FROM php:8.3-apache

# Copies your code file from your action repository to the filesystem path `/` of the container
# COPY index.php /var/www/html/index.php
# RUN apt update -y && apt install python3 -y
#RUN chmod +x /entrypoint.py

# Code file to execute when the docker container starts up (`entrypoint.sh`)
# ENTRYPOINT ["python3", "/entrypoint.py"]
# EXPOSE 80

FROM cgr.dev/chainguard/php:8.3                          # minimal runtime
WORKDIR /app
COPY --from=builder index.php /app/index.php

# run PHP’s built‑in web‑server on an unprivileged port
EXPOSE 8080
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
