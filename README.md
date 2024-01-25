# Text Filter for Laravel Nova

[![Latest Version on Packagist](https://img.shields.io/packagist/v/reedware/nova-text-filter.svg?style=flat-square)](https://packagist.org/packages/reedware/nova-text-filter)
[![Total Downloads](https://img.shields.io/packagist/dt/reedware/nova-text-filter?style=flat-square)](https://packagist.org/packages/reedware/nova-text-filter)



## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

### For Nova v4

```bash
composer require reedware/nova-text-filter:^2.0
```

### For Nova v3

```bash
composer require reedware/nova-text-filter:^1.0
```

## Usage

Create a new filter and extend the abstract text filter:

```php
<?php

namespace App\Nova\Filters;

use Reedware\NovaTextFilter\TextFilter;

class MyFilter extends TextFilter
{
    /**
    * Apply the filter to the given query.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Illuminate\Database\Eloquent\Builder  $query
    * @param  mixed  $value
    * @return \Illuminate\Database\Eloquent\Builder
    */
    public function apply(Request $request, $query, $value)
    {
        return $query->where('my_column', 'like', "{$value}%");
    }
}
```
