<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $query = Booking::query()->with('room', 'user');

        if ($request->filled('room_id')) {
            $query->where('room_id', $request->room_id);
        }

        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }

        if ($request->filled('start_date')) {
            $query->whereDate('start_time', '>=', $request->start_date);
        }

        if ($request->filled('end_date')) {
            $query->whereDate('end_time', '<=', $request->end_date);
        }

        $bookings = $query->get();

        $rooms = Room::all();
        $users = User::all();

        return view('reports.index', compact('bookings', 'rooms', 'users'));
    }
}
