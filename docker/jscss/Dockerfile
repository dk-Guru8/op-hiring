FROM node:12.16-alpine

RUN apk add --no-cache bash

WORKDIR /npm

COPY package.json ./
COPY *.js ./

RUN npm install

RUN ln -s /npm/node_modules/vite/bin/vite.js /usr/local/bin/vite

