# Laravel Uncaught Exception Notification

This Laravel package allow the capability to send notifications via email when an uncaught exceptions is thrown.

## Installation

Add `"hangar/laravel-error-reporting"` to the require section of your `composer.json` file

`"hangar/laravel-error-reporting": "0.1.x"` 

Run `composer update` to install the latest version.

Or run: 

`composer require hangar/laravel-error-reporting:0.1`

then add the service provider in config/app.php

```php

'providers' => [
    Hangar\LaravelErrorReporting\Providers\LaravelErrorReportingServiceProvider::class,
]

```

and finally publish the configuration:

```bash

php artisan vendor:publish --provider="Hangar\LaravelErrorReporting\Providers\LaravelErrorReportingServiceProvider"

```

## Usage

In the configuration file `thi-laravel-error-reporting.php` you can find the configuration options for the email delivery 
and add exclusions for certain exceptions that don't be reported:

```php

return [
    'dont_report' => [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ],

    'mail' => [
        'from_address' => '',
        'from_name'    => '',
        'to_address'   => [

        ],
        'subject'      => 'Your App: Crash Report',
        'view'         => 'thi-laravel-error-reporting::exception'
    ]
];

```

Finally be sure that you have disabled the debugger mode in your .env file:

```php

APP_ENV=prod
APP_DEBUG=false

```

## TODO:

 - Add more handlers to deliver exception messages like HipChat or Slack.
 - Unit tests
 - Add custom handlers to allow devs to play with the exception, for example to log an exception or report it 
 to an external service (Sentry, Bugsnag...)
 

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.