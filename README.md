# Курс доллара

Проект для отображения текущего курса доллара США к рублю по данным ЦБ РФ.

### Запуск сервера

```
php -S localhost:8000 -t src
```

#### После запуска откройте в браузере:
http://localhost:8000

#### Как это работает
- Frontend (index.html) делает запрос к API (/api/DollarRate.php)
- Backend (DollarRate.php) получает актуальный курс доллара с сайта ЦБ РФ
- Данные возвращаются в формате JSON и отображаются на странице

### Тестирование
Для запуска тестов выполните:

```
./vendor/bin/phpunit
```

### Linter
Для запуска linter выполните:

```
./vendor/bin/php-cs-fixer fix --dry-run --diff
```

Технологии
- PHP (для backend API)
- HTML/CSS (Bootstrap 5 для стилей)
- JavaScript (Fetch API для запросов)
