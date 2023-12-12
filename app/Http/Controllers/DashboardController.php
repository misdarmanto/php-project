<?php

namespace App\Http\Controllers;

use App\Exports\SubsidiBbmsExport;
use App\Imports\SubsidiBbmsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\SubsidiBbm;

class DashboardController extends Controller
{
    public function index()
    {
        $subsidiBbm = SubsidiBbm::all();

        return view('dashboard.index', compact('subsidiBbm'));
    }

    public function export()
    {
        return Excel::download(new SubsidiBbmsExport, 'dashboard.xlsx');
    }

    public function import(Request $request)
    {
        $file = $request->file('file');

        Excel::import(new SubsidiBbmsImport, $file);

        return redirect()->route('dashboard.index')->with('success', 'Data imported successfully.');
    }
}
