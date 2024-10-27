# Laracheck Client

<center>
<img src="https://raw.githubusercontent.com/misterdevit/laracheck/refs/heads/main/_art/dashboard.png" style="width:100%;">
</center>

#### Introduction

This project is the client package of Laracheck.

Laracheck is a simple-to-use Laravel error tracker and application uptime monitoring service.

For more info about Laracheck, visit: https://github.com/misterdevit/laracheck

#### Installation

-   Install it via Composer:

```shell
composer require misterdevit/laracheck
```

-   Update application bootstrap file:

```php
// bootstrap/app.php
return Application::configure(basePath: dirname(__DIR__))
    //
    ->withExceptions(function (Exceptions $exceptions) {
        \MisterDev\Laracheck\Facades\Laracheck::track($exceptions);
    })->create();
    //
```

-   Add these vars into your .env file:

```bash
LARACHECK_API_KEY=<YOUR-LARACHECK-API-KEY>
LARACHECK_SITE_ID=<YOUR-LARACHECK-SITE-ID>
LARACHECK_ENDPOINT=<YOUR-LARACHECK-API-URL>
```

> The endpoint is the Laracheck URL plus /api/bugs path (e.g. https://laracheck.site.com/api/bugs)

#### License

Laracheck is an open-source software licensed under the MIT license.

#### Contributing

Thank you for considering contributing to this project (Pull Requests, Issues, Feedbacks, Stars, Promo, Beers) :)

#### Support

Need support with Laracheck? Please open an issue here: https://github.com/misterdevit/laracheck/issues.

<hr>

...enjoy Laracheck :)
