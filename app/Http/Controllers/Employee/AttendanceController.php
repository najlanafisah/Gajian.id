<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function index() {
        //ambil tanggal hari ini dan user id
        $today = Carbon::now()->toDateString();
        $userId = auth()->id();

        // penegecekan sudah absen atau belum
        $hasCheckInToday = Attendance::where('user_id', $userId)
                            ->whereDate('created_at', $today)
                            ->exists();

        $currentMonth = Carbon::now()->month;
        $attendances = Attendance::where('user_id', $userId)
                                ->whereMonth('created_at', $currentMonth)
                                ->get();
        return view('employee.attendance.index', compact('attendances', 'hasCheckInToday'));
    }


    // membuat data prsesesni
    public function store(Request $request) {
        // validate
        $request->validate([]);

        // menambahkan data baru
        Attendance::create([
            'user_id'   =>Auth::id(),
            'status'    => 'Hadir'
        ]);

        return redirect()->route('attendance.index')->with('message', 'Presensi berhasil');
    }
}