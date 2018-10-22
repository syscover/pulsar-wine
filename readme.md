# Wine to Laravel

[![Total Downloads](https://poser.pugx.org/syscover/pulsar-wine/downloads)](https://packagist.org/packages/syscover/pulsar-wine)

## Installation

Before install sycover/pulsar-wine, you need install syscover/pulsar-core and syscover/pulsar-admin

**1 - After install Laravel framework, execute on console:**
```
composer require syscover/pulsar-wine
```

Register service provider, on file config/app.php add to providers array
```
Syscover\Wine\WineServiceProvider::class,
```

**2 - Execute publish command**
```
php artisan vendor:publish --provider="Syscover\Wine\WineServiceProvider"
```
and
```
composer dump-autoload
```

**3 - And execute migrations and seed database**
```
php artisan migrate
php artisan db:seed --class="WineTableSeeder"
```

**4 - Execute command to load all updates**
```
php artisan migrate --path=vendor/syscover/pulsar-wine/src/database/migrations/updates
```

**Options**
You can register ResetLinkEmailSent event in app/Providers/EventServiceProvider.php to custom the notification. 
Don't forget to create App\Listeners\SendResetLinkEmail listener.
```
protected $listen = [
    ...
    'Syscover\Crm\Events\ResetLinkEmailSent' => [
        'App\Listeners\SendResetLinkEmail'
    ],
    ...
];
```