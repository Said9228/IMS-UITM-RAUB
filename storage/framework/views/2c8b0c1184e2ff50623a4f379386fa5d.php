

<?php $__env->startSection('content'); ?>
    <div class="dashboard">
        <h1>Technician Dashboard</h1>
        <div class="icons">
            <a href="<?php echo e(route('hardware')); ?>" class="icon" data-tooltip="Go to the Hardware section">
                <img src="<?php echo e(asset('image/hardware.png')); ?>" alt="Hardware" />
                <span>Hardware</span>
            </a>
            <a href="<?php echo e(route('software')); ?>" class="icon" data-tooltip="Explore Software tools">
                <img src="<?php echo e(asset('image/software.png')); ?>" alt="Software" />
                <span>Software</span>
            </a>
            <a href="<?php echo e(route('otherDevices')); ?>" class="icon" data-tooltip="Manage Other Devices">
                <img src="<?php echo e(asset('image/otherdevice.png')); ?>" alt="Other Devices" />
                <span>Other Devices</span>
            </a>
            <a href="<?php echo e(route('layout')); ?>" class="icon" data-tooltip="View the Layout">
                <img src="<?php echo e(asset('image/layout.png')); ?>" alt="Layout" />
                <span>Layout</span>
            </a>
        </div>
        <footer class="footer">
            &copy; 2024 UiTM Raub
        </footer>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\IMS-UiTM-Raub\resources\views/technician/dashboard.blade.php ENDPATH**/ ?>