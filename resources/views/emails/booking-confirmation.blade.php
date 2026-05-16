<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f7fa;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f4f7fa; padding: 40px 20px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    {{-- Header --}}
                    <tr>
                        <td style="background: linear-gradient(135deg, #1e3a5f 0%, #0d9488 100%); padding: 40px; text-align: center;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 28px;">EventPro Services</h1>
                            <p style="color: rgba(255,255,255,0.8); margin: 10px 0 0 0; font-size: 14px;">Premium Event Solutions</p>
                        </td>
                    </tr>

                    {{-- Content --}}
                    <tr>
                        <td style="padding: 40px;">
                            <h2 style="color: #1e3a5f; margin: 0 0 20px 0; font-size: 24px;">Booking Confirmed!</h2>
                            
                            <p style="color: #4a5568; font-size: 16px; line-height: 1.6; margin: 0 0 20px 0;">
                                Dear {{ $booking->full_name }},
                            </p>
                            
                            <p style="color: #4a5568; font-size: 16px; line-height: 1.6; margin: 0 0 30px 0;">
                                Thank you for choosing EventPro Services! We have received your booking request and our team will contact you shortly with a customized quote.
                            </p>

                            {{-- Booking Details Box --}}
                            <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f8fafc; border-radius: 8px; margin-bottom: 30px;">
                                <tr>
                                    <td style="padding: 25px;">
                                        <h3 style="color: #1e3a5f; margin: 0 0 20px 0; font-size: 18px;">Booking Details</h3>
                                        
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td style="padding: 8px 0; color: #718096; font-size: 14px; width: 40%;">Booking ID:</td>
                                                <td style="padding: 8px 0; color: #1e3a5f; font-size: 14px; font-weight: 600;">{{ $booking->booking_id }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0; color: #718096; font-size: 14px;">Event Type:</td>
                                                <td style="padding: 8px 0; color: #1e3a5f; font-size: 14px;">{{ $booking->event_type_label }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0; color: #718096; font-size: 14px;">Event Date:</td>
                                                <td style="padding: 8px 0; color: #1e3a5f; font-size: 14px;">{{ $booking->event_date->format('F j, Y') }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0; color: #718096; font-size: 14px;">Location:</td>
                                                <td style="padding: 8px 0; color: #1e3a5f; font-size: 14px;">{{ $booking->event_location }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0; color: #718096; font-size: 14px;">Expected Guests:</td>
                                                <td style="padding: 8px 0; color: #1e3a5f; font-size: 14px;">{{ number_format($booking->number_of_guests) }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0; color: #718096; font-size: 14px; vertical-align: top;">Services:</td>
                                                <td style="padding: 8px 0; color: #1e3a5f; font-size: 14px;">
                                                    @foreach($booking->services_needed as $service)
                                                        {{ ucwords(str_replace('_', ' ', $service)) }}@if(!$loop->last), @endif
                                                    @endforeach
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <p style="color: #4a5568; font-size: 16px; line-height: 1.6; margin: 0 0 30px 0;">
                                If you have any questions, feel free to reply to this email or call us at <strong>+91 98765 43210</strong>.
                            </p>

                            <p style="color: #4a5568; font-size: 16px; line-height: 1.6; margin: 0;">
                                Best regards,<br>
                                <strong>The EventPro Team</strong>
                            </p>
                        </td>
                    </tr>

                    {{-- Footer --}}
                    <tr>
                        <td style="background-color: #f8fafc; padding: 30px; text-align: center; border-top: 1px solid #e2e8f0;">
                            <p style="color: #718096; font-size: 14px; margin: 0 0 10px 0;">
                                © {{ date('Y') }} EventPro Services. All rights reserved.
                            </p>
                            <p style="color: #a0aec0; font-size: 12px; margin: 0;">
                                Mumbai, Maharashtra, India
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
