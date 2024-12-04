<!-- resources/views/technician/hardware.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Hardware Page</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Lab Name</th>
                    <th>Generate Report</th>
                    <th>Admin</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $labs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $lab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><?php echo e($lab->name); ?></td>
                        <td>
                            <!-- Form for file upload -->
                            <form action="<?php echo e(route('uploadReport', $lab->id)); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="file" name="report_file" accept=".csv, .pdf, .xls">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>

                            <!-- Display the download link if a report exists -->
                            <?php if($lab->report_file): ?>
                                <a href="<?php echo e(asset('storage/' . $lab->report_file)); ?>" class="btn btn-success" target="_blank">Download</a>
                            <?php endif; ?>
                        </td>
                        <td>
                            <!-- Verify button for Admin -->
                            <?php if(auth()->user()->is_admin): ?> <!-- Check if user is admin -->
                                <form action="<?php echo e(route('verifyReport', $lab->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-warning">Verify</button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\IMS-UiTM-Raub\resources\views/technician/hardware.blade.php ENDPATH**/ ?>