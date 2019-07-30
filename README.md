# Komicho Laravel ModelActivity
Create an activity log for each user.

### Install via composer
```
$ composer require komicho/laravel-user-activity
```

### Publish vendor
- Run `php artisan vendor:publish`
- Selection `Komicho\Laravel\ModelActivity\ServiceProvider`

## Functions :-
### Add Activity
```php
use Komicho\Laravel\ModelActivity\Activity;
// add
Activity::add(<user_id>, <item_id>, '<definition_flag>');
```
### Config file
Go to `config/komicho/user_activity.php`
- You can set definitions:- 
```php
'definitions' => [
    '<definition_flag>' => '<definition_text>'
]
```

### Use Trait in user model
```php
use Komicho\Laravel\ModelActivity\Traits\ModelActivity;

class User extends Authenticatable
{
    use ModelActivity;
    ...
```
### Get all activitys for user:-
```php
Auth::user()->activitys;
```