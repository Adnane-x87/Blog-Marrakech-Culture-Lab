<?php $__env->startSection('title', 'Marrakech Cultural Scene - Discover Local Arts & Events'); ?>
<?php $__env->startSection('description', 'Discover Marrakech\'s vibrant cultural scene. Find art exhibitions, music concerts, theater performances, and cultural workshops in the heart of Morocco.'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<section class="hero-section" style="background-image: url('<?php echo e(asset('images/marrakech_hero_2.jpg')); ?>');">
    <div class="container">
        <div class="hero-content">
            <h1 class="fade-in">Discover Marrakech's Cultural Heartbeat</h1>
            <p class="fade-in">Immerse yourself in the rich artistic heritage of Morocco's red city. From traditional music concerts to contemporary art exhibitions, explore the vibrant cultural landscape that makes Marrakech unique.</p>
            <div class="fade-in">
                <a href="<?php echo e(route('events.index')); ?>" class="btn btn-primary me-3">
                    <i class="fas fa-calendar-alt me-2"></i>Explore Events
                </a>
                <a href="<?php echo e(route('about')); ?>" class="btn btn-outline-primary">
                    <i class="fas fa-info-circle me-2"></i>Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Events Section -->
<section class="py-5">
    <div class="container">
        <div class="section-title">
            <h2>Featured Cultural Events</h2>
            <p>Don't miss these extraordinary cultural experiences happening in Marrakech</p>
        </div>
        
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $featuredEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="event-card" data-category="<?php echo e($event->category); ?>" data-date="<?php echo e($event->date); ?>">
                    <img src="<?php echo e(asset($event->image)); ?>" alt="<?php echo e($event->title); ?>">
                    <div class="card-body">
                        <div class="event-date">
                            <i class="fas fa-calendar me-2"></i><?php echo e($event->date->format('F d, Y')); ?>

                        </div>
                        <span class="event-category"><?php echo e(ucfirst($event->category)); ?></span>
                        <h3 class="card-title"><?php echo e($event->title); ?></h3>
                        <p class="card-text"><?php echo e(Str::limit($event->description, 120)); ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="fas fa-map-marker-alt me-1"></i><?php echo e($event->venue); ?>

                            </small>
                            <a href="<?php echo e(route('events.show', $event->id)); ?>" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye me-1"></i>View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-12 text-center">
                <p>No featured events at the moment. Check back soon!</p>
            </div>
            <?php endif; ?>
        </div>
        
        <div class="text-center mt-4">
            <a href="<?php echo e(route('events.index')); ?>" class="btn btn-secondary">
                <i class="fas fa-th-large me-2"></i>View All Events
            </a>
        </div>
    </div>
</section>

<!-- Cultural Highlights Section -->
<section class="py-5 bg-cream">
    <div class="container">
        <div class="section-title">
            <h2>Cultural Highlights</h2>
            <p>Explore the diverse artistic expressions that define Marrakech's cultural identity</p>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="bg-terracotta text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-music fa-2x"></i>
                    </div>
                    <h4>Traditional Music</h4>
                    <p>From Gnawa rhythms to Andalusian melodies, discover the rich musical heritage of Morocco.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="bg-ochre text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-palette fa-2x"></i>
                    </div>
                    <h4>Visual Arts</h4>
                    <p>Contemporary galleries showcase both traditional crafts and modern artistic interpretations.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="bg-indigo text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-theater-masks fa-2x"></i>
                    </div>
                    <h4>Theater & Performance</h4>
                    <p>Experience storytelling traditions through modern theater and traditional performances.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="bg-terracotta text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-hands fa-2x"></i>
                    </div>
                    <h4>Artisan Workshops</h4>
                    <p>Learn traditional crafts directly from master artisans in immersive workshop experiences.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h3>Share Your Cultural Event</h3>
                <p class="mb-0">Are you organizing a cultural event in Marrakech? Join our platform and connect with culture enthusiasts from around the world.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="<?php echo e(route('events.submit')); ?>" class="btn btn-primary">
                    <i class="fas fa-plus-circle me-2"></i>Submit Your Event
                </a>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Solicode\Documents\my_projectq\blog-\realisation\marrakech-blog\resources\views/home.blade.php ENDPATH**/ ?>