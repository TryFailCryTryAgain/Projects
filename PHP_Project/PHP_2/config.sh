#!/bin/bash

# Check if container is run through Compose
if [ "$compose" == true ]; then
    # Run the PHP development server
    exec phpunit --testdox tests
else
    # Run the tests
    php -S 0.0.0.0:80 -t ./src
fi