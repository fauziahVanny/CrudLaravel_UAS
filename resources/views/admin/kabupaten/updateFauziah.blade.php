<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Edit data</h1>
                    <hr />
                    <p><a href="{{ route('admin/kabupaten') }}" class="btn btn-primary">Kembali</a></p>
                    
                    <form action="{{route('admin/kabupaten/update',$kabupaten->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Kode Pos</label>
                                <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos" value="{{$kabupaten->kode_pos}}">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Nama Kabupaten</label>
                                <input type="text" name="nama_kabupaten" class="form-control" placeholder="Nama Kabupaten" value="{{$kabupaten->nama_kabupaten}}">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Nama Kecamatan</label>
                                <input type="text" name="nama_kecamatan" class="form-control" placeholder="Nama Kecamatan" value="{{$kabupaten->nama_kecamatan}}">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Nama Provinsi</label>
                                    <input type="text" name="nama_provinsi" class="form-control" placeholder="Nama Provinsi" value="{{$kabupaten->nama_provinsi}}">
                                    @error('title')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-warning">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>