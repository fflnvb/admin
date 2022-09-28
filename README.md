# FFLNVB.admin


TODO: Auth Middleware needs reroute to admin.Login
Also clear cache after installation
<p align="center">
<img src="https://img.shields.io/badge/Laravel%20-9.26.1-red.svg?logo=laravel" alt="Laravel 9">&nbsp;
<img src="https://img.shields.io/badge/PHP-8.1.10-blue.svg?logo=php" alt="PHP 8.1.10">&nbsp;
<img src="https://img.shields.io/badge/Composer-2.1.5-9cf.svg?logo=composer" alt="Composer 2.1.5">&nbsp;
<img src="https://img.shields.io/badge/Status-In%20development-yellow.svg" alt="Status: In Development">
</p>

Simple administration backend for Laravel

## Features
- Backend Area on /admin
- Login Controller
- Responsive Sidebar
- Blade Components for resource Controllers

## Getting started
Install via Composer

```Shell
composer install fflnvb/admin
```

Publish Config and Admin Route file

```Shell
php artisan vendor:publish --tag=fflnvb-admin
```

## Documentation

### Component ordering
Please stick to the following order on using the blade components
- mask.index|show|edit
    - mask.feedback
    - mask.item
        - mask.forms.*


### mask.index
```Blade
<x-admin::mask.index :name="$name" :routeName="$routeName" :single="$single">{slot}</x-admin::mask.index>
```

Mask for listing all model Items.

*Attributes*

- `$name` (string) - Display name of the model
- `$single` (string) - Singular name of the model
- `$routeName` (string) - Name of the route for the (resource) controller
- `{slot}` (string) - Space for items


### mask.show
```Blade
<x-admin::mask.show :name="$name" :model="$model">{slot}</x-admin::mask.show>
```

Mask for showing a single model.

*Attributes*

- `$name` (string) - Display name of the model
- `$model` (string) - Name of the model
- `{slot}` (string) - Space for items


### mask.edit
```Blade
<x-admin::mask.edit :name="$name" :model="$model">{slot}</x-admin::mask.edit>
```

Mask for editing models.

*Attributes*

- `$name` (string) - Display name of the model
- `$model` (string) - Name of the model
- `{slot}` (string) - Space for items

### mask.feedback
```Blade
<x-admin::mask.feedback />
```

Space for errors and related feedback.

*No attributes*


### mask.item
```Blade
<x-admin::mask.item>{slot}</x-admin::mask.edit>
```

Single item inside mask (li.list-item).

*Attributes*

- `{slot}` (string) - Space for displaying Form Items or model attributes.

## Library Mentions
This Package contains compiled and minified js and css files with [Bootrap with Popper.js](https://www.npmjs.com/package/bootstrap), [Bootstrap Icons](https://www.npmjs.com/package/bootstrap-icons), [Alpine.js](https://www.npmjs.com/package/alpinejs) as well as [Alpine Breakpoints Plugin](https://www.npmjs.com/package/alpinejs-breakpoints).  
They are all being Licensed under MIT.

## License
MIT
