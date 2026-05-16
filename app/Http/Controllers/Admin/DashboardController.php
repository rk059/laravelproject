<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\ContactInquiry;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'this_week' => Booking::thisWeek()->count(),
            'this_month' => Booking::thisMonth()->count(),
            'this_year' => Booking::thisYear()->count(),
            'new_events' => Booking::byStatus('new_event')->count(),
            'in_progress' => Booking::byStatus('in_progress')->count(),
            'completed' => Booking::byStatus('completed')->count(),
            'unread_inquiries' => ContactInquiry::unread()->count(),
        ];

        $recentBookings = Booking::latest()->limit(10)->get();
        
        // Monthly bookings for chart
        $monthlyBookings = Booking::selectRaw('MONTH(event_date) as month, COUNT(*) as count')
            ->whereYear('event_date', now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        // Event type distribution
        $eventTypeStats = Booking::selectRaw('event_type, COUNT(*) as count')
            ->groupBy('event_type')
            ->pluck('count', 'event_type')
            ->toArray();

        return view('admin.dashboard', compact('stats', 'recentBookings', 'monthlyBookings', 'eventTypeStats'));
    }
}
