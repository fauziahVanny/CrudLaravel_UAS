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
            'kode_pos'=>'required',
            'nama_kabupaten'=>'required',
            'nama_kecamatan'=>'required',
            'nama_provinsi'=>'required',
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
        $kode_pos = $request->kode_pos;
        $nama_kabupaten = $request->nama_kabupaten;
        $nama_kecamatan = $request->nama_kecamatan;
        $nama_provinsi = $request->nama_provinsi;

        $kabupaten->kode_pos = $kode_pos;
        $kabupaten->nama_kabupaten = $nama_kabupaten;
        $kabupaten->nama_kecamatan = $nama_kecamatan;
        $kabupaten->nama_provinsi = $nama_provinsi;
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
