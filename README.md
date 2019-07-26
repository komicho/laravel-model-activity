# Komicho Laravel UserActivity
Create an activity log for each user.

### Install via composer
```
$ composer require komicho/laravel-user-activity
```

### Publish vendor
- Run `php artisan vendor:publish`
- Selection `Komicho\Laravel\UserActivity\ServiceProvider`

## Functions :-
### Add Activity
```php
use Komicho\Laravel\UserActivity\Activity;
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
use Komicho\Laravel\UserActivity\Traits\UserActivity;

class User extends Authenticatable
{
    use UserActivity;
    ...
```
### Get all activitys for user:-
```php
Auth::user()->activitys();
```