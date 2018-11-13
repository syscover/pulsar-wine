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

**5 - Add graphQL routes to routes/graphql/schema.graphql file**
```
# Wine types
#import ./../../vendor/syscover/pulsar-wine/src/Syscover/Wine/GraphQL/inputs.graphql
#import ./../../vendor/syscover/pulsar-wine/src/Syscover/Wine/GraphQL/types.graphql

# Wine queries
#import ./../../vendor/syscover/pulsar-wine/src/Syscover/Wine/GraphQL/queries.graphql

# Wine mutations
#import ./../../vendor/syscover/pulsar-wine/src/Syscover/Wine/GraphQL/mutations.graphql
```