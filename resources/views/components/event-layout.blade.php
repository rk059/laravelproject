<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta Tags --}}
    @if(isset($seo) && $seo)
        <title>{{ $seo->meta_title }}</title>
        <meta name="description" content="{{ $seo->meta_description }}">
        @if($seo->meta_keywords)
            <meta name="keywords" content="{{ $seo->meta_keywords }}">
        @endif
        <meta property="og:title" content="{{ $seo->og_title ?? $seo->meta_title }}">
        <meta property="og:description" content="{{ $seo->og_description ?? $seo->meta_description }}">
        @if($seo->og_image)
            <meta property="og:image" content="{{ $seo->og_image }}">
        @endif
        @if($seo->canonical_url)
            <link rel="canonical" href="{{ $seo->canonical_url }}">
        @endif
    @else
        <title>{{ $title ?? config('app.name') }} - Premium Event Services</title>
        <meta name="description" content="Premium portable sanitation and comfort solutions for weddings, festivals, corporate events, and private functions across India.">
    @endif

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta name="twitter:card" content="summary_large_image">

    {{-- Schema Markup --}}
    <script type="application/ld+json">
    {
        "@@context": "[schema.org](https://schema.org)",
        "@@type": "LocalBusiness",
        "name": "{{ config('app.name') }}",
        "description": "Premium portable sanitation and comfort solutions for events",
        "url": "{{ config('app.url') }}",
        "telephone": "{{ config('app.company_phone', '+91 98765 43210') }}",
        "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Mumbai",
            "addressRegion": "Maharashtra",
            "addressCountry": "IN"
        },
        "priceRange": "$$",
        "serviceType": ["Portable Toilets", "Air Coolers", "Event Cooling", "Event Heating"]
    }
    </script>

    {{-- Fonts --}}
    <link rel="preconnect" href="[fonts.bunny.net](https://fonts.bunny.net)">
    <link href="[fonts.bunny.net](https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap)" rel="stylesheet" />

    {{-- Styles --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Additional Styles --}}
    @stack('styles')
</head>
<body class="font-sans antialiased bg-gray-50">
    {{-- Navigation --}}
    @include('components.navbar')

    {{-- Main Content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- WhatsApp Float Button --}}
    <a href="[wa.me](https://wa.me/{{ config('app.company_whatsapp', '919876543210') }})"
       target="_blank"
       class="fixed bottom-6 right-6 z-50 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg transition-all duration-300 hover:scale-110"
       aria-label="Chat on WhatsApp">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>

    {{-- Additional Scripts --}}
    @stack('scripts')
</body>
</html>
