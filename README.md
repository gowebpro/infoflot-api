# Infoflot API
Package for Laravel

##Getting started

> In Laravel 5.5, [service providers and aliases are automatically registered](https://laravel.com/docs/5.5/packages#package-discovery). If you're using Laravel 5.5, skip ahead.

```php
// Add in your config/app.php

'providers' => [
    '...',
    Gowebpro\Infoflot\InfoflotServiceProvider::class,
];

'aliases' => [
    '...',
    'Infoflot' => Gowebpro\Infoflot\InfoflotFacade::class,
];
```

**Methods**
```php
Infoflot::ships()
Infoflot::shipsSchemes()
Infoflot::shipsDescription($shipId)
Infoflot::shipsPhoto($shipId)
Infoflot::shipsSpecial($shipId)
Infoflot::shipsServices($shipId)
Infoflot::shipsPriceInclude($shipId)
Infoflot::shipsImages()
Infoflot::cabins($shipId)
Infoflot::cabinsStatus($shipId, $tourId)
Infoflot::cabinsPhoto($shipId, $cabinName)
Infoflot::excursions($shipId, $tourId)
Infoflot::tours($shipId)
Infoflot::routes($shipId)
Infoflot::cities()
```