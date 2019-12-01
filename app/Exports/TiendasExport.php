<?php

namespace App\Exports;

use App\Tienda;
use App\Vendedor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class TiendasExport implements FromCollection, WithHeadings
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
        // dd($this->fecha_fin.' '.$this->fecha_ini);
        if ($this->fecha_ini == $this->fecha_fin) {
            $tiendas = Tienda::where('estado', true)->get();
            foreach ($tiendas as $tienda) {
                $vendedor = Vendedor::where('id', $tienda->id_vendedor)->first();
                $tienda->vendedor = $vendedor->nombres . ' ' . $vendedor->apellidos;
            }
            return $tiendas;
        } else {
            $tiendas = Tienda::where('estado', true)->whereBetween('created_at', [$this->fecha_ini, $this->fecha_fin])->get();
            foreach ($tiendas as $tienda) {
                $vendedor = Vendedor::where('id', $tienda->id_vendedor)->first();
                $tienda->vendedor = $vendedor->nombres . ' ' . $vendedor->apellidos;
            }
            return $tiendas;
        }
    }
    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Nit',
            'Telefono',
            'Direccion',
            'Estado',
            'Foto',
            'id_vendedor',
            'Ubicacion',
            'fecha de creacion',
            'fecha de actualizacion',
            'vendedor',
        ];
    }
}
