<h3>Welcome <?php if( $logged_name!='Admin'): ?>
    <?php echo e($logged_name); ?> 
    <?php else: ?> 
   Admin 
   <?php endif; ?>
</h3>

<h3>Add Product</h3>
<form method="post" action="/store-products" enctype="multipart/form-data">
 <?php echo csrf_field(); ?>
 <input type="text" name="title" placeholder="Enter title"/><br>
 <textarea name="description" placeholder="Enter description"></textarea><br>
 <input type="text" name="price" placeholder="Enter price"/><br>
 <input type="file" name="prod_images"/><br>
 <input type="submit" value="Add product"/>
</form>

<h3>Products Added</h3>
<table>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>Status</th>
    </tr>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><a href="/product/<?php echo e($item->id); ?>"><?php echo e($item->title); ?></a></td>
        <td><?php echo e($item->description); ?></td>
        <td><?php echo e($item->price); ?></td>
        <td>
        <?php if($item->prod_images): ?>
        <img src="<?php echo e(asset('storage/images/'.$item->prod_images)); ?>" style="height: 50px;width:100px;">
        <?php else: ?> 
        <span>No image found!</span>
        <?php endif; ?>
       </td>
       <td><?php echo e($item->status); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH E:\xampp\htdocs\products_job_task\resources\views/home.blade.php ENDPATH**/ ?>