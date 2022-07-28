<nav id="header_nav">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/products">Products</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <?php if (Auth::check() && Auth::user()->is_admin) : ?>
            <li><a href="/admin">Admin</a></li>
        <?php endif; ?>
    </ul>
</nav>