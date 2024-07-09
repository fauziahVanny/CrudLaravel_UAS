<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Tambah Kabupaten</h1>
                    <hr />

                    <p><a href="{{ route('admin/kabupaten') }}" class="btn btn-primary">Kembali</a></p>

                        <form action="{{route('admin/kabupaten/save')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="number" name="kode_pos" class="form-control" id="kode_pos" value="{{Session::get('kode_pos')}}" placeholder="Kode Pos">
                                    @error('kode_pos')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" name="nama_kabupaten" class="form-control" id="nama_kabupaten" value="{{Session::get('nama_kabupaten')}}" placeholder="Nama Kabupaten">
                                    @error('nama_kabupaten')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" name="nama_kecamatan" class="form-control" id="nama_kecamatan" value="{{Session::get('nama_kecamatan')}}" placeholder="Nama Kecamatan">
                                    @error('nama_kecamatan')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" name="nama_provinsi" class="form-control" id="nama_provinsi" value="{{Session::get('nama_provinsi')}}" placeholder="Nama Provinsi">
                                    @error('nama_provinsi')
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