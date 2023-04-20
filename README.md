# Elasticsearch + Laravel

This project uses Laravel Scout and babenkoivan/elastic-scout-driver for Elasticsearch driver.

You need Elasticsearch running locally for this project to work.

## Setup for development

- composer install
- npm install
- php artisan storage:link
- php artisan key:generate
- php artisan migrate
- php artisan db:seed
- npm run dev
