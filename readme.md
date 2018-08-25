<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Проект API CRUD на основе Laravel 5.7 
Данный проект написан на основе Laravel 5.7 и использует рекурсию для вывода контента. Весь CRUD контента доступен через Api.
Cкачать проект возможно 2 способами

## 1. Скачать проект
1. <a href="file:///AndreyDuda/commentapi.loc/archive/master.zip">Скачать</a>
2. Запустите миграцию, чтобы создать нужные таблицу базы данных:
<pre>
<code>php artisan migrate</code>
</pre>
3. Запустите посев данных, чтобы наполнить нужные таблицу базы данных:
<pre>
<code>php artisan db:seed</code>
</pre>

## 2. Клонировать проект 
1. Можно клонировать проект при помощи git 
<pre>
<code>git clone git://github.com/AndreyDuda/commentapi.loc.git</code>
</pre>
или
<pre>
<code>https://github.com/AndreyDuda/commentapi.loc.git</code>
</pre>

## Особенности использования CRUD проекта 

Для использование API рекомендуется исплользовать программу Postman.<br><br>
Посмотреть весь контент GET
<pre>
<code>http://localhost/comment</code>
</pre>
Создать новый контент POST передать данные (обязательные : text, необязательные : parent_id)
<pre>
<code>http://localhost/comment</code>
</pre>     
Посмотреть определенный контент GET 
<pre>
<code>http://localhost/comment/id</code>
</pre>     
Редактировать контент PUT передать данные (обязательные : text, необязательные : parent_id)
<pre>
<code>http://localhost/comment/id</code>
</pre>  
Удалить контент DELETE
<pre>
<code>http://localhost/comment/id</code>
</pre>

Так же доступен просмотр отображение всего контента в браузере по ссылке 
<pre>
<code>http://localhost/comment</code>
</pre>      
## Тестирование

Тестируется проект при помощи phpunit. Тестирование доступно из командой строки командой:
<pre>
<code>composer test</code>
</pre>
