<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Clientes extends Controller
{
    public function validacionDeUsuario(Request $request){

        try {
            $client = new Client();

            $headers = [
                'Content-Type' => 'application/json'
            ];

            $body = '{
                "correo": "' . $request->input('email') . '",
                "contrasenia": "' . $request->input('password') . '"
            }';

            $response = $client->post('http://localhost:8080/clientes/validar', [
                'headers' => $headers,
                'body' => $body
            ]);

            $correo = $request->input('email');

            if($response->getBody() == "true") {
                return view('home', compact('correo'));
            }

            return redirect(route('cliente.registro'));

        } catch (RequestException $e) {
            echo 'Error al realizar la solicitud: ' . $e->getMessage();
        }
    }

    public function registrar(Request $request){
        try {
            $client = new Client();

            $headers = [
                'Content-Type' => 'application/json'
            ];

            $body = '{
                "correo": "' . $request->input('email') . '",
                "nombre": "' . $request->input('name') . '",
                "apellido": "' . $request->input('apellido') . '",
                "contrasenia": "' . $request->input('password') . '",
                "telefono": "' . $request->input('telefono') . '",
                "direccion": "' . $request->input('direccion') . '" 
            }';
            
            
            $response = $client->post('http://localhost:8080/clientes/crear', [
                'headers' => $headers,
                'body' => $body
            ]);

            if($response->getBody() == "true"){
                return redirect(route('cliente.login'));
            }

            return redirect(route('cliente.registro'));

        } catch (RequestException $e) {
            echo 'Error al realizar la solicitud: ' . $e->getMessage();
        }
    }
    
}
