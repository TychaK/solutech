<p align="center"><img src="https://www.solutech.co.ke/wp-content/uploads/2018/10/Solutech-Limited-Transparent-Logo.png" width="400"></p>


## About Solutech Orders API Test

This is a simple laravel vue api implementation. The project runs on a laravel backend 
with the API and a vue frontend that consumes the API.

Installation:

Migrations (commands):
 - php artisan migrate:refresh
This will create all the tables required for this project.

Database Seeding (Sample Data):
- php artisan db:seed --class=OrdersTableSeeder
- php artisan db:seed --class=ProductsTableSeeder
- php artisan db:seed --class=SuppliersTableSeeder
- php artisan db:seed --class=OrderDetailsTableSeeder
- php artisan db:seed --class=SupplierProductsTableSeeder

Once sample data has been created, its time to install all npm dependencies. Go to the root of the project run 
- npm install
- npm run dev 

Since we will be using Passport to issue tokens, you need to get your Personal Access Token.
To achieve this run the command
- php artisan passport:client --personal

Now run the command below to start the application:
- php artisan serve

Getting an access Token:
- go to http://localhost:8000/register
or if registered, go to http://localhost:8000/login

- After you create an account or login, you'll be able to copy your Bearer Authorization Key which you can use to interact with the API.

You may use postman to test the endpoints. Please note that we are using Bearer Authorization as shown in the screenshot below:
![Alt text](/public/img/screenshots/postman_1.png?raw=true "Get Orders Postman")
![Alt text](/public/img/screenshots/postman_2.png?raw=true "Json Result Postman")

## Frontend Screenshots

![Alt text](/public/img/screenshots/2.png?raw=true "Register")
![Alt text](/public/img/screenshots/3.png?raw=true "Login")
![Alt text](/public/img/screenshots/4.png?raw=true "Get Orders")
![Alt text](/public/img/screenshots/5.png?raw=true "Create Order")
![Alt text](/public/img/screenshots/7.png?raw=true "Create Order Response")
![Alt text](/public/img/screenshots/8.png?raw=true "Update Order")
![Alt text](/public/img/screenshots/16.png?raw=true "Remove Product Response")

## Thanks

Thank you for checking out this API. :-)
