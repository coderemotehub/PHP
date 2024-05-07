# Use the official PHP image from Docker Hub as the base image.
# This image includes PHP and all necessary components to run PHP applications.
FROM php:8.1-apache

# Set the working directory inside the container.
# This is where all the commands will be run and where the source code will be located.
WORKDIR /var/www/html

# Copy the local code to the working directory in the container.
# This copies your PHP scripts from your project into the Docker image.
COPY . /var/www/html

# Change the ownership of the copied files and directories to the www-data user.
# This is the user under which Apache runs by default in this image.
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 to allow communication to/from the server.
# This instruction tells Docker that the container listens on the specified network ports at runtime.
EXPOSE 80

# Use the default command of the base image, which starts Apache.
# This will start Apache in a way that keeps the container running and serves your PHP application.
CMD ["apache2-foreground"]
