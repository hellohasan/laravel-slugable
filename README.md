# laravel Slugable

## Installation

```sh
composer require hellohasan/laravel-slugable
```

## Controller

### Import first facade

```php
use Hellohasan\LaravelSlugable\Facades\Slugable;
```

### User like this

```php
Slugable::generate(App\Model\EloquentModel::class,'input-value','filed-name','separator');
```

## Example

```php
Slugable::generate(App\Model\EloquentModel::class,'Hasan Rahman','name','--');
// hasan--rahman

Slugable::generate(App\Model\EloquentModel::class,'Hasan Rahman','name','--');
// hasan--rahman--1
```
