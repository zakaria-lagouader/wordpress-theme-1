<!-- start of footer -->
<footer>
    <div class="container">
        <div class="section">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <!-- newsletter block -->
                    <div class="newsletter-block">
                        <h2 class="section-title text-center mb-4">
                            Get latest posts delivered right to your inbox
                        </h2>
                        <form action="#!" method="post" novalidate="">
                            <div class="input-group flex-column flex-sm-row flex-nowrap flex-sm-nowrap">
                                <input type="email" name="email" class="form-control required email w-auto text-center text-sm-start" placeholder="Your email address" aria-label="Subscription" required="" />
                                <div class="input-group-append d-flex d-sm-inline-block mt-2 mt-sm-0 ms-0 w-auto">
                                    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="input-group-text w-100 justify-content-center" aria-label="Subscription Button">
                                        <i class="ti ti-user-plus me-2"></i>
                                        Join today
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- newsletter block -->
                </div>
            </div>
        </div>
        <div class="pb-5">
            <div class="row g-2 g-lg-4 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <p class="mb-0 copyright-text content">
                        &copy; <?= date('Y') ?> <?php bloginfo("name") ?>. All rights reserved.
                    </p>
                </div>
                <div class="col-lg-6 text-center text-lg-end">
                    <?php wp_nav_menu(array(
                        'theme_location'  => 'footer',
                        'container' => '',
                        'menu_class'  => 'list-inline footer-menu',
                        'add_li_class'  => 'list-inline-item m-0',
                    )); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end of footer -->

<?php wp_footer() ?>
</body>

</html>