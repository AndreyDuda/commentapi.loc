<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Проект API CRUD на основе Laravel 5.7 
Для использование API рекомендуется исплользовать программу Postman

Посмотреть весь контент         GET    http:://localhost/comment
Создать новый контент           POST   http:://localhost/comment     передать данные обязательные : text, необязательные : parent_id
Посмотреть определенный контент GET    http:://localhost/comment/id
Редактировать контент           PUT    http:://localhost/comment/id  передать данные обязательные : text, необязательные : parent_id
Удалить контент                 DELETE http:://localhost/comment/id

## Тестирование

Тестируется проект при помощи phpunit. Тестирование доступно из командой строки командой composer test
