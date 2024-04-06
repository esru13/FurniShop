![Uploading image.png…]()




**FurniShop**

Furnishop is an e-commerce platform dedicated to providing customers with a delightful shopping experience for furniture and home decor items. With its extensive range of products, intuitive features, and commitment to customer satisfaction, Furnishop aims to transform the way people furnish their living spaces.

**Getting Started with FurniShop**

Prerequisites

Before you begin, ensure you have met the following requirements:

PHP installed on your local machine

Composer installed globally

Node.js and NPM installed (for frontend dependencies)

Git installed (optional, for cloning the repository)



**Installation**

Clone the repository to your local machine using Git (or download the zip file and extract it):

    git clone https://github.com/esru13/FurniShop

Navigate to the project directory:

    cd FurniShop

Install PHP dependencies using Composer:

    composer install

Copy the .env.example file to create a .env file:

    cp .env.example .env

Generate a new application key:

    php artisan key:generate

Configure your database settings in the .env file:

##
    DB_CONNECTION=mysql

    DB_HOST=127.0.0.1

    DB_PORT=3306

    DB_DATABASE=[your_database_name]

    DB_USERNAME=[your_database_username]

    DB_PASSWORD=[your_database_password]
##

Migrate the database:

    php artisan migrate
    
(Optional) Seed the database with sample data:

    php artisan db:seed

Running the Application

To start the development server, run the following command:

    php artisan serve

You can now access the application in your web browser at http://localhost:8000.
##
