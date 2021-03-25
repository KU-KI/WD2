# BUILD and RUN IMAGE 
docker build -t docker-101 .
docker run --name docker-101 -dp 3000:3000 docker-101

# LIST, STOP and REMOVE Container
docker ps
docker stop <the-container-id>
docker rm <the-container-id>
docker run -dp 3000:3000 docker-101

# SAVE/PUSH in hub.docker.com and RUN from HUB
docker tag docker-101 YOUR-USER-NAME/101-todo-app
docker push YOUR-USER-NAME/101-todo-app
docker run -dp 3000:3000 YOUR-USER-NAME/101-todo-app

# Start a ubuntu container that will create a file named /data.txt with a random number between 1 and 10000 and READ it
docker run -d ubuntu bash -c "shuf -i 1-10000 -n 1 -o /data.txt && tail -f /dev/null"
docker exec <container-id> cat /data.txt

# CREATE VOLUME and START CONTAINER with that VOLUME
docker volume create todo-db
docker run --name docker-101 -dp 3000:3000 -v todo-db:/etc/todos docker-101


docker-compose up -d

docker exec -it <mysql-container-id> mysql -p
mysql> SHOW DATABASES;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
| sys                |
| todos              |
+--------------------+
5 rows in set (0.00 sec)
