<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelolaKabupaten;

class DaniController extends Controller
{
    public function index()
    {
    
        $kabupaten = KelolaKabupaten::orderBy('id','desc')->get();
        $total = KelolaKabupaten::count();
        return view('admin.kabupaten.homeAdhiwira',compact(['kabupaten','total']));
    }


    public function create()
    {
        return view('admin.kabupaten.createAlia');
    }


    public function save(Request $request)
    {
        $validation = $request->validate([
            'nama'=>'required',
            'nik'=>'required|numeric',
            'kode_pos'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required|numeric',
            
        ]);
    
        $data = KelolaKabupaten::create($validation);
        if ($data) {
            session()->flash('success', 'Data Add Successfully');
            return redirect(route('admin/kabupaten'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin.kabupaten/createAlia'));
        }
    }


    public function edit($id)
    {
        $kabupaten=KelolaKabupaten::findOrFail($id);
        return view('admin.kabupaten.updateFauziah', compact('kabupaten'));
    }


    public function update(Request $request, $id)
    {
        $kabupaten = KelolaKabupaten::findOrFail($id);
        $nama = $request->nama;
        $nik = $request->nik;
        $kode_pos = $request->kode_pos;
        $alamat = $request->alamat;
        $no_telp = $request->no_telp;

        $kabupaten->nama= $nama;
        $kabupaten->nik= $nik;
        $kabupaten->kode_pos = $kode_pos;
        $kabupaten->alamat = $alamat;
        $kabupaten->no_telp = $no_telp;

        $data = $kabupaten->save();
        if ($data) {
            session()->flash('success', 'Data Update Successfully');
            return redirect(route('admin/kabupaten'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin.kabupaten/updateFauziah'));
        }
    }

    public function delete($id)
    {
        $kabupaten = KelolaKabupaten::findOrFail($id)->delete();
        if ($kabupaten) {
            session()->flash('success', 'Data Deleted Successfully');
            return redirect(route('admin/kabupaten'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin.kabupaten'));
        }
    }
 
}
