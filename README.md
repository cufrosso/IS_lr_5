# Разработка сервисов
## Текст задания
### Цель работы
Разработать и реализовать алгоритм внешней сортировки. Данные хранятся на сервере в массиве, сервер предоставляет доступ у отдельным элементам. Клиент поочередно запрагивая отдельные ячейки сортирует массив.
## Ход работы
- Пользовательский интерфейс
- Пользовательские сценарии работы
- API сервера и хореографию
- Структура базы данных
- Алгоритмы
1) [Пользовательский интерфейс]()

2) Пользовательские сценарии работы

Пользователь попадает на страницу *index.php*. Вводит свой логин и текст поста. В случае корректного ввода данных, его сообщение появится на общей стене в обратном хронологическом порядке, вверху новые, внизу старые публикации. Пользователи могут ставить лайки на понравившиеся записи или убирать их. Также есть возможность изменить содержание записи, с помощью кнопки *change*, при нажании на которую пользователь переходит на страницу *update.php*, где вносит изменения в текст поста. Есть возможность удалять записи, с помощью кнопки *delete*.

3. API сервера и хореография

![Добавление]()

![Удаление]()

4. Структура БД

*channels*
| Название | Тип | Длина | NULL | Описание |
| :------: | :------: | :------: | :------: | :------: |
| **id** | INT | - | - | id элемента |
| **value** | INT | - | - | значение элемента |


5. Алгоритмы

*Add post*

![add]()

*Delete post*

![delete]()

*Reaction*

![Reaction]()

6. HTTP запросы/ответы

*Запрос*

POST /lr_2/post.php HTTP/1.1
Host: localhost
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
Content-Type: multipart/form-data; boundary=----WebKitFormBoundaryZKZMQG3xtLB9EA47
sec-ch-ua: "Not?A_Brand";v="8", "Chromium";v="108", "Google Chrome";v="108"
sec-ch-ua-mobile: ?0
sec-ch-ua-platform: "Windows"
Upgrade-Insecure-Requests: 1
User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36

*Ответ*

HTTP/1.1 302 Found
Connection: Keep-Alive
Content-Length: 0
Content-Type: text/html; charset=UTF-8
Date: Sat, 24 Dec 2022 06:29:18 GMT
Keep-Alive: timeout=120, max=999
Location: index.php
Server: Apache
X-Content-Type-Options: nosniff

7. Значимые фрагменты кода

*Функция добавления канала*
```php

```

*Функция отправления сообщения*
```php

```
