Here are the steps on how run/deploy this application to your PC

Step #1 - Clone the project to your local development environment.
https://github.com/lewis-Hope/asset.git

Step #2 - Update Dependencies
composer install

Step #3 - Here is the command that creates configuration file:
cp .env.example .env

Step #4 - This is an essential step in setting up to ensure the application's security and proper functioning.
php artisan key:generate

Step #5 - Configure the database connection by opening the project to vs code and update the .env file.

Step #6 - Migrate the domain model classes to the database by this command:
php artisan migrate

Step #7 - Getting ready your project, type this command:
npm run dev

Step #8 - run the application
php artisan serve

