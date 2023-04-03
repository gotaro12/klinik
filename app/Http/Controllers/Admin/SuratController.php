<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Surat;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SuratController extends Controller
{
    public function index(Request $request)
    {
        // $surat = Surat::all();
        // return view('admin.surat.index', compact('surat'));
        if ($request->ajax()) {
            $data = Surat::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
     
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
       
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('admin.surat.index');
    
    }


    public function create()
    {
        return view('admin.surat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'name'   => 'required',
            'file' => 'required|max:2048',
        ],
        [
            'image.required' => 'Gambar slide harus diisi',
            'image.max' => 'Gambar slide maksimal 2MB',
        ]);
        $img = $request->file('file');
        $new_name = rand() . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('dokumen'), $new_name);
        $data = [
            'judul'   => $request->judul,
            'file' => $new_name,
        ];
        Surat::create($data);
        // Alert::success('Sukses Tambah', 'Sukses Tambah Data');
        return redirect()->route('surat.index');
    }

    public function edit($id)
    {

    }

    public function delete()
    {

    }
}
