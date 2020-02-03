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

###Запросы
```php
php artisan make:request BlogCategoryUpdateRequest
```

###Репозитории ( не работает )
```php
php artisan make:repository UserRepository
```


#Observers - Наблюдатель

### Создание
```php
php artisan make:observer BlogPostObserver --model=Models\BlogPost
php artisan make:observer BlogCategoryObserver --model=Models\BlogCategory
```



#Jobs - Очереди

Мигигарция  для таблиц очери
```php
php artisan queue:table
```

Миграция для таблиц где за фейленные очереди
```php
php artisan queue:failed-table
```

Создание джоба
```php
php artisan make:job BlogPostAfterCreate
```

#Jobs - Запуск очереди
```php
php artisan queue:work
```
Запускает процесс обработки очередеи как демона
Все  изминения сделанные в коде после запуска приняты не будут
То есть после апдейта кода потребуеться перезапуск команды

```php
php artisan queue:work --queue=queueName1,queueName2
```
Сначала выполняться задачи из очереди queueName1, затем queueName2

```php
php artisan queue:listen
```
// Запусек процесс обработки задач указанной очереди
изминения сдлеанные в коде после запуска будут приняты
Хуже по производительности в сравнений с queue:work

```php
php artisan queue:restart
```
// мягкий перезапуск демона queue:work после того как тот завершит выполняемую задачу


```php
php artisan queue:fieled
```
// Просмотор таблицы проваленных заач

```php
php artisan queue:retry all
```
// Возврат в очередь выполенния всех проваленных задач

```php
php artisan queue:retry 5
```
// Возврат проваленной задачи (id=5) очеред выполенения
