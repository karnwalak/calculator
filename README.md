Installation:-
Step 1:-
composer require karnwalak/calculator

Step 2:-
After this command:-

add this inside your provider array of config/app.php


  'providers' => 
  
  ServiceProvider::defaultProviders()->merge([

        <!-- Your other code -->
        Karnwalak\Calculator\CalculatorServiceProvider::class
    ])->toArray(),

Step 3:- 
php artisan config:cache
php artisan route:cache

Done!


  

