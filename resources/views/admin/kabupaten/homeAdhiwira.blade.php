<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Kabupaten') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h1 class="mb-0">Kelola Kabupaten</h1>
                        <a href="{{ route('admin/kabupaten/create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>

                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Nik</th>
                                <th>Kode Pos</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kabupaten as $item)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $item->nama }}</td>
                                    <td class="align-middle">{{ $item->nik }}</td>
                                    <td class="align-middle">{{ $item->kode_pos }}</td>
                                    <td class="align-middle">{{ $item->alamat }}</td>
                                    <td class="align-middle">{{ $item->no_telp }}</td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('admin/kabupaten/edit', ['id' => $item->id]) }}" class="btn btn-secondary">Edit</a>
                                            <a href="{{ route('admin/kabupaten/delete', ['id' => $item->id]) }}" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No data available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
