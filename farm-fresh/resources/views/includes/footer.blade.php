</main>

<footer class="light-top-border">
    <div class="text-center max-container">
        <div id="footer_nav">
            <ul>
                <li @if(isset($title)) class="<?php if ($title == 'Home') echo 'active';  ?>" @endif><a href="/">Home</a></li>
                <li @if(isset($title)) class="<?php if ($title == 'Terms & Conditions') echo 'active';  ?>" @endif><a href="/terms-and-conditions">Terms & Conditions</a></li>
                <li @if(isset($title)) class="<?php if ($title == 'About') echo 'active';  ?>" @endif><a href="/about">About</a></li>
                <li @if(isset($title)) class="<?php if ($title == 'Contact') echo 'active';  ?>" @endif><a href="/contact">Contact</a></li>
                <li @if(isset($title)) class="<?php if ($title == 'Privacy Policy') echo 'active';  ?>" @endif><a href="/privacy-policy">Privacy Policy</a></li>
            </ul>
        </div>

        <div>
            <span><img src="/images/youtube.png" alt="Youtube" class="tiny-icon m-2 my-3" /></span>
            <span><img src="/images/instagram.png" alt="Instagram" class="tiny-icon m-2 my-3" /></span>
            <span><img src="/images/twitter.png" alt="Twitter" class="tiny-icon m-2 my-3" /></span>
            <span><img src="/images/facebook.png" alt="Facebook" class="tiny-icon m-2 my-3" /></span>
        </div>

        <p class="pb-2 m-0"><small>Copyrights &copy; FarmFresh 2022</small></p>
    </div>
</footer>

</div>
@yield('custom-js')
</body>

</html>