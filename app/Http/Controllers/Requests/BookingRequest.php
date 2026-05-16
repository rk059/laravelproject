<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'event_type' => 'required|in:wedding,corporate_event,birthday_party,festival_event,public_event,private_party,other',
            'services_needed' => 'required|array|min:1',
            'services_needed.*' => 'in:portable_toilets,air_coolers,mist_fans,tower_acs,tower_heaters,mens_urinals',
            'event_date' => 'required|date|after:today',
            'event_location' => 'required|string|max:500',
            'number_of_guests' => 'required|integer|min:1|max:100000',
            'additional_details' => 'nullable|string|max:2000',
        ];
    }

    public function messages(): array
    {
        return [
            'services_needed.required' => 'Please select at least one service.',
            'event_date.after' => 'Event date must be a future date.',
        ];
    }
}
