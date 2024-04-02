# Laravel canonical

Laravel Canonical is a simple package designed to help you manage canonical URLs in your Laravel applications. This
package provides a convenient way to generate canonical URLs based on the current request, allowing you to avoid
duplicate content issues and improve SEO.

# Installation

```bash
composer require salamwaddah/laravel-canonical
```

# Usage

Add to your layout or any blade file where canonical is needed

```php
<link rel="canonical" href="{{ canonical() }}"/>
```

# Configuration

The package comes with a default configuration file that allows you to specify which query parameters should be included
in the canonical URL.

The following default configuration will filter out any query parameters in the page URL and only allow
the `page=1`, `page=2`, `page=...`

```php
// canonical.php
'allowed_params' => [
    'page',
],
```

You can customize this configuration to meet your specific requirements. To publish the
configuration file, run the following command:

```bash
php artisan vendor:publish --tag=laravel-canonical-config
```

# Testing

```bash
composer test
```
