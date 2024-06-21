#!/bin/bash

# Install Composer dependencies
curl -sS https://getcomposer.org/installer | php
php composer.phar install

# Install Node.js dependencies and build assets
npm install
npm run build
