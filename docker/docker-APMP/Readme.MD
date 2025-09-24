# APACHE+PHP+MYSQL+PHPMYADMIN

## TO BUILD AND RUN THE CONTAINER EXECUTE:
    docker-compose up

## TO STOP THE CONTAINER EXECUTE:
    docker-compose stop

## TO START A STOPPED CONTAINER EXECUTE:
    docker-compose start

## TO REMOVE THE CONTAINER EXECUTE:
    docker-compose down

## TO REMOVE ALL STOPPED CONTAINERS EXECUTE:
    docker-compose rm

## Get a list of available commands:
    docker --help
    You can also get --help on any docker command as well.

## List of the images on your machine :
    docker images

docker ps -a - a list of all containers on your computer, including the ones that are stopped.

docker --version - get the current version of docker that is installed.

docker rm <container ID or name> - removes a stopped container from your machine.

docker rmi <image ID or name> - removes an image from your machine.

## Create Network
docker network create --subnet=192.168.0.0/16 mynet123

## Run Image (Ubuntu) in Network with static IP and bash
docker run --net mynet123 --ip 172.18.0.22 -it ubuntu bash

## ALL DOCKER COMMANDS
https://docs.docker.com/reference/cli/docker/
