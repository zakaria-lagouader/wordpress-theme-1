<?php get_header() ?>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="text-dark mb-0">
                    We are the Qurno, <br />
                    Team of content writers and designers.
                </h2>
            </div>
        </div>

        <div class="py-5 my-3">
            <div class="row g-4 justify-content-center text-center">
                <div class="col-lg-6 image-grid-1">
                    <img class="w-100 h-auto rounded" src="<?php asset("assets/images/about/01.jpg") ?>" alt="" width="620" height="346" />
                </div>

                <div class="col-lg-3 col-6 image-grid-2">
                    <img class="img-fluid rounded" src="<?php asset("assets/images/about/00.jpg") ?>" alt="" width="460" height="515" />
                </div>

                <div class="col-lg-3 col-6 image-grid-3">
                    <img class="img-fluid rounded" src="<?php asset("assets/images/about/02.jpg") ?>" alt="" width="460" height="444" />
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="content">
                    <p>
                        If ever a place existed where you could just go crazy
                        creatively, it is definitely your about page. It’s your
                        chance to show your readers who you really are. Pictures,
                        quotes, inspirational graphics, whatever it is that drives
                        you.. Display it here in a way that only you can.
                    </p>
                    <p>
                        I’ve included a plugin in the setup of this theme that will
                        make adding columns to your pages and posts a piece of cake.
                        Let creativity take control, and forget about the technical
                        end of things, I’ve got your six.
                    </p>
                </div>
            </div>
        </div>
        <div class="section-sm pb-0">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title">
                        <span>Our writers</span>
                    </h2>


                    <div class="row gx-4 gy-5 gx-md-5 justify-content-center text-center">
                        <?php foreach (get_users() as $user) : ?>
                            <div class="col-md-4 col-sm-6">
                                <a class="d-inline-block is-hoverable" href="author-single.html">
                                    <img class="img-fluid rounded" src="<?= get_avatar_url($user->ID, array('size' => 450)) ?>" alt="Chris Impey" width="150" height="150" />
                                    <h4 class="text-dark mt-4 mb-1"><?= $user->display_name ?></h4>
                                    <p class="mb-0">
                                        <span class="fw-bold text-black"><?= count_user_posts($user->ID) ?></span>
                                        Published posts
                                    </p>
                                </a>
                            </div>
                        <?php endforeach ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>