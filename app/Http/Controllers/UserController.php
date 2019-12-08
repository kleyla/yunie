<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\User;
use App\Vendedor;
use App\Cliente;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = DB::table('users')->where('estado', true)->get();
        // dd($usuarios);
        $permisos = DB::table('permisos')->where('estado', true)->get();
        return \view('admin.usuarios.usuarios', \compact('usuarios', 'permisos'));
    }

    public function verUsuario($idu)
    {
        $usuario = User::find($idu);
        if ($usuario != null) {
            $vendedor = DB::table('vendedors')->where('id_user', $usuario->id)->first();
            if ($vendedor != null) {
                $tiendas = DB::select("select tiendas.*
                    from tiendas
                    where tiendas.id_vendedor = $vendedor->id");
            } else {
                $tiendas = null;
            }
            // dd($tiendas);
            return \view('admin.usuarios.verUsuario', \compact('usuario', 'tiendas'));
        }
    }

    public function userAdd(Request $request)
    {
        $user = new User();
        $file = $request->file('foto');
        if ($file) {
            $path = public_path() . '/img/users';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($path, $fileName);
            $user->foto = $fileName;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->id_permiso = $request->permiso;
        $user->save();
        $request->session()->flash('alert-success', 'Usuario guardado con exito!');
        return \redirect()->route('usuarios');
    }

    public function editUsuario($idu)
    {
        $usuario = User::find($idu);
        if ($usuario != null) {
            return \view('admin.usuarios.editUsuario', \compact('usuario'));
        }
    }

    public function destroy(Request $request, $idu)
    {
        $user = User::find($idu);
        if ($user != null) {
            $user->estado = false;
            $user->save();
            $request->session()->flash('alert-danger', 'Usuario guardado con exito!');
        }
        return \redirect()->route('usuarios');
    }

    public function store(Request $request, $idu)
    {
        $user = User::find($idu);
        if ($user != null) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            $request->session()->flash('alert-success', 'Usuario editado con exito!');
            return \redirect()->route('verUsuario', $idu);
        }
    }

    public function dash()
    {
        return \view('admin.dash');
    }

    // public function downUsers()
    // {
    //     return Excel::download(new UsersExport, 'users.xlsx');
    // }

    // APIS
    public function loginApi(Request $request)
    {
        $user = DB::table('users')->where('email', $request->email)->first();
        //dd($request->email);
        if (is_null($user)) {
            return response()->json();
        } elseif (Hash::check($request->password, $user->password)) {
            return response()->json($user, 200);
        } else {
            return response()->json();
        }
        //return \response()->json($user, 200);
    }
    public function usuariosApi()
    {
        $usuarios = DB::table('users')->where('estado', true)->get();
        return \response()->json($usuarios, 200);
    }
    public function imageUser($fileName)
    {
        return \response()->download(public_path("/img/users/$fileName"));
    }
    public function registerApi(Request $request)
    {
        if ($request->nombres == null || $request->email == null || $request->password = null || $request->id_firebase==null) {
            return response()->json();
        } else {
            $usuario = new User();
            $usuario->id_firebase = $request->id_firebase;
            $usuario->name = $request->nombres.' '.$request->apellidos;
            $usuario->email = $request->email;
            $usuario->password = bcrypt($request->password);
            $usuario->id_permiso = 3;
            $usuario->save();
            $vendedor = new Cliente();
            $vendedor->nombres = $request->nombres;
            $vendedor->apellidos = $request->apellidos;
            $vendedor->id_user =$usuario->id;
            $vendedor->save();
            return response()->json($usuario, 200);
        }
    }
}
