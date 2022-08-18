# Setup

### Copy env file

```bash
$ cp .env.example .env
```

### Copy database env file

```bash
$ cp .docker/compose/db.env.example  .docker/compose/db.env
```

### Build docker image

```bash
$ docker build -f .docker/config/Dockerfile . -t tommypria:php8.1.0
```

### Run Container

```bash
$ docker-compose --env-file=./.env --file=".docker/compose/docker-compose.yml" up -d
```

### Adjust Db Host Connection

1. Inspect container **tommypria_db**, scroll down and copy ip address on _NetworkSettings > Networks > compose_backend > IPAddress_ .
2. execute this command to duplicate env file inside src folder.
    ```bash
    $ cp ./src/.env.example ./src/.env
    ```
3. Paste the ip address on DB_HOST inside of file `./src/.env`

# In Case Need to reset the setup

### Drop Container

```bash
$ docker-compose --file=".docker/compose/docker-compose.yml" down
```

### Drop image

```bash
$ docker rmi -f .docker/config/Dockerfile tommypria:php8.1.0
```
