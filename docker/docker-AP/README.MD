## Apache with a Dockerfile:

    docker build -t wd2 .
    docker run -p 80:80 wd2

## MAP local c:/...:

    docker run -p 80:80 -v c:/Users/xxxx/source/repos/KU-KI/WD2/docker/src/:/var/www/html/ wd2

## STOP/REMOVE all containers/images:

    docker stop $(docker ps -a -q)
    docker rm $(docker ps -a -q)
    docker rmi $(docker images -q)

## REMOVE <none> images and:

    docker image prune

    docker system prune

##### WARNING! This will remove:

- all stopped containers
- all networks not used by at least one container
- all dangling images
- all dangling build cache

## Azure

    docker login kikuwd2.azurecr.io
    Username: kikuwd2
    Password:
    docker build -t kikuwd2.azurecr.io/kikuwd2 .
    docker push kikuwd2.azurecr.io/kikuwd2
