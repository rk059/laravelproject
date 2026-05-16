{{-- Mobile Sidebar Overlay --}}
<div x-show="sidebarOpen" 
     x-transition:enter="transition-opacity ease-linear duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition-opacity ease-linear duration-300"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     class="fixed inset-0 bg-gray-900/50 z-40 lg:hidden"
     @click="sidebarOpen = false">
</div>

{{-- Sidebar --}}
<aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" 
       class="fixed lg:static inset-y-0 left-0 z-50 w-64 bg-gradient-to-b from-blue-900 to-blue-800 transform lg:translate-x-0 transition-transform duration-300 ease-in-out">
    
    {{-- Logo --}}
    <div class="h-16 flex items-center justify-between px-6 border-b border-blue-700/50">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
            </div>
            <span class="text-lg font-bold text-white">EventPro</span>
        </a>
        <button @click="sidebarOpen = false" class="lg:hidden text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    {{-- Navigation --}}
    <nav class="p-4 space-y-1">
        <a href="{{ route('admin.dashboard') }}" 
           class="flex items-center px-4 py-3 rounded-xl {{ request()->routeIs('admin.dashboard') ? 'bg-white/10 text-white' : 'text-blue-100 hover:bg-white/5 hover:text-white' }} transition-colors">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
            Dashboard
        </a>

        <a href="{{ route('admin.bookings.index') }}" 
           class="flex items-center px-4 py-3 rounded-xl {{ request()->routeIs('admin.bookings.*') ? 'bg-white/10 text-white' : 'text-blue-100 hover:bg-white/5 hover:text-white' }} transition-colors">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            Bookings
            @php $newBookings = \App\Models\Booking::byStatus('new_event')->count(); @endphp
            @if($newBookings > 0)
                <span class="ml-auto bg-emerald-500 text-white text-xs font-bold px-2 py-1 rounded-full">{{ $newBookings }}</span>
            @endif
        </a>

        <a href="{{ route('admin.gallery.index') }}" 
           class="flex items-center px-4 py-3 rounded-xl {{ request()->routeIs('admin.gallery.*') ? 'bg-white/10 text-white' : 'text-blue-100 hover:bg-white/5 hover:text-white' }} transition-colors">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            Gallery
        </a>

        <a href="{{ route('admin.testimonials.index') }}" 
           class="flex items-center px-4 py-3 rounded-xl {{ request()->routeIs('admin.testimonials.*') ? 'bg-white/10 text-white' : 'text-blue-100 hover:bg-white/5 hover:text-white' }} transition-colors">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
            </svg>
            Testimonials
        </a>

        <a href="{{ route('admin.inquiries.index') }}" 
           class="flex items-center px-4 py-3 rounded-xl {{ request()->routeIs('admin.inquiries.*') ? 'bg-white/10 text-white' : 'text-blue-100 hover:bg-white/5 hover:text-white' }} transition-colors">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            Inquiries
            @php $unreadInquiries = \App\Models\ContactInquiry::unread()->count(); @endphp
            @if($unreadInquiries > 0)
                <span class="ml-auto bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">{{ $unreadInquiries }}</span>
            @endif
        </a>

        <a href="{{ route('admin.seo.index') }}" 
           class="flex items-center px-4 py-3 rounded-xl {{ request()->routeIs('admin.seo.*') ? 'bg-white/10 text-white' : 'text-blue-100 hover:bg-white/5 hover:text-white' }} transition-colors">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            SEO Settings
        </a>

        <div class="pt-4 mt-4 border-t border-blue-700/50">
            <a href="{{ route('home') }}" target="_blank"
               class="flex items-center px-4 py-3 rounded-xl text-blue-100 hover:bg-white/5 hover:text-white transition-colors">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
                View Website
            </a>
        </div>
    </nav>
</aside>
