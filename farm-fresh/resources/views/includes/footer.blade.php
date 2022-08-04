</main>

<footer class="light-top-border">
    <div class="text-center max-container">
        <div id="footer_nav">
            <ul>
                <li @if (isset($title)) class="<?php if ($title == 'Home') {
                                                    echo 'active';
                                                } ?>" @endif><a href="/" data-toggle="tooltip" data-placement="bottom" title="Home">Home</a></li>
                <li @if (isset($title)) class="<?php if ($title == 'Terms & Conditions') {
                                                    echo 'active';
                                                } ?>" @endif><a href="/terms-and-conditions" data-toggle="tooltip" data-placement="bottom" title="Terms & Conditions">Terms & Conditions</a>
                </li>
                <li @if (isset($title)) class="<?php if ($title == 'About') {
                                                    echo 'active';
                                                } ?>" @endif><a href="/about" data-toggle="tooltip" data-placement="bottom" title="About">About</a>
                </li>
                <li @if (isset($title)) class="<?php if ($title == 'Contact') {
                                                    echo 'active';
                                                } ?>" @endif><a href="/contact" data-toggle="tooltip" data-placement="bottom" title="Contact">Contact</a>
                </li>
                <li @if (isset($title)) class="<?php if ($title == 'Privacy Policy') {
                                                    echo 'active';
                                                } ?>" @endif><a href="/privacy-policy" data-toggle="tooltip" data-placement="bottom" title="Privacy Policy">Privacy Policy</a></li>
            </ul>
        </div>

        <div>
            <span>
                <a href="https://www.pinterest.com/" target="blank"><i class="fa-brands fa-pinterest rounded-circle m-2 p-2 my-3 text-white bg-green"></i></a>
            </span>
            <span>
                <a href="https://www.instagram.com/" target="blank"><i class="fa-brands fa-instagram rounded-circle m-2 p-2 my-3 text-white bg-green"></i></a>
            </span>
            <span>
                <a href="https://www.twitter.com/" target="blank"><i class="fa-brands fa-twitter rounded-circle m-2 p-2 my-3 text-white bg-green"></i></a>
            </span>
            <span>
                <a href="https://www.facebook.com/" target="blank"><i class="fa-brands fa-facebook rounded-circle m-2 p-2 my-3 text-white bg-green"></i></a>
            </span>
        </div>

        <p class="pb-2 m-0"><small>Copyrights &copy; FarmFresh 2022</small></p>
    </div>
</footer>

</div>
@yield('custom-js')
</body>

</html>