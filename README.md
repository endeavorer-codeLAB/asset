Here are the steps on how run/deploy this application to your PC

Step #1 - Clone the project to your local development environment.
git clone https://github.com/endeavorer-codeLAB/asset.git

Step #2 - Update Dependencies
composer install

Step #3 - Below, is the command that creates configuration file
cp .env.example .env

Step #4 - This is an essential step in setting up to ensure the application's security and proper functioning.
php artisan key:generate

Step #5 - Configure the database connection by opening the project to vs code and update the .env file.

Step #6 - Migrate the domain model classes to the database by the command below.
php artisan migrate

Step #7 - Getting ready your project, type the command below
npm run dev

Step #8 - run the application
php artisan serve

