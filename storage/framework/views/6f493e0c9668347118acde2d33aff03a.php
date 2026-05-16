<?php if (isset($component)) { $__componentOriginalb1882f8c14f0a5270b201bcf650aaac1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1882f8c14f0a5270b201bcf650aaac1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.event-layout','data' => ['seo' => $seo ?? null,'title' => 'Our Services']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('event-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['seo' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($seo ?? null),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Our Services')]); ?>

    
    <section class="relative min-h-[60vh] flex items-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-blue-800 to-emerald-900">
            <div class="absolute inset-0 opacity-10" style="background-image: url('/images/pattern.svg')"></div>
        </div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-500/20 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-blue-400/20 rounded-full filter blur-3xl"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center w-full">
            <span class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-md rounded-full text-emerald-300 text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2 animate-pulse"></span>
                What We Offer
            </span>
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                Our Premium<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400">Event Services</span>
            </h1>
            <p class="text-xl text-blue-100 max-w-2xl mx-auto leading-relaxed">
                Everything you need to keep guests comfortable — from sanitation to climate control.
            </p>
        </div>
    </section>

    
    <div class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <nav class="flex items-center space-x-2 text-sm text-gray-500">
                <a href="<?php echo e(route('home')); ?>" class="hover:text-blue-600 transition-colors">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-gray-900 font-medium">Services</span>
            </nav>
        </div>
    </div>

    
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-4">All Services</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Comprehensive Event Solutions</h2>
                <p class="text-lg text-gray-600">We provide everything you need to ensure your guests' comfort and convenience at any event.</p>
            </div>

            <?php
                $services = [
                    [
                        'title' => 'Portable Toilets (Bio-Loos)',
                        'desc' => 'Eco-friendly, hygienic, and comfortable sanitation solutions designed for all types of events — from intimate gatherings to large-scale festivals.',
                        'features' => ['Eco-friendly bio-degradable design', 'Regular maintenance & cleaning', 'Premium amenities included', 'Available in multiple configurations', 'Handicap accessible units available'],
                        'color' => 'from-emerald-500 to-emerald-600',
                        'light' => 'bg-emerald-50',
                        'border' => 'border-emerald-100',
                        'badge' => 'bg-emerald-100 text-emerald-700',
                        'check' => 'text-emerald-500',
                        'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                        'tag' => 'Most Popular',
                    ],
                    [
                        'title' => 'Cooling Systems',
                        'desc' => 'Beat the heat with our range of industrial air coolers, mist fans, and portable tower ACs — perfect for outdoor summer events.',
                        'features' => ['Industrial-grade air coolers', 'High-pressure mist fan systems', 'Portable tower ACs', 'Energy-efficient operation', 'Coverage for large open areas'],
                        'color' => 'from-blue-500 to-blue-600',
                        'light' => 'bg-blue-50',
                        'border' => 'border-blue-100',
                        'badge' => 'bg-blue-100 text-blue-700',
                        'check' => 'text-blue-500',
                        'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
                        'tag' => 'Summer Ready',
                    ],
                    [
                        'title' => 'Tower Heaters',
                        'desc' => 'Keep your guests warm and comfortable during winter events with our powerful, safe, and efficient tower heating solutions.',
                        'features' => ['High-capacity outdoor heaters', 'Safe & certified operation', 'Wide radiant heat coverage', 'Silent operation', 'Fuel-efficient systems'],
                        'color' => 'from-orange-500 to-red-500',
                        'light' => 'bg-orange-50',
                        'border' => 'border-orange-100',
                        'badge' => 'bg-orange-100 text-orange-700',
                        'check' => 'text-orange-500',
                        'icon' => 'M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z',
                        'tag' => 'Winter Events',
                    ],
                    [
                        'title' => "Men's Urinal Units",
                        'desc' => 'Hygienic and discrete outdoor urinal solutions designed for large events with high foot traffic — reduces queue time significantly.',
                        'features' => ['Compact & space-efficient', 'Privacy screens included', 'Chemical odour control', 'Quick setup & removal', 'Suitable for all outdoor venues'],
                        'color' => 'from-purple-500 to-indigo-600',
                        'light' => 'bg-purple-50',
                        'border' => 'border-purple-100',
                        'badge' => 'bg-purple-100 text-purple-700',
                        'check' => 'text-purple-500',
                        'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                        'tag' => 'High Capacity',
                    ],
                    [
                        'title' => 'VIP Luxury Restrooms',
                        'desc' => 'Premium restroom trailers with full amenities for high-end events — weddings, corporate galas, and exclusive private functions.',
                        'features' => ['Air-conditioned interiors', 'Running water & mirrors', 'Premium toiletries provided', 'Elegant interior finish', 'Dedicated attendant available'],
                        'color' => 'from-yellow-500 to-amber-600',
                        'light' => 'bg-yellow-50',
                        'border' => 'border-yellow-100',
                        'badge' => 'bg-yellow-100 text-yellow-700',
                        'check' => 'text-yellow-500',
                        'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z',
                        'tag' => 'Premium',
                    ],
                    [
                        'title' => 'Maintenance & Servicing',
                        'desc' => 'On-site maintenance staff for extended events to ensure continuous hygiene and equipment performance throughout your event.',
                        'features' => ['Dedicated on-site attendants', 'Regular cleaning schedules', 'Emergency response team', '24/7 hotline support', 'Post-event deep cleaning'],
                        'color' => 'from-teal-500 to-cyan-600',
                        'light' => 'bg-teal-50',
                        'border' => 'border-teal-100',
                        'badge' => 'bg-teal-100 text-teal-700',
                        'check' => 'text-teal-500',
                        'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
                        'tag' => 'Add-On',
                    ],
                ];
            ?>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border <?php echo e($service['border']); ?> overflow-hidden flex flex-col">
                    
                    <div class="h-2 bg-gradient-to-r <?php echo e($service['color']); ?>"></div>
                    <div class="p-8 flex flex-col flex-1">
                        
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br <?php echo e($service['color']); ?> rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo e($service['icon']); ?>"/>
                                </svg>
                            </div>
                            <span class="text-xs font-bold px-3 py-1.5 rounded-full <?php echo e($service['badge']); ?>"><?php echo e($service['tag']); ?></span>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 mb-3"><?php echo e($service['title']); ?></h3>
                        <p class="text-gray-600 mb-6 leading-relaxed"><?php echo e($service['desc']); ?></p>

                        <ul class="space-y-2.5 mb-8 flex-1">
                            <?php $__currentLoopData = $service['features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 <?php echo e($service['check']); ?> mr-2.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <?php echo e($feature); ?>

                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                        <a href="<?php echo e(route('booking')); ?>" class="mt-auto w-full inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r <?php echo e($service['color']); ?> text-white font-semibold rounded-xl hover:opacity-90 transform hover:scale-105 transition-all duration-300 shadow-md">
                            Book This Service
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1.5 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-4">How It Works</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Simple 4-Step Process</h2>
                <p class="text-lg text-gray-500 max-w-2xl mx-auto">Getting started is easy. We handle the heavy lifting — you focus on your event.</p>
            </div>
            <div class="grid md:grid-cols-4 gap-8 relative">
                
                <div class="hidden md:block absolute top-10 left-1/4 right-1/4 h-0.5 bg-gradient-to-r from-blue-200 via-emerald-200 to-blue-200" style="left: 12.5%; right: 12.5%;"></div>

                <?php $__currentLoopData = [
                    ['step' => '01', 'title' => 'Get in Touch', 'desc' => 'Call us or fill the booking form with your event details.', 'color' => 'bg-blue-600'],
                    ['step' => '02', 'title' => 'Get a Quote', 'desc' => 'We assess your needs and send a custom, transparent quote.', 'color' => 'bg-emerald-600'],
                    ['step' => '03', 'title' => 'We Set Up', 'desc' => 'Our team delivers and installs everything before your event.', 'color' => 'bg-orange-500'],
                    ['step' => '04', 'title' => 'Enjoy Your Event', 'desc' => 'We maintain everything. You host. We handle the rest.', 'color' => 'bg-purple-600'],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="text-center relative">
                    <div class="w-20 h-20 <?php echo e($step['color']); ?> rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg relative z-10">
                        <span class="text-2xl font-black text-white"><?php echo e($step['step']); ?></span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2"><?php echo e($step['title']); ?></h3>
                    <p class="text-gray-500 text-sm leading-relaxed"><?php echo e($step['desc']); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-800 rounded-full text-sm font-semibold mb-4">Events We Cover</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">We Cater to All Event Types</h2>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                <?php $__currentLoopData = [
                    ['label' => 'Weddings', 'emoji' => '💍', 'bg' => 'bg-pink-50 border-pink-100'],
                    ['label' => 'Corporate', 'emoji' => '🏢', 'bg' => 'bg-blue-50 border-blue-100'],
                    ['label' => 'Festivals', 'emoji' => '🎪', 'bg' => 'bg-purple-50 border-purple-100'],
                    ['label' => 'Birthday Parties', 'emoji' => '🎂', 'bg' => 'bg-yellow-50 border-yellow-100'],
                    ['label' => 'Public Events', 'emoji' => '🏟️', 'bg' => 'bg-green-50 border-green-100'],
                    ['label' => 'Private Parties', 'emoji' => '🥂', 'bg' => 'bg-orange-50 border-orange-100'],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="<?php echo e($event['bg']); ?> border rounded-2xl p-6 text-center hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                    <div class="text-4xl mb-3"><?php echo e($event['emoji']); ?></div>
                    <div class="text-sm font-semibold text-gray-700"><?php echo e($event['label']); ?></div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="py-20 bg-gradient-to-br from-blue-900 via-blue-800 to-emerald-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: url('/images/pattern.svg')"></div>
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Need a Custom Package?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">Every event is different. Contact us for a tailored quote that fits your exact requirements and budget.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="<?php echo e(route('booking')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-bold rounded-xl hover:from-emerald-600 hover:to-emerald-700 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    Book Now
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="<?php echo e(route('contact')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur border border-white/20 text-white font-bold rounded-xl hover:bg-white/20 transition-all duration-300">Contact Us</a>
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
<?php endif; ?><?php /**PATH C:\Bhai\event-services\resources\views/pages/services.blade.php ENDPATH**/ ?>