# Container image that runs your code
FROM cgr.dev/chainguard/python:latest

# Copies your code file from your action repository to the filesystem path `/` of the container
COPY entrypoint.py /entrypoint.py
# RUN apt update -y && apt install python3 -y
# RUN chmod +x /entrypoint.py

# Code file to execute when the docker container starts up (`entrypoint.sh`)
ENTRYPOINT ["python3", "/entrypoint.py"]
