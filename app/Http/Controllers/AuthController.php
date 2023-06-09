<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function __construct() {
        $this->middleware(['auth'])->only(['createUser','ListadoUsuarios','editUsuarios']);
    }

    public function login()
    {
        $titulo = 'login';
        if (Auth::check()) {
            return redirect()->route('inicio');
        }
        return view('/login/login', compact('titulo'));
    }

    public function logear(Request $request)
    {
        $credenciales = $request->only('user', 'password');
        if (Auth::attempt($credenciales)) {
            return redirect()->route('inicio');
        } else {
            Alert::error('Error de inicio de sesión', 'Las credenciales son incorrectas o el usuario no esta dado de alta');
            return back()->withInput($credenciales);
        }
    }

    public function logout()
    {
        $nombreUsuario = Auth::user()->user;
        Auth::logout();
        Session::flush();
        Alert::success('¡Hasta luego '. $nombreUsuario . '!', 'Has cerrado sesión' );
        return redirect()->route('auth-login');

    }


    public function createUser()
    {
        $titulo = 'Agregar Usuario';
        $items = User::all();
        return view('/login/agregarUsuario', compact('titulo', 'items'));
    }

    public function agregarNuevo(Request $request){
        $item = new User();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->user = $request->user;
        $item->password = Hash::make($request->password);
        $item->save();
        Alert::success('Realizado', '¡El usuario se agrego correctamente!');
        return redirect('/inicio');
    }

    // public function agregarNuevo(){ 
    //     $item = new User();
    //     $item->name = 'admin';
    //     $item->email = 'admin@gmail.com';
    //     $item->user = 'admin';
    //     $item->password = Hash::make('12345');
    //     $item->save();
    //     return $item;
    // }

    public function ListadoUsuarios(){
        $titulo = 'Listado Usuarios';
        $items = User::all();
        return view('/login/listadoUsuarios', compact('titulo','items'));

    }

    public function editUsuarios($id)
    {
        $titulo = 'Editar Usuarios';
        $items = User::find($id);
        return view('/login/editarUsuarios', compact('titulo', 'items'));
    }

    public function updateUsuarios(Request $request, $id)
    {
        $item = User::find($id);
        $item->name = $request->name;
        $item->email = $request->email;
        $item->user = $request->user;
        $item->password = Hash::make($request->password);
        $item->save();
        Alert::success('Realizado', '¡Los datos del usuario se actualizaron correctamente!');
        return redirect('/listadoUsuarios');
    }

    public function destroyUsuarios($id){
        $item = User::find($id);
            // Verificar si el usuario a borrar es el mismo que está logeado
        if ($item->id === auth()->user()->id) {
        // no puede borrar el usuario que esta en sesion
            Alert::error('Error al eliminar usuario', 'No puedes eliminar un usuario que esta logeado');
        return redirect()->back();
        }
        $item->delete();
        Alert::success('Realizado', '¡El usuario se elimino correctamente!');
        return redirect('/listadoUsuarios');
    }



}
