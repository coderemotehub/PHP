# Module 1: Introduction to PHP

Welcome to Module 1 of the PHP Learning Series! In this module, you will start your journey with PHP by learning the basics and running PHP scripts inside a Docker container. This approach uses Docker to create a consistent development environment for everyone in the course.

## Understanding the Dockerfile

The Dockerfile provided in this module sets up a PHP environment using Apache as the web server. Here is a brief overview of what each line in the Dockerfile does:

- `FROM php:8.1-apache`: Starts the build process using the PHP 8.1 image with Apache installed. This image is pulled from the official Docker Hub.
- `WORKDIR /var/www/html`: Sets the working directory to `/var/www/html` inside the container, where Apache serves files by default.
- `COPY . /var/www/html`: Copies the PHP scripts from your project folder into the container so they can be served by Apache.
- `RUN chown -R www-data:www-data /var/www/html`: Changes the ownership of the files to `www-data`, the default Apache user, ensuring files are accessible to the web server.
- `EXPOSE 80`: Informs Docker that the container listens on port 80. This is the standard port for HTTP web traffic.
- `CMD ["apache2-foreground"]`: Starts Apache in the foreground when the container launches, keeping the container running.

## How to Run the Docker Container

To use this Docker setup for your PHP scripts, follow these steps:

1. **Build the Docker Image**:
   - Open a terminal.
   - Navigate to the directory containing your Module 1 Dockerfile.
   - Run the following command to build your Docker image:
     ```bash
     docker build -t php-module1 .
     ```
   This command creates a Docker image named `php-module1` based on the instructions in the Dockerfile.

2. **Run the Docker Container**:
   - Once the image is built, run your container using:
     ```bash
     docker run -p 8080:80 php-module1
     ```
   - This command starts a container based on the `php-module1` image. It maps port 8080 on your local machine to port 80 on the container, allowing you to access the PHP application by visiting `http://localhost:8080` in your web browser.

3. **Viewing Your PHP Application**:
   - Open a web browser and go to `http://localhost:8080`.
   - You should see the output of your PHP scripts running within the Docker container.

## Additional Resources

For more detailed information on Docker and PHP, refer to the following resources:
- [Docker Official Documentation](https://docs.docker.com/)
- [Official PHP Documentation](https://www.php.net/docs.php)
