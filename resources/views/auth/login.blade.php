<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <style>
        /* Общие стили страницы */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #e6f7e6;
            font-family: Arial, sans-serif;
            color: #2c5f2d;
        }

        /* Стили контейнера формы */
        .form-container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px 40px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }

        /* Заголовок */
        h1 {
            color: #2c5f2d;
            margin-bottom: 20px;
        }

        /* Сообщение об ошибках */
        .error-messages {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .error-messages ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        /* Поля формы */
        label {
            display: block;
            margin: 10px 0 5px;
            color: #2c5f2d;
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #b5e7a0;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #f0fff0;
            color: #2c5f2d;
        }

        /* Кнопка отправки */
        button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            border: none;
            border-radius: 4px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h1>Вход</h1>

    @if ($errors->any())
        <div class="error-messages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Войти</button>
    </form>
</div>
</body>
</html>
