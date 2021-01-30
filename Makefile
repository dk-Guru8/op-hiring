MAKEFLAGS += --silent

default:
	docker-compose build

start: default
	docker-compose up

