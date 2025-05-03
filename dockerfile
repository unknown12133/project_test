FROM php:8.2-cli

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Set working directory
WORKDIR /var/www/html

# Copy all project files
COPY . .

# Expose the port
EXPOSE 8080

# Start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
