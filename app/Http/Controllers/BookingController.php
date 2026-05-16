<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Mail\BookingConfirmation;
use App\Models\Booking;
use App\Models\SeoSetting;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BookingController extends Controller
{
    public function create(): View
    {
        $seo = SeoSetting::getForPage('booking');
        return view('pages.booking', compact('seo'));
    }

    public function store(BookingRequest $request): RedirectResponse
    {
        $booking = Booking::create($request->validated());

        // Send confirmation email
        try {
            Mail::to($booking->email)->send(new BookingConfirmation($booking));
        } catch (\Exception $e) {
            // Log the error but don't fail the booking
            \Log::error('Failed to send booking confirmation email: ' . $e->getMessage());
        }

        return redirect()->route('booking.thank-you', ['booking' => $booking->booking_id]);
    }

    public function thankYou(string $booking): View
    {
        $booking = Booking::where('booking_id', $booking)->firstOrFail();
        return view('pages.thank-you', compact('booking'));
    }
}
