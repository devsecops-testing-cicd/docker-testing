# Container image that runs your code
FROM debian:bullseye

# Copies your code file from your action repository to the filesystem path `/` of the container
COPY entrypoint.py /entrypoint.py
CMD apt update && apt install python3
# RUN chmod +x /entrypoint.py

# Code file to execute when the docker container starts up (`entrypoint.sh`)
ENTRYPOINT ["python3", "/entrypoint.py"]
