# campus-connect
CampusConnect - is a web application developed to help students tackle the everyday challenges they face during university life and beyond. Supported by Center-Invest, this app aims to enhance the student experience by providing useful tools and advice for academic and personal growth.
 
# Основные возможности

Оплата: микросервис для управления и обработки платежей за общежитие и другие услуги, интегрированный с RabbitMQ для обеспечения надежной очереди сообщений.
Расписание: получение и отображение расписания занятий с обновлениями в реальном времени.
Обработка данных с помощью ИИ: интеграция с ИИ для анализа данных, генерации информации и ответа на вопросы.
Парсинг вакансий и работы: сбор данных о вакансиях и возможностях трудоустройства для студентов из различных источников.

# Технологии

Backend: Laravel 10
Frontend: Vue 3 с Inertia.js
Очереди и микросервисы: RabbitMQ
Сборка: Vite
База данных: MySQL
API: взаимодействие с внешними сервисами для расписания и вакансий
Стили: Bootstrap

# Требования

PHP 8.2+
Node.js 16+
Composer
MySQL
Redis
Nginx
RabbitMQ

## Установка

# Клонирование репозитория
git clone <URL вашего репозитория>
cd campus-connect

# Установите зависимости PHP и Node.js:
composer install
npm install

# Настройка переменных окружения
cp .env.example .env

# Генерация ключа приложения
php artisan key:generate

# Запуск миграций и сидеров
php artisan migrate --seed

## Сборка фронтенда
# Для разработки: 
npm run dev

# Для продакшена:
npm run build

## Настройка Nginx
server {
listen 80;
server_name your_domain.com;
root /var/www/campus-connect/public;
index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }
}

# Основные маршруты
/login — страница входа
/dashboard — панель управления
/chat — чат
/hackathon-page — страница хакатонов
/news — новости
/schedule-card — расписание занятий
/vacancies-card — вакансии и работа

# Авторы 
веб-команда icm (t.me/userix61)
