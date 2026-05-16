<nav x-data="{ open: false, scrolled: false }" 
     x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
     :class="scrolled ? 'bg-white shadow-lg' : 'bg-white/95 backdrop-blur-md'"
     class="fixed w-full top-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            {{-- Logo --}}
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-900 to-emerald-600 rounded-xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <div class="hidden sm:block">
                        <span class="text-xl font-bold text-blue-900">EventPro</span>
                        <span class="text-xl font-bold text-emerald-600">Services</span>
                    </div>
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center space-x-1">
                <a href="{{ route('home') }}" 
                   class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-900 hover:bg-blue-50 font-medium transition-colors {{ request()->routeIs('home') ? 'text-blue-900 bg-blue-50' : '' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" 
                   class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-900 hover:bg-blue-50 font-medium transition-colors {{ request()->routeIs('about') ? 'text-blue-900 bg-blue-50' : '' }}">
                    About Us
                </a>
                <a href="{{ route('services') }}" 
                   class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-900 hover:bg-blue-50 font-medium transition-colors {{ request()->routeIs('services') ? 'text-blue-900 bg-blue-50' : '' }}">
                    Services
                </a>
                <a href="{{ route('gallery') }}" 
                   class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-900 hover:bg-blue-50 font-medium transition-colors {{ request()->routeIs('gallery') ? 'text-blue-900 bg-blue-50' : '' }}">
                    Gallery
                </a>
                <a href="{{ route('testimonials') }}" 
                   class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-900 hover:bg-blue-50 font-medium transition-colors {{ request()->routeIs('testimonials') ? 'text-blue-900 bg-blue-50' : '' }}">
                    Testimonials
                </a>
                <a href="{{ route('contact') }}" 
                   class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-900 hover:bg-blue-50 font-medium transition-colors {{ request()->routeIs('contact') ? 'text-blue-900 bg-blue-50' : '' }}">
                    Contact
                </a>
            </div>

            {{-- CTA Button --}}
            <div class="hidden lg:flex items-center space-x-4">
                <a href="tel:+919876543210" class="flex items-center text-gray-600 hover:text-blue-900 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span class="font-medium">+91 98765 43210</span>
                </a>
                <a href="{{ route('booking') }}" 
                   class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-900 to-blue-700 text-white font-semibold rounded-xl hover:from-blue-800 hover:to-blue-600 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Book Now
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

            {{-- Mobile menu button --}}
            <div class="flex items-center lg:hidden">
                <button @click="open = !open" 
                        class="inline-flex items-center justify-center p-2 rounded-lg text-gray-700 hover:text-blue-900 hover:bg-blue-50 transition-colors">
                    <svg class="w-6 h-6" :class="{'hidden': open, 'block': !open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg class="w-6 h-6" :class="{'block': open, 'hidden': !open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Navigation --}}
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-1"
         class="lg:hidden bg-white border-t border-gray-100 shadow-lg">
        <div class="px-4 py-4 space-y-2">
            <a href="{{ route('home') }}" class="block px-4 py-3 rounded-lg text-gray-700 hover:text-blue-900 hover:bg-blue-50 font-medium transition-colors">Home</a>
            <a href="{{ route('about') }}" class="block px-4 py-3 rounded-lg text-gray-700 hover:text-blue-900 hover:bg-blue-50 font-medium transition-colors">About Us</a>
            <a href="{{ route('services') }}" class="block px-4 py-3 rounded-lg text-gray-700 hover:text-blue-900 hover:bg-blue-50 font-medium transition-colors">Services</a>
            <a href="{{ route('gallery') }}" class="block px-4 py-3 rounded-lg text-gray-700 hover:text-blue-900 hover:bg-blue-50 font-medium transition-colors">Gallery</a>
            <a href="{{ route('testimonials') }}" class="block px-4 py-3 rounded-lg text-gray-700 hover:text-blue-900 hover:bg-blue-50 font-medium transition-colors">Testimonials</a>
            <a href="{{ route('contact') }}" class="block px-4 py-3 rounded-lg text-gray-700 hover:text-blue-900 hover:bg-blue-50 font-medium transition-colors">Contact</a>
            <div class="pt-4 border-t border-gray-100">
                <a href="{{ route('booking') }}" 
                   class="block w-full text-center px-6 py-3 bg-gradient-to-r from-blue-900 to-blue-700 text-white font-semibold rounded-xl hover:from-blue-800 hover:to-blue-600 transition-all duration-300">
                    Book Now
                </a>
            </div>
        </div>
    </div>
</nav>

{{-- Spacer for fixed navbar --}}
<div class="h-20"></div>
