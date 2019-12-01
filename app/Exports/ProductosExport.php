<?php

namespace App\Exports;

use App\Producto;
use App\Categoria;
use App\Tienda;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ProductosExport implements FromCollection, WithHeadings
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
            $productos = Producto::where('estado', true)->get();
            foreach ($productos as $producto) {
                $categoria = Categoria::where('id', $producto->id_categoria)->first();
                $producto->categoria = $categoria->nombre;
                $tienda = Tienda::where('id', $producto->id_tienda)->first();
                $producto->tienda = $tienda->nombre;
            }
            return $productos;
        } else {
            $productos = Producto::where('estado', true)->whereBetween('created_at', [$this->fecha_ini, $this->fecha_fin])->get();
            foreach ($productos as $producto) {
                $categoria = Categoria::where('id', $producto->id_categoria)->first();
                $producto->categoria = $categoria->nombre;
                $tienda = Tienda::where('id', $producto->id_tienda)->first();
                $producto->tienda = $tienda->nombre;
            }
            return $productos;
        }
    }
    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Descripcion',
            'Precio',
            'Stock',
            'foto',
            'Estado',
            'id_categoria',
            'id_tienda',
            'fecha de creacion',
            'fecha de actualizacion',
            'Categoria',
            'Tienda',
        ];
    }
}
