## Installation & Setup

### Requirements

- PHP, 7.3 or higher
- Composer
- Git

### Installation

Go to the directory that your project folder will be installed & enter this commend

`git clone https://github.com/Minlwinkyaw307/mediatriple_task`

After that go to the `mediatriple_task` folder which was created by previous command or you can use this command to enter to that folder

`cd mediatriple_task`

Check if you are in correct folder, then install required package by using composer by using following command
`composer install` & `composer dump-autoload`

After installing all the packages, we need to set up enviroment variable by copying .env.example and rename the copy file to .env
After creating .env file. Run this command to generate key for the project.
`php artisan key:generate`

After creating key for the project, setup your database connection to the `.env` file

After that run these following command to setup the database table, seed dummy data to the database and create token for passport

`php artisan migrate`
`php artisan db:seed`
`php artisan passport:install`

### IDE Helper for Laravel

For code compeletion for the laravel project, run this three commands

`php artisan ide-helper:generate`
`php artisan ide-helper:models`
`php artisan ide-helper:meta`

### Postman configuration

Please download postman collection from the repo with the name of `mediatriple.postman_collection.json`. Then, upload it to postman.
If your laravel program is running in different address or port change `api_base` to correct address and port number.

There are 3 requests inside the postman collection.

- Login -> to login user
- Register -> to register user
- UserInfo -> to get user information and addresses(in my case)
