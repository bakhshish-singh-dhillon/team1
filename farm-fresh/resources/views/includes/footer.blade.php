</main>

<footer class="revert-shadow">
    <div class="text-center max-container">
        <div id="footer_nav">
            <ul>
                <li class="<?php if ($title == 'Home') echo 'active';  ?>"><a href="/">Home</a></li>
                <li class="<?php if ($title == 'Terms & Conditions') echo 'active';  ?>"><a href="/terms-and-conditions">Terms & Conditions</a></li>
                <li class="<?php if ($title == 'About') echo 'active';  ?>"><a href="/about">About</a></li>
                <li class="<?php if ($title == 'Contact') echo 'active';  ?>"><a href="/contact">Contact</a></li>
                <li class="<?php if ($title == 'Privacy Policy') echo 'active';  ?>"><a href="/privacy-policy">Privacy Policy</a></li>
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