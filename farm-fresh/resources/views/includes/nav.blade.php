<nav class="navbar navbar-expand-lg navbar-dark" id="header_nav">
    <button class="navbar-toggler btn  bg-green  border border-none text-gray px-2 py-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul>
            <li class="nav-item" @if (isset($title)) class="<?php if ($title && $title == 'Home') {
                                                                echo 'active';
                                                            } ?>" @endif><a class="nav-link" href="/" data-toggle="tooltip" data-placement="bottom" title="Home">Home</a></li>
            <li class="nav-item" @if (isset($title)) class="<?php if ($title && $title == 'Products') {
                                                                echo 'active';
                                                            } ?>" @endif><a class="nav-link" href="/products" data-toggle="tooltip" data-placement="bottom" title="Products">Products</a></li>
            <li class="nav-item" @if (isset($title)) class="<?php if ($title && $title == 'About') {
                                                                echo 'active';
                                                            } ?>" @endif><a class="nav-link" href="/about" data-toggle="tooltip" data-placement="bottom" title="About">About</a></li>
            <li class="nav-item" @if (isset($title)) class="<?php if ($title && $title == 'Contact') {
                                                                echo 'active';
                                                            } ?>" @endif><a class="nav-link" href="/contact" data-toggle="tooltip" data-placement="bottom" title="Contact">Contact</a></li>
            <?php if (Auth::check() && Auth::user()->is_admin) : ?>
                <li class="nav-item" @if (isset($title)) class="<?php if ($title && $title == 'Admin') {
                                                                    echo 'active';
                                                                } ?>" @endif><a class="nav-link" href="/admin" data-toggle="tooltip" data-placement="bottom" title="Admin">Admin</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>