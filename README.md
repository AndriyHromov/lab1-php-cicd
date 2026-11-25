# PHP CI/CD Lab — Calculator

Мінімальний PHP-проєкт для лабораторної роботи №1 «Керування версіями та налаштування CI/CD пайплайну для PHP-проєкту».

[![PHP CI Application](https://github.com/AndriyHromov/lab1-php-cicd/actions/workflows/php-ci.yml/badge.svg)](https://github.com/AndriyHromov/lab1-php-cicd/actions/workflows/php-ci.yml)

## Функціонал

- Клас `App\Services\Calculator` з операціями додавання та віднімання.
- Юніт-тести PHPUnit для обох операцій.
- Автоматична перевірка стилю коду за допомогою Laravel Pint.
- CI-пайплайн на GitHub Actions (PHP 8.2, Ubuntu).
- Демонстрація приховання секрету `MY_SUPER_SECRET_KEY` у логах.

## Структура

```text
.github/
  workflows/php-ci.yml
  PULL_REQUEST_TEMPLATE.md
app/Services/Calculator.php
tests/Unit/CalculatorTest.php
composer.json
phpunit.xml
.gitignore
README.md
```

## Запуск тестів локально

> Локально PHP і Composer не обов'язкові — усе перевіряється на GitHub Actions.
> Якщо ви все ж хочете запустити перевірки локально:

```bash
composer install
./vendor/bin/pint --test
./vendor/bin/phpunit tests/Unit
```
