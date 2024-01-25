@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-8">
    <div class="mb-4">
        <h1 class="text-3xl font-bold">
            Tambah Anggota
        </h1>
        <div class="flex justify-end mt-5">
            <a class="px-2 py-1 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600" href="{{ route('anggota.index') }}">
                < Kembali</a>
        </div>
    </div>

    <div class="flex flex-col mt-5">
        <div class="flex flex-col">
            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">

                @if ($errors->any())
                <div class="p-3 rounded bg-red-500 text-white m-3">
                    <strong>Error!</strong> Periksa Semua Inputan!.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">

                    <form action="{{ route('anggota.store') }}" method="POST">
                        @csrf

                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="nama">Nama</label>
                            <input type="text" name="nama" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Nama">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="email">Email</label>
                            <input type="email" name="email" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Email">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="nohp">No HP</label>
                            <input type="text" name="nohp" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="No Hp">
                        </div>

                        <div class="mt-4">
                            <label class="block text-sm font-bold text-gray-700" for="alamat">Alamat</label>
                            <textarea class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="alamat" placeholder="Alamat"></textarea>
                        </div>

                        <div class="flex items-center justify-start mt-4 gap-x-2">
                            <button type="submit" class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-green-100 bg-green-500 hover:bg-green-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">Simpan</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection