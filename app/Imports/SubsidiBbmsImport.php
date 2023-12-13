<?php

namespace App\Imports;

use App\Models\SubsidiBbm;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SubsidiBbmsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new SubsidiBbm([
            'tanggal' => $row['tanggal'],
            'saldo' => $row['saldo'],
        ]);

        return null;
    }
}
