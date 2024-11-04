# The base image
FROM nginx:latest
# Install nano in case of customer needs
RUN apt update -y
RUN apt install nano -y
# Copy files required for the homepage to work
COPY ./html/ /usr/share/nginx/html/
# Declare the port number the container should expose
EXPOSE 80