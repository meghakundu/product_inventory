<html>
    <head>
        <title>Product</title>
    </head>
    <body>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       Title: <?php echo e($productItem->title); ?><br>
       Description: <?php echo e($productItem->description); ?><br>
       Price: <?php echo e($productItem->price); ?><br>
       <form action="/approve-status/<?php echo e($productItem->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
         <button><?php echo e($productItem->status); ?></button>
        </form>
       <form action="/reject-status/<?php echo e($productItem->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
         <input type="text" name="reject_reason" placeholder="Enter reason"/>
        <button>Reject</button>
       </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </body>
</html><?php /**PATH E:\xampp\htdocs\products_job_task\resources\views/product_details.blade.php ENDPATH**/ ?>