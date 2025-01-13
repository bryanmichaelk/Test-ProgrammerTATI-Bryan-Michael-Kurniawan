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
                            <th class="px-4 py-2 border border-gray-300">Nama</th>
                            <th class="px-4 py-2 border border-gray-300">Kegiatan</th>
                            <th class="px-4 py-2 border border-gray-300">Status</th>
        
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($logs as $log)
                            <tr class="text-gray-700 dark:text-white">
                                <td class="px-4 py-2 border border-gray-300">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $log->created_at }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $log->user->name }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $log->deskripsi }}</td>
                                <td class="px-4 py-2 border border-gray-300">
                                    <form action="{{ route('logs.updateStatus', $log->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select name="status" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-md status-dropdown" onchange="this.form.submit()">
                                            <option value="Pending" {{ $log->status == 'Pending' ? 'selected' : '' }} data-color="bg-yellow-200">Pending</option>
                                            <option value="Disetujui" {{ $log->status == 'Disetujui' ? 'selected' : '' }} data-color="bg-green-200">Disetujui</option>
                                            <option value="Ditolak" {{ $log->status == 'Ditolak' ? 'selected' : '' }} data-color="bg-red-200">Ditolak</option>
                                        </select>

                                    </form>
                                </td>
                                

                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
            const statusDropdowns = document.querySelectorAll('.status-dropdown');
            statusDropdowns.forEach(dropdown => {
                // Menetapkan warna awal berdasarkan status yang ada
                setBackgroundColor(dropdown);

                // Mengubah warna ketika dropdown berubah
                dropdown.addEventListener('change', function () {
                    setBackgroundColor(this);
                });
            });

            function setBackgroundColor(dropdown) {
                const selectedOption = dropdown.options[dropdown.selectedIndex];
                const colorClass = selectedOption.getAttribute('data-color');
                dropdown.className = 'bg-gray-100 text-gray-700 px-4 py-2 rounded-md ' + colorClass;
            }
        });

        </script>
    </div>
@endsection
