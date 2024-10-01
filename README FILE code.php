# Student Management System

create new laravel project
composer create-project --prefer-dist laravel/laravel student-management
cd student-management

1. Clone the repository:
    ```bash
    git clone <your-repo-link>
    ```

2. Install dependencies:
    ```bash
    composer install
    ```

3. Run migrations:
    ```bash
    php artisan migrate
    ```

4. Install the Laravel Excel package:
    ```bash
    composer require maatwebsite/excel
    ```

5. Run the application:
    ```bash
    php artisan serve
    ```

## Features

- Upload Excel files containing student data.
- Search students by name.
- Filter students by class.
- Skip duplicate records during upload.

## Bonus Features

- User authentication using Laravel's built-in system.
