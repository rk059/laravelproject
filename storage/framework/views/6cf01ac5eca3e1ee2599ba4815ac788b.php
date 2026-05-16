<?php if (isset($component)) { $__componentOriginalb1882f8c14f0a5270b201bcf650aaac1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1882f8c14f0a5270b201bcf650aaac1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.event-layout','data' => ['seo' => $seo ?? null,'title' => 'About Us']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('event-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['seo' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($seo ?? null),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('About Us')]); ?>

    
    <section class="relative min-h-[60vh] flex items-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-blue-800 to-emerald-900">
            <div class="absolute inset-0 opacity-10" style="background-image: url('/images/pattern.svg')"></div>
        </div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-500/20 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-blue-400/20 rounded-full filter blur-3xl"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center w-full">
            <span class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-md rounded-full text-emerald-300 text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2 animate-pulse"></span>
                Our Story
            </span>
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                Two Decades of<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400">Event Excellence</span>
            </h1>
            <p class="text-xl text-blue-100 max-w-2xl mx-auto leading-relaxed">
                We've spent 20+ years perfecting the art of event comfort — so every guest feels taken care of.
            </p>
        </div>
    </section>

    
    <div class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <nav class="flex items-center space-x-2 text-sm text-gray-500">
                <a href="<?php echo e(route('home')); ?>" class="hover:text-blue-600 transition-colors">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-gray-900 font-medium">About Us</span>
            </nav>
        </div>
    </div>

    
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl bg-gradient-to-br from-blue-900 to-emerald-800 aspect-[4/3] flex items-center justify-center">
                        <div class="text-center text-white p-12">
                            <div class="text-9xl font-black mb-4 leading-none">20<span class="text-emerald-400">+</span></div>
                            <div class="text-2xl font-semibold tracking-wide">Years of Excellence</div>
                            <div class="mt-4 w-16 h-1 bg-emerald-400 mx-auto rounded-full"></div>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl p-6 shadow-2xl border border-gray-100">
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-gray-900">5000+</div>
                                <div class="text-sm text-gray-500 font-medium">Events Completed</div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-emerald-100 rounded-2xl -z-10"></div>
                </div>

                <div class="space-y-8">
                    <div>
                        <span class="inline-block px-4 py-1.5 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-4">About Us</span>
                        <h2 class="text-4xl font-bold text-gray-900 leading-tight mb-6">Built on Trust,<br>Delivered with Care</h2>
                        <div class="space-y-4 text-gray-600 leading-relaxed text-lg">
                            <p>For over two decades, we've been the trusted partner behind thousands of successful events across India. From intimate private parties to grand weddings and large corporate functions, our team has always shown up — on time, fully prepared, and committed to excellence.</p>
                            <p>Our founder built this company from a simple belief: <strong class="text-gray-900">guests deserve comfort, and event organizers deserve peace of mind.</strong> That philosophy drives every decision we make.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 pt-4">
                        <?php $__currentLoopData = [
                            ['bg' => 'bg-blue-50', 'icon_bg' => 'bg-blue-600', 'title' => 'Quality Assured', 'desc' => 'Premium equipment, highest standards', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                            ['bg' => 'bg-emerald-50', 'icon_bg' => 'bg-emerald-600', 'title' => '24/7 Support', 'desc' => 'Always available for your events', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['bg' => 'bg-orange-50', 'icon_bg' => 'bg-orange-500', 'title' => 'Quick Deploy', 'desc' => 'Fast setup at your venue', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                            ['bg' => 'bg-purple-50', 'icon_bg' => 'bg-purple-600', 'title' => 'Fair Pricing', 'desc' => 'Transparent, no hidden costs', 'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-start space-x-3 p-4 <?php echo e($v['bg']); ?> rounded-xl">
                            <div class="w-10 h-10 <?php echo e($v['icon_bg']); ?> rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo e($v['icon']); ?>"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm"><?php echo e($v['title']); ?></h4>
                                <p class="text-xs text-gray-500 mt-1"><?php echo e($v['desc']); ?></p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-16 bg-gradient-to-r from-blue-900 to-emerald-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <?php $__currentLoopData = [
                    ['value' => '5000+', 'label' => 'Events Served', 'color' => 'text-emerald-400'],
                    ['value' => '20+', 'label' => 'Years Experience', 'color' => 'text-cyan-400'],
                    ['value' => '500+', 'label' => 'Equipment Units', 'color' => 'text-yellow-400'],
                    ['value' => '100%', 'label' => 'Client Satisfaction', 'color' => 'text-pink-400'],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="p-6">
                    <div class="text-4xl lg:text-5xl font-black <?php echo e($stat['color']); ?> mb-2"><?php echo e($stat['value']); ?></div>
                    <div class="text-blue-200 font-medium"><?php echo e($stat['label']); ?></div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1.5 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-4">What Drives Us</span>
                <h2 class="text-4xl font-bold text-gray-900">Our Mission & Vision</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-3xl p-10 shadow-lg border border-gray-100 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-blue-500/10 to-transparent rounded-bl-full"></div>
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h3>
                    <p class="text-gray-600 leading-relaxed text-lg">To provide premium, hygienic, and reliable portable sanitation and comfort solutions that elevate every event experience — ensuring guests feel respected and cared for, regardless of venue or scale.</p>
                </div>
                <div class="bg-white rounded-3xl p-10 shadow-lg border border-gray-100 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-emerald-500/10 to-transparent rounded-bl-full"></div>
                    <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h3>
                    <p class="text-gray-600 leading-relaxed text-lg">To be India's most trusted event comfort partner — known for consistency, quality, and a team that truly cares. We envision a future where no event goes undersupported.</p>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-800 rounded-full text-sm font-semibold mb-4">The EventPro Promise</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Thousands Choose Us</h2>
                <p class="text-lg text-gray-500 max-w-2xl mx-auto">Every event is unique. We bring the same dedication to a 50-person birthday as we do to a 5000-person festival.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <?php $__currentLoopData = [
                    ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Hygiene First', 'desc' => 'Every unit is thoroughly sanitized before and after each event. We maintain strict hygiene protocols that go beyond industry standards.', 'color' => 'from-blue-500 to-blue-600', 'bg' => 'bg-blue-50'],
                    ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'Professional Team', 'desc' => 'Our trained staff handles delivery, setup, maintenance, and removal — leaving you free to focus on hosting the perfect event.', 'color' => 'from-emerald-500 to-emerald-600', 'bg' => 'bg-emerald-50'],
                    ['icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', 'title' => 'End-to-End Service', 'desc' => 'From planning to post-event cleanup, we manage everything. One call is all it takes to get your event fully sorted.', 'color' => 'from-orange-500 to-red-500', 'bg' => 'bg-orange-50'],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group <?php echo e($item['bg']); ?> rounded-3xl p-8 hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br <?php echo e($item['color']); ?> rounded-2xl flex items-center justify-center mb-6 shadow-md group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo e($item['icon']); ?>"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3"><?php echo e($item['title']); ?></h3>
                    <p class="text-gray-600 leading-relaxed"><?php echo e($item['desc']); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="py-20 bg-gradient-to-r from-emerald-600 to-emerald-700 relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-white/10 rounded-full filter blur-3xl"></div>
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to Work With Us?</h2>
            <p class="text-xl text-emerald-100 mb-8">Let's make your next event one to remember.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="<?php echo e(route('booking')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-white text-emerald-700 font-bold rounded-xl hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    Book Now
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="<?php echo e(route('contact')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-xl hover:bg-white/10 transition-all duration-300">Contact Us</a>
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
<?php endif; ?><?php /**PATH C:\Bhai\event-services\resources\views/pages/about.blade.php ENDPATH**/ ?>