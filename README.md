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
Slugable::generate(App\Model\EloquentModel::class,'input-value','slugable-column-name','separator');
```

## Example

```php
Slugable::generate(App\Model\EloquentModel::class,'Hasan Rahman','slug','--');
// hasan--rahman

Slugable::generate(App\Model\EloquentModel::class,'Hasan Rahman','slug','--');
// hasan--rahman--1
```
