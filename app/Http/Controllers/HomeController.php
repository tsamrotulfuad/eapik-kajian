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
        $status = 'Active';
        $kajianTerbaru = DB::table('kajians')
            ->orderBy('tahun', 'desc')
            ->limit(4)
            ->get();

        $daftarKajian = DB::table('kajians')
            ->orderBy('tahun', 'desc')
            ->paginate(6);

        $tahun = Carbon::now()->isoFormat('Y');
        return view('welcome', compact('status', 'kajianTerbaru', 'daftarKajian', 'tahun'));
    }

    public function archives()
    {
        $status = 'Active';
        $listKajian = Kajian::all();

        return view('archives', compact('status', 'listKajian'));
    }

}
