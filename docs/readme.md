### Создание БД

#### Создание модели и миграции
```php
php artisan make:model Models/BlogCategory -m
php artisan make:model Models/BlogPost -m
```
#### Создание сидов
```php
php artisan make:seeder UserTableSeeder
php artisan make:seeder BlogCategoriesTableSeeder
```

#### Запуск сидов
```php
php artisan db:seed
php artisan db:seed --class=UserTableSeeder
php artisan migrate:refresh --seed
```

### Контроллеры


#### Создание REST-Котроллера
```php
php artisan make:controller RestTestController --resource
```

#### Контроллеры прилоения
```php
php artisan make:controller TestController
```

### Маршруты

#### Помсотреть маршруты
```php
php artisan route:list
```
