@extends('layouts.app')

@section('content')
<div class="grid grid-cols-8 gap-4 mb-4 p-5">
    <div class="col-span-4 mt-2">
        <h1 class="text-3xl font-bold">
            Daftar Anggota
        </h1>
    </div>
    <div class="col-span-4">
        <div class="flex justify-end">
            <a href="{{ route('anggota.create') }}" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" id="add-post-btn">+ Create New Post</a>
        </div>
    </div>
</div>
<div class="bg-white p-5 rounded shadow-sm">
    <!-- Notifikasi menggunakan flash session data -->
    @if (session('success'))
    <div class="p-3 rounded bg-green-500 text-green-100 mb-4">
        {{ session('success') }}
    </div>
    @endif

    <table class="min-w-full table-auto border">
        <thead class="border-b">
            <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Nama</th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">Email</th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">No HP</th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">Alamat</th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($anggota as $data)
            <tr class="border-b">
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $data->nama }}</td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">{{ $data->email }}</td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">{{ $data->nohp}}</td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">{{ $data->alamat}}</td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('anggota.destroy', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('anggota.show', $data->id) }}" id="{{ $data->id }}-show-btn" class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out">Show</a>
                        <a href="{{ route('anggota.edit', $data->id) }}" id="{{ $data->id }}-edit-btn" class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out">Edit</a>
                        <button type="submit" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" id="{{ $data->id }}-delete-btn">Delete
                        </button>
                    </form>

                </td>
            </tr>
            @empty
            <tr>
                <td class="text-center text-sm text-gray-900 px-6 py-4 whitespace-nowrap" colspan="4">Data anggota tidak tersedia</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-3">
        {{ $anggota->links() }}
    </div>
</div>
@endsection