<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Log;

class LogController extends Controller
{
    //
    public function index(){
        $logs = Log::where('user_id', Auth::id())
               ->orderBy('created_at', 'desc')
               ->get();
        
        return view('logs.index', compact('logs'));
    }

    public function create(){
        return view('logs.create');
    }

    public function store(Request $request){
        $request->validate([
            'deskripsi' => 'required',
        ]);

        $log = new Log();
        $log->user_id = Auth::id();
        $log->atasan_id = Auth::user()->atasan_id;
        $log->deskripsi = $request->deskripsi;
        $log->status = 'Pending';
        $log->save();

        return redirect()->route('logs')->with('success', 'Log berhasil dibuat');
    }

    public function edit(string $id){
        $log = Log::findOrFail($id);
        return view('logs.edit', compact('log'));
    }

    public function update(Request $request, string $id){
        $request->validate([
            'deskripsi' => 'required',
        ]);

        $log = Log::findOrFail($id);
        $log->deskripsi = $request->deskripsi;
        $log->save();

        return redirect()->route('logs')->with('success', 'Log berhasil diubah');
    }

    public function delete(string $id){
        $log = Log::findOrFail($id);
        $log->delete();

        return redirect()->route('logs')->with('success', 'Log berhasil dihapus');
    }

    public function verifikasi() {
        $logs = Log::where('atasan_id', Auth::id())
                   ->with('user') // Eager load the 'user' relationship
                   ->orderBy('created_at', 'desc')
                   ->get();
        
        return view('logs.verifikasi', compact('logs'));
    }

    public function updateStatus(Request $request, string $id){
        $request->validate([
            'status' => 'required|in:Disetujui,Ditolak',
        ]);

        $log = Log::findOrFail($id);
        $log->status = $request->status;
        $log->save();

        return redirect()->route('logs.verifikasi')->with('success', 'Status log berhasil diubah');
    }

    public function dashboard(){
        $totalLog = Log::where('user_id', Auth::id())->count();
        $totalPending = Log::where('user_id', Auth::id())->where('status', 'Pending')->count();
        $totalDisetujui = Log::where('user_id', Auth::id())->where('status', 'Disetujui')->count();
        $totalDitolak = Log::where('user_id', Auth::id())->where('status', 'Ditolak')->count();
        $totalYangHarusDiVerifikasi = Log::where('atasan_id', Auth::id())->where('status', 'Pending')->count();
        return view('dashboard' , compact('totalLog', 'totalPending', 'totalDisetujui', 'totalDitolak', 'totalYangHarusDiVerifikasi'));
    }
}
