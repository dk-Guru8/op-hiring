# Task
You need to develop an autocomplete component. Example in the picture below
![Autocomplete](https://i2.wp.com/onaircode.com/wp-content/uploads/2019/10/forked-simple-autocomplete.jpg?resize=1080%2C675&ssl=1)


# Frontend development environment

## Requirements
Having `docker` and `docker-compose` installed

## Running
- clone the repository
- run `make start`
- access `http://localhost/`


There are 2 docker containers running, *web* and *jscss*.
`web` provides Phalcon MVC framework used for server-side page generation.
`jscss` provides a npm server used for building javascript and css files using Tailwind and Vuejs frameworks.

The 2 environment are connected by loading the npm server link into the php-generated html, and it happens in `src/phalcon/views/_partials/dev.twig` file, incuded by main template file in `src/phalcon/views/_templates/main.twig`.

# Source structure
- Controller files: `src/phalcon/controllers`
- View files: `src/phalcon/views`
- css: `src/jscss/src/index.css`
- vue: `src/jscss/src`



### Docker install for debian-based distros
```
sudo apt-get update
sudo apt install -y apt-transport-https ca-certificates curl software-properties-common gnupg

# Ubuntu
if  [[ `lsb_release -i | grep -c -i ubuntu` -eq 1 ]]; then
  curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
  sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu focal stable"

# Debian
elif [[ `lsb_release -i | grep -c -i debian` -eq 1 ]]; then
  curl -fsSL https://download.docker.com/linux/debian/gpg | sudo apt-key add -
  sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/debian $(lsb_release -cs) stable"
else
  echo Please install docker for your distribution
  exit 1;
fi

apt-get update
apt install -y docker-ce

sudo curl -L "https://github.com/docker/compose/releases/download/1.27.4/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose

sudo systemctl restart docker
sudo chmod 666 /var/run/docker.sock
```
