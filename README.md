# A University Students' Portal

### Built With

1. [Laravel 10](https://laravel.com/docs/10.x)
2. [Livewire 3](https://livewire.laravel.com/docs/)
3. [Tailwind 3](https://tailwindcss.com/docs/)
4. [Alpine.js](https://alpinejs.dev/)

### Run the following commands to setup the project on your machine
```
cp .env.example .env // you may want to update the DB_CONNECTION -- the value in the .env file is sqlite
composer install
npm install
php artisan key:generate
php artisan migrate --seed
php artisan serve
```
#### Login with the following credentials

Email: student@mailing.xyz

Password: 123456


### Still a work in progress

## Completed
1. Dashboard layout (mobile responsive)
2. User authentication
3. Password update


## TODO
1. Course registrations
2. ID generation
3. Payment of fees & transaction history

