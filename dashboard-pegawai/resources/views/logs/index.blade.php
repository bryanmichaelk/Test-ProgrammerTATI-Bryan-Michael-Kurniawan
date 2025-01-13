@extends('layouts.app')

@section('title', 'Logs')

@section('contents')
    <div class="p-6">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Log Harian Pegawai</h1>

             <!-- Button to create new log -->
             <div class="mb-4">
                <a href="{{ route('logs.create') }}" class="inline-block px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    Tambah Log Harian
                </a>
            </div>
            @if(Session::has('success'))
                <div class="p-4 bg-green-400 text-white rounded-lg mb-4">
                    {{ Session::get('success') }}
                </div>
            @endif
            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-700 text-left dark:text-white">
                            <th class="px-4 py-2 border border-gray-300">No</th>
                            <th class="px-4 py-2 border border-gray-300">Tanggal</th>
                            <th class="px-4 py-2 border border-gray-300">Kegiatan</th>
                            <th class="px-4 py-2 border border-gray-300">Status</th>
                            <th class="px-4 py-2 border border-gray-300">Aksi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($logs as $log)
                            <tr class="text-gray-700 dark:text-white">
                                <td class="px-4 py-2 border border-gray-300">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $log->created_at }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $log->deskripsi }}</td>
                                <td class="px-4 py-2 border border-gray-300">
                                    @if($log->status == 'Pending')
                                        <span class="bg-yellow-500 text-white px-2 py-1 rounded-full">Pending</span>
                                    @elseif($log->status == 'Disetujui')
                                        <span class="bg-green-500 text-white px-2 py-1 rounded-full">Disetujui</span>
                                    @else
                                        <span class="bg-red-500 text-white px-2 py-1 rounded-full">Ditolak</span>
                                    @endif
                                </td>
                                <td class="px-4 py-2 border border-gray-300">
                                    <!-- Edit Button -->
                                    <a href="{{route('logs.edit', $log->id)}}" class="inline-block px-4 py-2 text-sm font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                                        Edit
                                    </a>

                                    <!-- Delete Button -->
                                     <form action="{{route('logs.delete', $log->id)}}" method="POST" type="button" class="inline-block px-4 py-2 text-sm font-semibold text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50 ml-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                     </form>
                                  
                                </td>

                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
