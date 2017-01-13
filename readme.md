# FuelPHP-HelloWorld
Training project for using [FuelPHP](http://fuelphp.com/).

## Setup
1. You need to have docker installed
2. You need to share your current drive (on windows), open docker settings and enable access to the drive your project is cloned to

## Run
```
docker-compose build
docker-compose up -d web
```

To remove all instances: `docker-compose down --rmi all`

### Details learned
In order to do the `oil create hello-world` to set up fuel I needed to install `zip` and `git` in the server container. Since the folder is mounted to the `/app` in the repository I only had to do this once in a temporary instance. Once I had set up the project I didn't have to redo it in the instance again meaning I didn't have to include `zip` and `git` in the actual docker image.
