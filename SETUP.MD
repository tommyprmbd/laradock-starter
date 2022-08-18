### Copy env file

```bash
$ cp .env.example .env
```

### Build docker image

```bash
$ docker build -f .docker/config/Dockerfile . -t tommypria:php8.1.0
```

### Run Container

```bash
$ docker-compose --env-file=./.env --file=".docker/compose/docker-compose.yml" up -d
```

### Drop Container

```bash
$ docker-compose --file=".docker/compose/docker-compose.yml" down
```

### Drop image

```bash
$ docker rmi -f .docker/config/Dockerfile tommypria:php8.1.0
```
