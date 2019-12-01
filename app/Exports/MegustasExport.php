<?php

namespace App\Exports;

use App\Megusta;
use App\MegustaPub;
use App\Producto;
use App\Publicacion;
use App\Cliente;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

use DB;

class MegustasExport implements FromCollection, WithHeadings
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
            $megustas = MegustaPub::where('estado', true)->get();
            foreach ($megustas as $megusta) {
                $cliente = Cliente::where('id', $megusta->id_cliente)->first();
                // dd($cliente);
                // $megusta->idc = $cliente->id;
                $megusta->nombreCliente = $cliente->nombres;
                $publicacion = Publicacion::where('id', $megusta->id_publicacion)->first();
                // $megusta->idp = $publicacion->id;
                $megusta->descripcion = $publicacion->descripcion;
                $producto = Producto::where('id', $publicacion->id_producto)->first();
                $megusta->idpr = $producto->id;
                $megusta->nombrep = $producto->nombre;
            }
            return  $megustas;
        } else {
            $megustas = MegustaPub::where('estado', true)->whereBetween('created_at', [$this->fecha_ini, $this->fecha_fin])->get();
            foreach ($megustas as $megusta) {
                $cliente = Cliente::where('id', $megusta->id_cliente)->first();
                // dd($cliente);
                // $megusta->idc = $cliente->id;
                $megusta->nombreCliente = $cliente->nombres;
                $publicacion = Publicacion::where('id', $megusta->id_publicacion)->first();
                // $megusta->idp = $publicacion->id;
                $megusta->descripcion = $publicacion->descripcion;
                $producto = Producto::where('id', $publicacion->id_producto)->first();
                $megusta->idpr = $producto->id;
                $megusta->nombrep = $producto->nombre;
            }
            return  $megustas;
        }
    }
    public function headings(): array
    {
        return [
            'Id',
            'Estado',
            'id_cliente',
            'id_publicacion',
            'id_megusta',
            'fecha de creacion',
            'fecha de actualizacion',
            'Nombre del cliente',
            'Descripcion de la publicacion',
            'id producto',
            'Producto',
        ];
    }
}
