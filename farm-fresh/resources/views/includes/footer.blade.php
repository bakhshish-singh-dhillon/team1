</main>

<footer class="light-top-border">
    <div class="text-center max-container">
        <div id="footer_nav">
            <ul>
                <li @if (isset($title)) class="<?php if ($title == 'Home') {
                    echo 'active';
                } ?>" @endif><a href="/"
                        data-toggle="tooltip" data-placement="bottom" title="Home">Home</a></li>
                <li @if (isset($title)) class="<?php if ($title == 'Terms & Conditions') {
                    echo 'active';
                } ?>" @endif><a href="/terms-and-conditions"
                        data-toggle="tooltip" data-placement="bottom" title="Terms & Conditions">Terms & Conditions</a>
                </li>
                <li @if (isset($title)) class="<?php if ($title == 'About') {
                    echo 'active';
                } ?>" @endif><a href="/about"
                        data-toggle="tooltip" data-placement="bottom" title="About">About</a>
                </li>
                <li @if (isset($title)) class="<?php if ($title == 'Contact') {
                    echo 'active';
                } ?>" @endif><a href="/contact"
                        data-toggle="tooltip" data-placement="bottom" title="Contact">Contact</a>
                </li>
                <li @if (isset($title)) class="<?php if ($title == 'Privacy Policy') {
                    echo 'active';
                } ?>" @endif><a href="/privacy-policy"
                        data-toggle="tooltip" data-placement="bottom" title="Privacy Policy">Privacy Policy</a></li>
            </ul>
        </div>

        <div>
            <span><img src="/images/youtube.png" alt="Youtube" class="tiny-icon m-2 my-3" data-toggle="tooltip"
                    data-placement="bottom" title="Youtube" /></span>
            <span><img src="/images/instagram.png" alt="Instagram" class="tiny-icon m-2 my-3" data-toggle="tooltip"
                    data-placement="bottom" title="Instagram" /></span>
            <span><img src="/images/twitter.png" alt="Twitter" class="tiny-icon m-2 my-3" data-toggle="tooltip"
                    data-placement="bottom" title="Twitter" /></span>
            <span><img src="/images/facebook.png" alt="Facebook" class="tiny-icon m-2 my-3" data-toggle="tooltip"
                    data-placement="bottom" title="Facebook" /></span>
        </div>

        <p class="pb-2 m-0"><small>Copyrights &copy; FarmFresh 2022</small></p>
    </div>
</footer>

</div>
@yield('custom-js')
</body>

</html>
