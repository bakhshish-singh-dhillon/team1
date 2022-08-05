<ul class="side-bar p-0">
    <li>
        <a href="/admin" class="home-logo m-4">Farm Fresh</a>
    </li>
    <li class="menu-item">
        <a href="/admin"><i class="fa-solid fa-house px-2"></i>Dashboard</a>
    </li>
    <li class="menu-item">
        <a href="/admin/orders"><i class="fa-solid fa-bag-shopping px-2"></i>Orders</a>
    </li>
    <li class="menu-item">
        <a href="/admin/users"><i class="fa-solid fa-user px-2"></i>Users</a>
    </li>
    <li class="menu-item">
        <a href="/admin/products"><i class="fa-solid fa-carrot px-2"></i>Products</a>
    </li>
    <li class="menu-item">
        <a href="/admin/categories"><i class="fa-solid fa-folder-tree px-2"></i>Categories</a>
    </li>
    <li class="menu-item">
        <a href="/admin/reviews"><i class="fas fa-comments px-2"></i>Reviews</a>
    </li>
    <li class="menu-item">
        <a href="/"><i class="fa-solid fa-house-user px-2"></i>User Dashboard</a>
    </li>
    <li class="menu-item">
        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="fa-solid fa-power-off px-2"></i>Log Out
        </a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
        </form>
    </li>
</ul><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/includes/admin/sidebar.blade.php ENDPATH**/ ?>