<?php

namespace App\Controllers;

use App\Models\UsuariosModel;  // Asegúrate de usar el namespace correcto sin "Usuarios"

class LoginController extends BaseController
{
    protected $usuarios;

    public function __construct()
    {
        $this->usuarios = new UsuariosModel();  // El modelo ya está correctamente cargado
    }

    public function index()
    {
        echo view('/Templetes/head');
        echo view('Login');
    }

    public function authenticate()
    {
        $session = session();
        $userModel = new UsuariosModel();

        // Obtener datos del formulario
        $correo = $this->request->getPost('username');  // 'username' es 'correo' en la base de datos
        $password = $this->request->getPost('password');

        // Buscar el usuario por correo
        $user = $userModel->where('correo', $correo)->first();

        if ($user) {
            // Comparar directamente la contraseña en texto plano
            if ($password === $user['contraseña']) {
                // Configuración de la sesión
                $sessionData = [
                    'id' => $user['id'],
                    'nombre' => $user['nombre'],
                    'correo' => $user['correo'],
                    'tipo_usuario' => $user['tipo_usuario'],  // Tipo de usuario: 'estudiante' o 'empresa'
                    'logged_in' => TRUE
                ];
                $session->set($sessionData);

                // Redirigir dependiendo del tipo de usuario
                if ($user['tipo_usuario'] === 'estudiante') {
                    $session->setFlashdata('success', 'Inicio de sesión exitoso. ¡Todo ok!');
                    return redirect()->to('/MenuEstudiante');
                }

                if ($user['tipo_usuario'] === 'empleador') {
                    $session->setFlashdata('success', 'Inicio de sesión exitoso. ¡Todo ok!');
                    return redirect()->to('/MenuEmpresas');
                }
                // Redirigir al dashboard de empresas en otro caso (agregar después)
            } else {
                // Contraseña incorrecta
                $session->setFlashdata('error', 'Contraseña incorrecta');
                return redirect()->back()->withInput();
            }
        } else {
            // Usuario no encontrado
            $session->setFlashdata('error', 'Usuario no encontrado');
            return redirect()->back()->withInput();
        }
    }


    public function logout()
    {
        $session = session();
        $session->destroy(); // Destruir la sesión del usuario
        $session->setFlashdata('success', 'Has cerrado sesión correctamente.');
        return redirect()->to('/login'); // Redirigir a la página de inicio de sesión
    }
}
