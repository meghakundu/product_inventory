<form method="POST" action="/register">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="Enter your name"/>
    <input type="text" name="email" placeholder="Enter your email"/>
    <input type="password" name="password" placeholder="Enter your password"/>
    <input type="submit" name="" value="Register"/>
</form><?php /**PATH E:\xampp\htdocs\products_job_task\resources\views/register.blade.php ENDPATH**/ ?>