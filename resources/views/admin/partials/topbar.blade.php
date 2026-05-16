<header class="h-16 bg-white shadow-sm flex items-center justify-between px-6">
    {{-- Mobile Menu Button --}}
    <button @click="sidebarOpen = true" class="lg:hidden text-gray-500 hover:text-gray-700">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>

    {{-- Page Title --}}
    <h1 class="text-xl font-semibold text-gray-800 hidden lg:block">
        {{ $header ?? 'Dashboard' }}
    </h1>

    {{-- Right Side --}}
    <div class="flex items-center space-x-4">
        {{-- User Dropdown --}}
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="flex items-center space-x-3 hover:bg-gray-100 rounded-lg px-3 py-2 transition-colors">
                <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-emerald-500 rounded-full flex items-center justify-center">
                    <span class="text-white font-medium text-sm">{{ substr(auth()->user()->name, 0, 1) }}</span>
                </div>
                <span class="text-gray-700 font-medium hidden sm:block">{{ auth()->user()->name }}</span>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>

            <div x-show="open" 
                 @click.away="open = false"
                 x-transition
                 class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-gray-100 py-2 z-50">
                <a href="{{ route('admin.profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition-colors">
                    Profile Settings
                </a>
                <hr class="my-2 border-gray-100">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-50 transition-colors">
                        Sign Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>
