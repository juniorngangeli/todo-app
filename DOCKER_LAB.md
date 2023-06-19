## Docker manifest for an nginx powered static site

```
FROM nginx:alpine

ADD . /usr/share/nginx/html

WORKDIR /usr/share/nginx/html

```

## Docker manifest for a node.js api

```
FROM node:alpine

WORKDIR /app

ADD package*.json ./

RUN npm install

ADD . .

CMD ["npm", "start"]
```

## .dockeringnore file

```
Dockerfile
node_modules
.git
```
