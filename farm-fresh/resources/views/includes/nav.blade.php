<nav id="header_nav">
    <ul>
        <li @if(isset($title)) class="<?php if ($title && $title == 'Home') echo 'active';  ?>" @endif><a href="/">Home</a></li>
        <li @if(isset($title)) class="<?php if ($title && $title == 'Products') echo 'active';  ?>" @endif><a href="/products">Products</a></li>
        <li @if(isset($title)) class="<?php if ($title && $title == 'About') echo 'active';  ?>" @endif><a href="/about">About</a></li>
        <li @if(isset($title)) class="<?php if ($title && $title == 'Contact') echo 'active';  ?>" @endif><a href="/contact">Contact</a></li>
        <?php if (Auth::check() && Auth::user()->is_admin) : ?>
            <li @if(isset($title)) class="<?php if ($title && $title == 'Admin') echo 'active';  ?>" @endif><a href="/admin">Admin</a></li>
        <?php endif; ?>
    </ul>
</nav>