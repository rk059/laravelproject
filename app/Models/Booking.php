<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'full_name',
        'phone',
        'email',
        'event_type',
        'services_needed',
        'event_date',
        'event_location',
        'number_of_guests',
        'additional_details',
        'status',
    ];

    protected $casts = [
        'services_needed' => 'array',
        'event_date' => 'date',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($booking) {
            $booking->booking_id = 'EVT-' . strtoupper(uniqid());
        });
    }

    public function getEventTypeLabelAttribute(): string
    {
        return match($this->event_type) {
            'wedding' => 'Wedding',
            'corporate_event' => 'Corporate Event',
            'birthday_party' => 'Birthday Party',
            'festival_event' => 'Festival Event',
            'public_event' => 'Public Event',
            'private_party' => 'Private Party',
            'other' => 'Other',
            default => $this->event_type,
        };
    }

    public function getStatusLabelAttribute(): string
    {
        return match($this->status) {
            'new_event' => 'New Event',
            'in_progress' => 'In Progress',
            'completed' => 'Completed',
            default => $this->status,
        };
    }

    public function getStatusColorAttribute(): string
    {
        return match($this->status) {
            'new_event' => 'bg-blue-100 text-blue-800',
            'in_progress' => 'bg-yellow-100 text-yellow-800',
            'completed' => 'bg-green-100 text-green-800',
            default => 'bg-gray-100 text-gray-800',
        };
    }

    public function scopeThisWeek($query)
    {
        return $query->whereBetween('event_date', [now()->startOfWeek(), now()->endOfWeek()]);
    }

    public function scopeThisMonth($query)
    {
        return $query->whereMonth('event_date', now()->month)
                     ->whereYear('event_date', now()->year);
    }

    public function scopeThisYear($query)
    {
        return $query->whereYear('event_date', now()->year);
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }
}
