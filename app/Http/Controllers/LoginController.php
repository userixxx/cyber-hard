<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Показ формы входа
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Обработка данных входа
     */
    public function login(Request $request)
    {
        // Валидация данных
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Попытка аутентификации
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            // Перенаправление после успешного входа
            return redirect()->intended(route('home.page'));

        }

        // Если аутентификация не удалась
        return back()->withErrors([
            'email' => 'Неверный email или пароль.',
        ])->withInput();
    }

    /**
     * Выход из системы
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
