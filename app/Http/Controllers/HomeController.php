<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kajian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    public function index() 
    {
        $status = 'Active';
        $kajianTerbaru = DB::table('kajians')
            ->orderBy('tahun', 'desc')
            ->limit(4)
            ->get();

        $daftarKajian = DB::table('kajians')
            ->orderBy('tahun', 'desc')
            ->paginate(6);

        $tahun = Carbon::now()->isoFormat('Y');

        return view('home', compact('status', 'kajianTerbaru', 'daftarKajian', 'tahun'));
    }

    public function archives()
    {
        $status = 'Active';
        $tahun = Carbon::now()->isoFormat('Y');
        return view('archives', compact('status', 'tahun'));
    }

    public function getDataKajian(Request $request)
    {
       $data = Kajian::all();
       if ($request->ajax()) {
           return DataTables::of($data)
           ->addIndexColumn()
           ->toJson();
       }

    }

}
