<?php if (isset($component)) { $__componentOriginalb1882f8c14f0a5270b201bcf650aaac1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1882f8c14f0a5270b201bcf650aaac1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.event-layout','data' => ['seo' => $seo ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('event-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['seo' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($seo ?? null)]); ?>
    
    <section class="relative min-h-[90vh] flex items-center overflow-hidden">
        
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-blue-800 to-emerald-900">
            <div class="absolute inset-0 bg-[url('/images/pattern.svg')] opacity-10"></div>
            <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-emerald-600/20 to-transparent"></div>
        </div>

        
        <div class="absolute top-20 left-10 w-72 h-72 bg-emerald-500/30 rounded-full filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-500/20 rounded-full filter blur-3xl animate-pulse" style="animation-delay: 1s;"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                
                <div class="space-y-8" data-aos="fade-right">
                    <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-md rounded-full text-emerald-300 text-sm font-medium">
                        <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2 animate-pulse"></span>
                        20+ Years of Excellence in Event Services
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
                        Premium Event
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400">
                            Comfort Solutions
                        </span>
                    </h1>

                    <p class="text-xl text-blue-100 leading-relaxed max-w-xl">
                        From large-scale weddings and corporate functions to private parties and public events, we deliver hygiene, comfort, and reliability that makes every occasion memorable.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="<?php echo e(route('booking')); ?>" 
                           class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-semibold rounded-xl hover:from-emerald-600 hover:to-emerald-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-emerald-500/25">
                            Book Your Event
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="<?php echo e(route('services')); ?>" 
                           class="inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur-md text-white font-semibold rounded-xl hover:bg-white/20 transition-all duration-300 border border-white/20">
                            Explore Services
                        </a>
                    </div>

                    
                    <div class="flex flex-wrap items-center gap-8 pt-8 border-t border-white/10">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-white">5000+</div>
                            <div class="text-sm text-blue-200">Events Served</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-white">20+</div>
                            <div class="text-sm text-blue-200">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-white">100%</div>
                            <div class="text-sm text-blue-200">Client Satisfaction</div>
                        </div>
                    </div>
                </div>

                
                <div class="relative" data-aos="fade-left">
                    <div class="relative bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20 shadow-2xl">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl p-6 text-white">
                                <svg class="w-10 h-10 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                                <h3 class="font-semibold text-lg">Portable Toilets</h3>
                                <p class="text-emerald-100 text-sm mt-1">Eco-friendly & Hygienic</p>
                            </div>
                            <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 text-white">
                                <svg class="w-10 h-10 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                                <h3 class="font-semibold text-lg">Cooling Systems</h3>
                                <p class="text-blue-100 text-sm mt-1">ACs, Coolers & Mist Fans</p>
                            </div>
                            <div class="bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl p-6 text-white">
                                <svg class="w-10 h-10 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                                </svg>
                                <h3 class="font-semibold text-lg">Tower Heaters</h3>
                                <p class="text-orange-100 text-sm mt-1">Winter Event Comfort</p>
                            </div>
                            <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl p-6 text-white">
                                <svg class="w-10 h-10 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                                <h3 class="font-semibold text-lg">Men's Urinals</h3>
                                <p class="text-purple-100 text-sm mt-1">Outdoor Solutions</p>
                            </div>
                        </div>
                    </div>

                    
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-emerald-500/30 rounded-full filter blur-xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-blue-500/30 rounded-full filter blur-xl"></div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
                    Our Services
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Comprehensive Event Solutions
                </h2>
                <p class="text-lg text-gray-600">
                    We provide everything you need to ensure your guests' comfort and convenience at any event.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-emerald-500/10 to-transparent rounded-bl-full transform group-hover:scale-150 transition-transform duration-500"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Portable Toilets (Bio-Loos)</h3>
                        <p class="text-gray-600 mb-4">
                            Eco-friendly, hygienic, and comfortable sanitation solutions designed for all types of events.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-500">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-emerald-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Eco-friendly design
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-emerald-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Regular maintenance
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-emerald-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Premium amenities
                            </li>
                        </ul>
                    </div>
                </div>

                
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-500/10 to-transparent rounded-bl-full transform group-hover:scale-150 transition-transform duration-500"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Cooling Systems</h3>
                        <p class="text-gray-600 mb-4">
                            Beat the heat with our range of air coolers, mist fans, and tower ACs for outdoor events.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-500">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Industrial air coolers
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                High-pressure mist fans
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Portable tower ACs
                            </li>
                        </ul>
                    </div>
                </div>

                
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-orange-500/10 to-transparent rounded-bl-full transform group-hover:scale-150 transition-transform duration-500"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Heating Solutions</h3>
                        <p class="text-gray-600 mb-4">
                            Keep your guests warm during winter events with our powerful tower heaters.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-500">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-orange-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                High-capacity heaters
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-orange-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Safe operation
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-orange-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Wide coverage area
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="<?php echo e(route('services')); ?>" 
                   class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-900 to-blue-700 text-white font-semibold rounded-xl hover:from-blue-800 hover:to-blue-600 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    View All Services
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <div class="aspect-w-4 aspect-h-3 bg-gradient-to-br from-blue-900 to-emerald-800">
                            <div class="flex items-center justify-center p-12">
                                <div class="text-center text-white">
                                    <div class="text-8xl font-bold mb-4">20+</div>
                                    <div class="text-2xl font-medium">Years of Excellence</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="absolute -bottom-8 -right-8 bg-white rounded-2xl p-6 shadow-xl">
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-gray-900">5000+</div>
                                <div class="text-sm text-gray-500">Events Completed</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <span class="inline-block px-4 py-1.5 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">
                        About Us
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                        Two Decades of Event Excellence
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        From large-scale weddings and corporate functions to private parties and public events, we understand the importance of hygiene, comfort, and reliability.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Our founder brings two decades of hands-on experience ensuring event logistics run seamlessly. We've built our reputation on delivering premium portable sanitation and comfort solutions that exceed expectations.
                    </p>

                    <div class="grid grid-cols-2 gap-6 pt-4">
                        <div class="flex items-start space-x-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Quality Assured</h4>
                                <p class="text-sm text-gray-500">Premium equipment maintained to highest standards</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">24/7 Support</h4>
                                <p class="text-sm text-gray-500">Round-the-clock assistance for your events</p>
                            </div>
                        </div>
                    </div>

                    <a href="<?php echo e(route('about')); ?>" 
                       class="inline-flex items-center text-blue-900 font-semibold hover:text-blue-700 transition-colors group">
                        Learn More About Us
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-20 bg-gradient-to-br from-blue-900 via-blue-800 to-emerald-900 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('/images/pattern.svg')] opacity-10"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-500/20 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500/20 rounded-full filter blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-white/10 text-emerald-300 rounded-full text-sm font-medium mb-4">
                    Why Choose Us
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    The EventPro Advantage
                </h2>
                <p class="text-lg text-blue-100">
                    We go above and beyond to ensure your event runs smoothly with our commitment to excellence.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-white/10 backdrop-blur rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Premium Quality</h3>
                    <p class="text-blue-100">Top-tier equipment maintained to the highest hygiene standards</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-white/10 backdrop-blur rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Quick Setup</h3>
                    <p class="text-blue-100">Fast deployment and professional installation at your venue</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-white/10 backdrop-blur rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Competitive Pricing</h3>
                    <p class="text-blue-100">Best value for premium services with transparent pricing</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-white/10 backdrop-blur rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">24/7 Support</h3>
                    <p class="text-blue-100">Dedicated team available around the clock for your needs</p>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-blue-50 to-white border border-blue-100">
                    <div class="text-5xl font-bold text-blue-900 mb-2" x-data="{ count: 0 }" x-init="
                        let target = 5000;
                        let duration = 2000;
                        let step = target / (duration / 16);
                        let interval = setInterval(() => {
                            count = Math.min(count + step, target);
                            if (count >= target) clearInterval(interval);
                        }, 16);
                    ">
                        <span x-text="Math.floor(count).toLocaleString()">5000</span>+
                    </div>
                    <div class="text-gray-600 font-medium">Events Served</div>
                </div>

                <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-emerald-50 to-white border border-emerald-100">
                    <div class="text-5xl font-bold text-emerald-700 mb-2">20+</div>
                    <div class="text-gray-600 font-medium">Years Experience</div>
                </div>

                <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-orange-50 to-white border border-orange-100">
                    <div class="text-5xl font-bold text-orange-600 mb-2">500+</div>
                    <div class="text-gray-600 font-medium">Equipment Units</div>
                </div>

                <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-purple-50 to-white border border-purple-100">
                    <div class="text-5xl font-bold text-purple-700 mb-2">100%</div>
                    <div class="text-gray-600 font-medium">Client Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    
    <?php if($galleryImages->count() > 0): ?>
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
                    Our Gallery
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Recent Event Highlights
                </h2>
                <p class="text-lg text-gray-600">
                    Take a look at some of our recent events and see our services in action.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <?php $__currentLoopData = $galleryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group relative aspect-square rounded-2xl overflow-hidden shadow-lg">
                    <img src="<?php echo e($image->image_url); ?>" 
                         alt="<?php echo e($image->title); ?>" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="text-white font-semibold"><?php echo e($image->title); ?></h4>
                            <p class="text-white/80 text-sm"><?php echo e($image->event_type); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="text-center mt-12">
                <a href="<?php echo e(route('gallery')); ?>" 
                   class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-900 to-blue-700 text-white font-semibold rounded-xl hover:from-blue-800 hover:to-blue-600 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    View Full Gallery
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <?php endif; ?>

    
    <?php if($testimonials->count() > 0): ?>
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-800 rounded-full text-sm font-medium mb-4">
                    Testimonials
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    What Our Clients Say
                </h2>
                <p class="text-lg text-gray-600">
                    Don't just take our word for it — hear from our satisfied customers.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    
                    <div class="flex items-center mb-4">
                        <?php for($i = 1; $i <= 5; $i++): ?>
                            <svg class="w-5 h-5 <?php echo e($i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-200'); ?>" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        <?php endfor; ?>
                    </div>

                    
                    <p class="text-gray-600 leading-relaxed mb-6">
                        "<?php echo e($testimonial->testimonial); ?>"
                    </p>

                    
                    <div class="flex items-center">
                        <?php if($testimonial->client_image_url): ?>
                            <img src="<?php echo e($testimonial->client_image_url); ?>" 
                                 alt="<?php echo e($testimonial->client_name); ?>" 
                                 class="w-12 h-12 rounded-full object-cover mr-4">
                        <?php else: ?>
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-emerald-500 rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-semibold text-lg"><?php echo e(substr($testimonial->client_name, 0, 1)); ?></span>
                            </div>
                        <?php endif; ?>
                        <div>
                            <h4 class="font-semibold text-gray-900"><?php echo e($testimonial->client_name); ?></h4>
                            <?php if($testimonial->client_designation || $testimonial->client_company): ?>
                                <p class="text-sm text-gray-500">
                                    <?php echo e($testimonial->client_designation); ?><?php echo e($testimonial->client_designation && $testimonial->client_company ? ', ' : ''); ?><?php echo e($testimonial->client_company); ?>

                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="text-center mt-12">
                <a href="<?php echo e(route('testimonials')); ?>" 
                   class="inline-flex items-center text-blue-900 font-semibold hover:text-blue-700 transition-colors group">
                    Read More Testimonials
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <?php endif; ?>

    
    <section class="py-20 bg-gradient-to-r from-emerald-600 to-emerald-700 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('/images/pattern.svg')] opacity-10"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-white/10 rounded-full filter blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-white/10 rounded-full filter blur-3xl"></div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to Make Your Event Comfortable?
            </h2>
            <p class="text-xl text-emerald-100 mb-8 max-w-2xl mx-auto">
                Book our premium event services today and give your guests an unforgettable experience.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="<?php echo e(route('booking')); ?>" 
                   class="inline-flex items-center justify-center px-8 py-4 bg-white text-emerald-700 font-semibold rounded-xl hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    Book Now
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="<?php echo e(route('contact')); ?>" 
                   class="inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white text-white font-semibold rounded-xl hover:bg-white/10 transition-all duration-300">
                    Contact Us
                </a>
            </div>
        </div>
    </section>

    
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1.5 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
                    FAQs
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Frequently Asked Questions
                </h2>
            </div>

            <div class="space-y-4" x-data="{ openFaq: null }">
                <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <button @click="openFaq = openFaq === <?php echo e($index); ?> ? null : <?php echo e($index); ?>" 
                            class="w-full px-6 py-5 flex items-center justify-between text-left">
                        <span class="font-semibold text-gray-900"><?php echo e($faq['q']); ?></span>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200"
                             :class="{ 'rotate-180': openFaq === <?php echo e($index); ?> }"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="openFaq === <?php echo e($index); ?>" 
                         x-collapse
                         class="px-6 pb-5">
                        <p class="text-gray-600"><?php echo e($faq['a']); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="text-center mt-8">
                <a href="<?php echo e(route('faqs')); ?>" class="text-blue-900 font-semibold hover:text-blue-700 transition-colors">
                    View All FAQs →
                </a>
            </div>
        </div>
    </section>

    
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16">
                <div>
                    <span class="inline-block px-4 py-1.5 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
                        Get In Touch
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        Have Questions? Let's Talk
                    </h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Reach out to us for inquiries, quotes, or any information about our services. We're here to help make your event perfect.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Phone</h4>
                                <a href="tel:+919876543210" class="text-gray-600 hover:text-blue-600 transition-colors">+91 98765 43210</a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Email</h4>
                                <a href="mailto:info@eventpro.com" class="text-gray-600 hover:text-emerald-600 transition-colors">info@eventpro.com</a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Location</h4>
                                <p class="text-gray-600">Mumbai, Maharashtra, India</p>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="bg-gray-50 rounded-2xl p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Send us a Message</h3>
                    <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="space-y-5">
                        <?php echo csrf_field(); ?>
                        <div>
                            <input type="text" name="name" placeholder="Your Name" required
                                   class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-colors">
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Your Email" required
                                   class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-colors">
                        </div>
                        <div>
                            <input type="text" name="subject" placeholder="Subject" required
                                   class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-colors">
                        </div>
                        <div>
                            <textarea name="message" rows="4" placeholder="Your Message" required
                                      class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-colors resize-none"></textarea>
                        </div>
                        <button type="submit" 
                                class="w-full px-6 py-4 bg-gradient-to-r from-blue-900 to-blue-700 text-white font-semibold rounded-xl hover:from-blue-800 hover:to-blue-600 transition-all duration-300 shadow-lg">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb1882f8c14f0a5270b201bcf650aaac1)): ?>
<?php $attributes = $__attributesOriginalb1882f8c14f0a5270b201bcf650aaac1; ?>
<?php unset($__attributesOriginalb1882f8c14f0a5270b201bcf650aaac1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb1882f8c14f0a5270b201bcf650aaac1)): ?>
<?php $component = $__componentOriginalb1882f8c14f0a5270b201bcf650aaac1; ?>
<?php unset($__componentOriginalb1882f8c14f0a5270b201bcf650aaac1); ?>
<?php endif; ?>
<?php /**PATH C:\Bhai\event-services\resources\views/pages/home.blade.php ENDPATH**/ ?>