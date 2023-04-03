<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use App\Models\Surat;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function alur()
    {
        return view('frontend.alur');
    }

    public function surat(Request $request)
    {
        // return view('frontend.surat');
        if ($request->ajax()) {
            $data = Surat::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
     
                           $btn = '<a href="'.route('surat.download',$row->id).'" class="edit btn btn-primary btn-sm">Download</a>';
       
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('frontend.surat');
    
    }

    public function download($id)
        {
            $surat = Surat::where('id', $id)->firstOrFail();
            $pathToFile = public_path('dokumen/' . $surat->file);
            return response()->download($pathToFile);
        }

    public function konsultasi()
    {
        return view('frontend.konsultasi');
    }

    public function umum()
    {
        return view('frontend.umum');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'name'  => 'required',
            'jenis_kelamin' => 'required',
            'ktp' => 'required|max:2048',
            'lampiran' => 'required|max:2048',
        ],
        [
            'image.required' => 'Gambar slide harus diisi',
            'image.max' => 'Gambar slide maksimal 2MB',
        ]);
        $img = $request->file('ktp');
        $lamp = $request->file('lampiran');
        $new_name = rand() . '.' . $img->getClientOriginalExtension();
        $new_name2 = rand() . '.' . $lamp->getClientOriginalExtension();
        $img->move(public_path('konsultasi'), $new_name);
        $lamp->move(public_path('konsultasi'), $new_name2);
        $data = [
            'fullname'   => $request->fullname,
            'name'  => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'address' => $request->address,
            'konsul' => $request->konsul,
            'status' => $request->status,
            'ktp' => $new_name,
            'lampiran' => $new_name2
        ];
       $konsul = Konsultasi::create($data);
       if($konsul) {
            Alert::success('Success', 'Success update menu');
           return redirect()->route('konsultasi');
        } else{
            Alert::error('Failed', 'Failed to update menu');
            return redirect()->back();
        }
       
    }
}
