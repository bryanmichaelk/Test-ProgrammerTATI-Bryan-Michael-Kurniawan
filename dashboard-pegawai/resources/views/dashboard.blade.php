@extends('layouts.app')

@section('title', 'Dashboard - Pegawai')

@section('contents')
<div class="p-6">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Welcome to Dashboard Pegawai</h1>
            <p class="mt-2 text-gray-600 dark:text-gray-400">
                Selamat datang di sistem manajemen pegawai. Gunakan menu di sebelah kiri untuk mengakses berbagai fitur.
            </p>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
            
            <div class="bg-blue-500 text-white rounded-lg shadow p-4">
                <h2 class="text-lg font-bold">Total Log Harian</h2>
                <p class="text-2xl font-semibold mt-2">{{$totalLog}}</p>
            </div>
            
            <div class="bg-yellow-500 text-white rounded-lg shadow p-4">
                <h2 class="text-lg font-bold">Total Pending</h2>
                <p class="text-2xl font-semibold mt-2">{{$totalPending}}</p>
            </div>
            
            <div class="bg-green-500 text-white rounded-lg shadow p-4">
                <h2 class="text-lg font-bold">Total Disetujui</h2>
                <p class="text-2xl font-semibold mt-2">{{$totalDisetujui}}</p>
            </div>
            
            <div class="bg-red-500 text-white rounded-lg shadow p-4">
                <h2 class="text-lg font-bold">Total Ditolak</h2>
                <p class="text-2xl font-semibold mt-2">{{$totalDitolak}}</p>
            </div>
            <div class="bg-gray-500 text-white rounded-lg shadow p-4">
                <h2 class="text-lg font-bold">Total Yang Harus Diverifikasi</h2>
                <p class="text-2xl font-semibold mt-2">{{$totalYangHarusDiVerifikasi}}</p>
            </div>
        </div>
    </div>
@endsection