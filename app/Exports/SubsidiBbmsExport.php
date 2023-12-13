<?php

namespace App\Exports;

use App\Models\SubsidiBbm;
use Maatwebsite\Excel\Concerns\FromCollection;

class SubsidiBbmsExport implements FromCollection
{
    public function collection()
    {
        return SubsidiBbm::select('tanggal', 'saldo')->get();
    }

    public function headings(): array
    {
        return [
            'tanggal',
            'saldo'
        ];
    }
}
