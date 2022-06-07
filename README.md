# Laravel KingsCode HTML to PDF Service wrapper

[![Packagist](https://img.shields.io/packagist/v/patrickvandewal/laravel-kc-pdf-service.svg?colorB=brightgreen)](https://packagist.org/packages/patrickvandewal/laravel-kc-pdf-service)
[![Packagist](https://img.shields.io/packagist/dt/patrickvandewal/laravel-kc-pdf-service.svg?colorB=brightgreen)](https://packagist.org/packages/patrickvandewal/laravel-kc-pdf-service)
[![license](https://img.shields.io/github/license/patrickvandewal/laravel-kc-pdf-service.svg?colorB=brightgreen)](https://github.com/patrickvandewal/laravel-kc-pdf-service)

A Laravel wrapper for the KingsCode HTML to PDF service.

## Installation

Require the package.

```sh
composer require patrickvandewal/laravel-kc-pdf-service
```

Optionally, publish the package's configuration file by running:

```
php artisan vendor:publish --provider="KingsCode\LaravelHtmlToPdf\KCHtmlToPdfServiceProvider"
```

## Usage

1. Create an endpoint within your application which can process and store the PDF file from the service.

2. Register the service url and API token in your `.env` file.
    ```
    KC_HTML_TO_PDF_SERVICE_URL=
    KC_HTML_TO_PDF_AUTH_TOKEN=
    ```

3. Create a `KCHtmlToPdfOptions` options class

   ```
   $options = new KCHtmlToPdfOptions(
   '<your callback url>,
   '<your callback token>'
   );
   ```

   Optional arguments: ```landscape``` and ```printBackground```


4. Implement the client contract in your controller and call the `createDocument` method. Provide the `html` as the
   first argument and your options as the second.

    ```
    $client->createDocument(<your html>, $options)
    ```
