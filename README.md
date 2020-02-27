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

Now run the command below to start the application:
- php artisan serve

Getting an access Token:
- go to http://localhost:8000/register
or if registered, go to http://localhost:8000/login

- After you create an account or login, you'll be able to copy your Bearer Authorization Key which you can use to interact with the API.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct
