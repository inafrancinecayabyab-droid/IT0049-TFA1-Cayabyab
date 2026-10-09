# IT0049 TFA1 Cayabyab

Four-page Point-of-Sale foundation application built with CodeIgniter 4 for IT0049 Technical Formative Assessment 1.

## Features

- Landing page: `/`
- About page: `/about`
- Customer Accounts page: `/customers`
- User Accounts page: `/users`
- CodeIgniter routes and controllers
- Static PHP arrays with five customer records and five user records
- Shared navigation and responsive styling

## Requirements

- PHP 8.1 or newer
- Composer

## Setup

1. Clone or download this repository.
2. Run `composer install`.
3. Copy `env` to `.env` and set `app.baseURL = 'http://localhost:8080/'`.
4. Start the application with `php spark serve`.
5. Open `http://localhost:8080/`.

This assessment intentionally uses static arrays. There is no database or database export yet; a database will be introduced in the next module.

## Project structure

- `app/Config/Routes.php` contains the four routes.
- `app/Controllers/` contains `Pages`, `Customers`, and `Users`.
- `app/Views/` contains the shared layout and four page views.
- `public/assets/css/style.css` contains the site styling.
