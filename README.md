# Simple CRUD

## Installation

1) Clone this repository:
    
   ```shell
    git clone https://github.com/cndrsdrmn/basic-crud
    ```

2) After cloned this repository, you need go to project root directory and run `composer install`:
    
   ```shell
    cd basic-crud && composer install
    ```

3) Then copy the `.env` file:
   
    ```shell
    cp .env.example .env
    ```

4) Create database and tables:
   
    ```sql
    create database crud;
    ```
   
   > **Note**: the database should be same with variable environment on `.env` file you can find it on `DB_DATABASE` 

    ```sql
    create table users
    (
      id         bigint unsigned auto_increment
        primary key,
      first_name varchar(255) not null,
      last_name  varchar(255) not null,
      address    text         null,
      created_at timestamp    null,
      updated_at timestamp    null
    )
      collate = utf8mb4_unicode_ci;
    ```
   > **Note**: for simplify u just run `php artisan migrate`

5) Then run the serve command:

    ```shell
    php artisan serve
    ```

6) Okay the application should be running on `http://localhost:8000` open it and start explore.
