<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Paginas extends Controller
{
    // Método para cargar la página de inicio cuando el slug llega vacío
    public function index()
    {
        // Carga la vista de inicio
        return view('paginas/inicio');
    }

    // Método para cargar las vistas dinámicas
    public function vista($segment1, $segment2 = null)
    {
        if ($segment2) {
            $viewPath = $segment1 . '/' . $segment2;
        } else {
            $viewPath = $segment1;
        }
        
        // Verifica si la vista existe
        if (!is_file(APPPATH . 'Views/paginas/' . $viewPath . '.php')) {
            // Si la vista no existe, muestra un error 404
            throw new \CodeIgniter\Exceptions\PageNotFoundException($viewPath);
        }

        // Carga la vista
        return view('paginas/' . $viewPath);

    }
}