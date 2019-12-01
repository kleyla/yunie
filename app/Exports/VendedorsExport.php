<?php

namespace App\Exports;

use App\Vendedor;
use Maatwebsite\Excel\Concerns\FromCollection;

class VendedorsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Vendedor::where('estado', true)->get();
    }
}
