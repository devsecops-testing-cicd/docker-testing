# Container image that runs your code
FROM alpine:3.10

# Copies your code file from your action repository to the filesystem path `/` of the container
COPY entrypoint.py /entrypoint.py

CMD apt update && apt install python3 -y

# Code file to execute when the docker container starts up (`entrypoint.sh`)
ENTRYPOINT ["python3", "/entrypoint.py"]
