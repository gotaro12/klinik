<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KonsultasiController extends Controller
{
    public function index(Request $request)
    {
        // $surat = Surat::all();
        // return view('admin.surat.index', compact('surat'));
        if ($request->ajax()) {
            $data = Konsultasi::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
     
                           $btn = '<a href="'.route('konsultasi.show',$row->id).'" class="edit btn btn-primary btn-sm">View</a>';
       
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('admin.konsultasi.index');
    
    }

    public function show($id)
    {
        $konsul = Konsultasi::find($id);
        return view('admin.konsultasi.show', compact('konsul'));
    }
}
