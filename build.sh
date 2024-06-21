#!/bin/bash

# Ensure PHP and Composer are available
if ! command -v php &> /dev/null; then
    echo "PHP could not be found"
    exit 1
fi

if ! command -v composer &> /dev/null; then
    echo "Composer could not be found"
    exit 1
fi

# Install Composer dependencies
composer install --no-dev --optimize-autoloader

# Install Node.js dependencies and build assets
npm install
npm run build
