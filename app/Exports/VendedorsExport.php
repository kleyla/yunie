<?php

namespace App\Exports;

use App\Vendedor;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class VendedorsExport implements FromCollection, WithHeadings
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
            $vendedores = Vendedor::where('estado', true)->get();
            foreach ($vendedores as $vendedor) {
                // dd($vendedor);
                $user = User::where('id', $vendedor->id_user)->first();
                // dd($user);
                $vendedor->email = $user->email;
            }
            return $vendedores;
        } else {
            $vendedores = Vendedor::where('estado', true)->whereBetween('created_at', [$this->fecha_ini, $this->fecha_fin])->get();
            foreach ($vendedores as $vendedor) {
                $user = User::where('id', $vendedor->id_user)->first();
                $vendedor->email = $user->email;
            }
            return $vendedores;
        }
    }
    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Apellido',
            'Fecha de naciemiento',
            'Direccion',
            'telefono',
            'Estado',
            'id_usuario',
            'fecha de creacion',
            'fecha de actualizacion',
            'email del vendedor',
        ];
    }
}
