### Quick Simple base shopping cart model (product id , user_id and qty) for Laravel
1.Install:
```php
composer require skygdi/shopping-cart
```
2.Public migration files:
```php
php artisan vendor:publish --provider="skygdi\ShoppingCart\ShoppingCartProvider"
```
3.Migrate
```php
php artisan migrate
```


4.Usage:
```php
use skygdi\ShoppingCart\model\ShoppingCart;

//create
ShoppingCart::create([
  "product_id"      =>  1,
  "user_id"         =>  1,
  "qty"             =>  5,
]);

```

___