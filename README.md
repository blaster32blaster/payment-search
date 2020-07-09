# Larasearch

## Installation

### Prerequisites

- Ensure that Docker is installed on the host system and has adequate resources assigned
- ensure that node and npm are installed on the host system and up-to-date

### Optional Features

- traefik : clone this repository <https://github.com/blaster32blaster/traefik> and follow instructions provided in the repo.  This will allow for hostname resolution and a status dashboard for the local containers

### Starting application

- From project root directory run the command :

        docker-compose up

- Ensure that containers have started and are running by running the command :

        docker ps

- Access the "pay_cont" container by running the command :

        docker exec -w /var/www -it pay_cont bash

- Ensure that all project php dependencies have been installed by running the command :

        composer install

- Exit the container by running the command :

        exit

- Ensure project npm dependencies have been installed by running the command :

        npm install

### Navigating the application

- open a browser on the local machine and navigate to <http://localhost:8087> to see the web interface for the application
