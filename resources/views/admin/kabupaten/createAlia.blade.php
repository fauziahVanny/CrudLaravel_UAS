<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Data') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Tambah Data</h1>
                    <hr />

                    <p><a href="{{ route('admin/kabupaten') }}" class="btn btn-primary">Kembali</a></p>

                        <form action="{{route('admin/kabupaten/save')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" name="nama" class="form-control" id="nama" value="{{Session::get('nama')}}" placeholder="Nama">
                                    @error('nama')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <input type="text" name="nik" class="form-control" id="nik" value="{{Session::get('nik')}}" placeholder="Nik">
                                    @error('nik')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <input type="number" name="kode_pos" class="form-control" id="kode_pos" value="{{Session::get('kode_pos')}}" placeholder="Kode Pos">
                                    @error('kode_pos')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="textarea" name="alamat" class="form-control" id="alamat" value="{{Session::get('alamat')}}" placeholder="Alamat">
                                    @error('alamat')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="number" name="no_telp" class="form-control" id="no_telp" value="{{Session::get('no_telp')}}" placeholder="No Telp">
                                    @error('no_telp')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-grid">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>