<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kajian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() 
    {
        $kajianTerbaru = DB::table('kajians')
            ->orderBy('tahun', 'desc')
            ->limit(4)
            ->get();

        $daftarKajian = Kajian::all();

        $tahun = Carbon::now()->isoFormat('Y');
        // return dd($kajianTerbaru);
        return view('welcome', compact('kajianTerbaru', 'daftarKajian', 'tahun'));
    }

}
