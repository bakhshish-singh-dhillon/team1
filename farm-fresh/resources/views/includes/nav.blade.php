<nav id="header_nav">
    <ul>
        <li class="<?php if ($title == 'Home') echo 'active';  ?>"><a href="/">Home</a></li>
        <li class="<?php if ($title == 'Products') echo 'active';  ?>"><a href="/products">Products</a></li>
        <li class="<?php if ($title == 'About') echo 'active';  ?>"><a href="/about">About</a></li>
        <li class="<?php if ($title == 'Contact') echo 'active';  ?>"><a href="/contact">Contact</a></li>
        <?php if (Auth::check() && Auth::user()->is_admin) : ?>
            <li class="<?php if ($title == 'Admin') echo 'active';  ?>"><a href="/admin">Admin</a></li>
        <?php endif; ?>
    </ul>
</nav>