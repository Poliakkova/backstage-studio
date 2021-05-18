<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('../css/button.css')); ?>">

    <?php echo $__env->yieldContent('content2'); ?>

    <section class="button-section">
        <div class="container">
            <div class="button-section-content">
                <h4>Запишитесь на консультацию!</h4>
                <div class="button-group">
                    <a class="big-button popup-link" href="#popup">Консультация бесплатно</a>
                    <p class="paragraph2">Оставьте номер телефона и мы свяжемся с вами в ближайшее время</p>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Bitnami\wampstack-8.0.3-0\apache2\htdocs\backstage\resources\views/button.blade.php ENDPATH**/ ?>