<?php $__env->startSection('title', 'DIBOO FASHION - المنتجات'); ?>

<?php $__env->startSection('content'); ?>
    <section class="page-header">
        <div class="container">
            <h1 class="animate-on-scroll">منتجاتنا</h1>
            <p class="animate-on-scroll">اكتشف تشكيلتنا المتنوعة من الأزياء الراقية</p>
        </div>
    </section>

    <section class="filters-section py-4">
        <div class="container">
            <div class="filter-buttons animate-on-scroll">
                <button class="filter-btn active" data-id="all">all</button>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <button class="filter-btn" data-id="<?php echo e($val->id); ?>"><?php echo e($val->name); ?></button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <section class="products-section py-5">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                <div class="col-md-4 col-lg-3 mb-4 product-item" data-category="<?php echo e($val->category->id); ?>">
                    <div class="product-card animate-on-scroll">
                        <div class="product-image">
                            <img src="<?php echo e(asset('storage/' . $val->images[0]->name)); ?>" alt="<?php echo e($val->name); ?>">
                            <span class="discount-badge">-<?php echo e($val->sale); ?>%</span>
                        </div>
                        <div class="product-info">
                            <h4><?php echo e($val->name); ?></h4>
                            <p class="product-category"><?php echo e($val->category->name); ?></p>
                            <div class="product-details">
                                <span class="product-color">اللون: أبيض</span>
                                <span class="product-fabric">القماش: قطن 100%</span>
                            </div>
                            <div class="product-price">
                                <span class="old-price">250 ر.س</span>
                                <span class="new-price">200 ر.س</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\course\BackEnd\xamp\htdocs\DIBOO\diboo\resources\views\pages\products.blade.php ENDPATH**/ ?>