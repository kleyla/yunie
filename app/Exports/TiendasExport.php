<?php

namespace App\Exports;

use App\Tienda;
use Maatwebsite\Excel\Concerns\FromCollection;

class TiendasExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Tienda::where('estado', true)->get();
    }
}
