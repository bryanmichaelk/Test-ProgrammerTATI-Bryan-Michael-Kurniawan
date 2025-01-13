@extends('layouts.app')

@section('title', 'Create Log')

@section('contents')
    <div class="p-6">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Edit Log Kegiatan</h1>

            <!-- Form to create a log -->
            <form action="{{route('logs.update', $log->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="space-y-4">
                    <!-- Nama Kegiatan -->
                    <div class="space-y-4">
                        <label for="kegiatan" class="text-lg block  font-medium text-gray-700 dark:text-white">Nama Kegiatan</label>
                        <input type="text" id="deskripsi" name="deskripsi" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Masukkan nama kegiatan" value="{{$log->deskripsi}}">
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="w-full text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Update Kegiatan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
