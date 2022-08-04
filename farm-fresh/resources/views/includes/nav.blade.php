<nav id="header_nav">
    <ul class="m-2">
        <li @if (isset($title)) class="<?php if ($title && $title == 'Home') {
                                            echo 'active';
                                        } ?>" @endif>
            <a href="/" data-toggle="tooltip" data-placement="bottom" title="Home">Home</a>
        </li>
        <li @if (isset($title)) class="<?php if ($title && $title == 'Products') {
                                            echo 'active';
                                        } ?>" @endif>
            <a href="/products" data-toggle="tooltip" data-placement="bottom" title="Products">Products</a>
        </li>
        <li @if (isset($title)) class="<?php if ($title && $title == 'About') {
                                            echo 'active';
                                        } ?>" @endif>
            <a href="/about" data-toggle="tooltip" data-placement="bottom" title="About">About</a>
        </li>
        <li @if (isset($title)) class="<?php if ($title && $title == 'Contact') {
                                            echo 'active';
                                        } ?>" @endif>
            <a href="/contact" data-toggle="tooltip" data-placement="bottom" title="Contact">Contact</a>
        </li>
        <?php if (Auth::check() && Auth::user()->is_admin) : ?>
            <li @if (isset($title)) class="<?php if ($title && $title == 'Admin') {
                                                echo 'active';
                                            } ?>" @endif>
                <a href="/admin" data-toggle="tooltip" data-placement="bottom" title="Admin">Admin</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>