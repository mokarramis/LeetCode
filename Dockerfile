# Use the official PHP CLI image
FROM php:8.2-cli

# Copy your project files into the container
COPY . /usr/src/myapp

# Set the working directory
WORKDIR /usr/src/myapp

# Specify the command to run your PHP script
CMD ["php", "TwoSum.php"]
