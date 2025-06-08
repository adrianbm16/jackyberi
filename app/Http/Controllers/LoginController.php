<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email, // Obtiene el email del formulario de inicio de sesión
            'password' => $request->password, // Obtiene la contraseña del formulario de inicio de sesión
        ];
        
        $remember = ($request->has('remember') ? true : false); // Verifica si la opción "Recordarme" está seleccionada

        if (Auth::attempt($credentials, $remember)) { // Intenta autenticar al usuario con las credenciales proporcionadas
            
            Auth::login(Auth::user(), $remember); // Inicia sesión para el usuario autenticado

            $request->session()->regenerate(); // Regenera la sesión para prevenir ataques de fijación de sesión

            return redirect()->back(); // Redirige al usuario a la página anterior después de iniciar sesión

        }else{
            return redirect('login')->withErrors([
                'message' => 'Las credenciales proporcionadas no coinciden con nuestros registros.', // Mensaje de error si las credenciales son incorrectas
            ])->onlyInput(); // Mantiene el email ingresado en el formulario
        }

        
    }
    
    public function logout(Request $request)
    {
        Auth::logout(); // Cierra la sesión del usuario autenticado

        $request->session()->invalidate(); // Invalida la sesión actual
        $request->session()->regenerateToken(); // Regenera el token CSRF para prevenir ataques CSRF

        return redirect()->route('login'); // Redirige al usuario a el inicio de sesión
    }
}
