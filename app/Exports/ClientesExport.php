<?php

namespace App\Exports;

use App\Cliente;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ClientesExport implements FromCollection, WithHeadings
{
    protected $fecha_ini;
    protected $fecha_fin;

    public function __construct($fecha_ini, $fecha_fin)
    {
        $this->fecha_ini = $fecha_ini;
        $this->fecha_fin = $fecha_fin;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->fecha_ini == $this->fecha_fin) {
            $clientes = Cliente::where('estado', true)->get();
            foreach ($clientes as $cliente) {
                // dd($vendedor);
                $user = User::where('id', $cliente->id_user)->first();
                // dd($user);
                $cliente->email = $user->email;
            }
            return $clientes;
        }else{
            $clientes = Cliente::where('estado', true)->whereBetween('created_at', [$this->fecha_ini, $this->fecha_fin])->get();
             foreach ($clientes as $cliente) {
                // dd($vendedor);
                $user = User::where('id', $cliente->id_user)->first();
                // dd($user);
                $cliente->email = $user->email;
            }
            return $clientes;
        }
    }
    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Apellido',
            'Fecha de naciemiento',
            'Genero',
            'telefono',
            'ci',
            'Monedas',
            'Direccion',
            'Latitud',
            'Longitud',
            'Estado',
            'id_usuario',
            'Ubicacion',
            'fecha de creacion',
            'fecha de actualizacion',
            'email',
        ];
    }
}
