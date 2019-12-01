<?php

namespace App\Exports;

use App\User;
use App\Permiso;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Carbon\Carbon;

use DB;

class UsersExport implements FromCollection, WithHeadings
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
            $users = User::where('estado', true)->get();
            foreach ($users as $user){
                $permiso = Permiso::where('id', $user->id_permiso)->first();
                $user->permiso = $permiso->nombre;
            }
            return $users;
        } else {
            $users = User::where('estado', true)->whereBetween('created_at', [$this->fecha_ini, $this->fecha_fin])->get();
            foreach ($users as $user){
                $permiso = Permiso::where('id', $user->id_permiso)->first();
                $user->permiso = $permiso->nombre;
            }
            return $users;
        }
    }
    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Email',
            'Estado',
            'Foto',
            'id_permiso',
            'verificar email',
            'fecha de creacion',
            'fecha de actualizacion',
            'Permiso',
        ];
    }
}
